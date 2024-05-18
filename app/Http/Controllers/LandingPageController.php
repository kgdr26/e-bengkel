<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use \Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\user;
use Auth;
use Hash;
use Redirect;
use DB;

class LandingPageController extends Controller
{

    function home(){
        $kep    = DB::select("SELECT * FROM mst_keperluan where is_active=1");
        $data = array(
            'title' => 'Home',
            'kep'   => $kep
        );

        return view('LandingPage.home')->with($data);
    }

    function qrbooking(Request $request) : object {
        $data   = $request['date'];
        $id_kep = $request['keperluan'];
        $arr    = DB::select("SELECT * FROM trx_booking");
        $jml    = count($arr)+1;
        $kep    = DB::table('mst_keperluan')->where('id', $id_kep)->first();
        $kd_kep = $kep->name;

        $qrname = str_replace("-","",$data).sprintf("%09d", $jml);
        $qrCode = QrCode::size(300)->generate($qrname);
        $filePath = 'assets/qrbooking/'.$qrname.'.svg';
        file_put_contents(public_path($filePath), $qrCode);

        $dt     = array(
            'qrname'    => $qrname,
            'kd_kep'    => $kd_kep
        );
        return response($dt);
    }

}
