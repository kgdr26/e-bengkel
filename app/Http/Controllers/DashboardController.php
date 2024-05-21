<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use \Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
use App\Models\user;
use Auth;
use Hash;
use Redirect;
use DB;

class DashboardController extends Controller
{
    function idnusr(){
        $arr    = DB::table('users')->select('users.*', 'b.name as role_name')
                    ->leftJoin('mst_role AS b', 'b.id', '=', 'users.role_id')
                    ->where('users.id', auth::user()->id)->first();
        return $arr;
    }

    function dasbor(){
        
        $data = array(
            'title' => 'Dasbor',
            'idnusr' => $this->idnusr(),
        );

        return view('Dashboard.dasbor')->with($data);
    }

    function users(){
        $arr    = DB::table('users')->select('users.*', 'mst_role.name as level')->leftJoin('mst_role', 'mst_role.id', '=', 'users.role_id')->where('users.is_active', 1)->get();
        $role   = DB::table('mst_role')->where('is_active', 1)->get();
        $data = array(
            'title' => 'Users',
            'idnusr' => $this->idnusr(),
            'arr'   => $arr,
            'role'  => $role
        );

        return view('Dashboard.users')->with($data);
    }

    function categorypart(){
        $arr = DB::table('mst_cat_part')->select('mst_cat_part.id', 'mst_cat_part.name', DB::raw('COUNT(IF(mst_sparepart.is_active = 1,1, NULL)) as jml_prod'))->leftJoin('mst_sparepart', 'mst_cat_part.id', '=', 'mst_sparepart.id_category')->groupBy('mst_cat_part.id', 'mst_cat_part.name')->where('mst_cat_part.is_active', 1)->get();
        $data = array(
            'title' => 'Kategory Sparepart',
            'idnusr' => $this->idnusr(),
            'arr'   => $arr
        );

        return view('Dashboard.categorypart')->with($data);
    }

    function listpart(){
        $arr    = DB::table('mst_sparepart')->select('mst_sparepart.*', 'mst_cat_part.name AS cat_name')->leftJoin('mst_cat_part', 'mst_cat_part.id', '=', 'mst_sparepart.id_category')->where('mst_sparepart.is_active', 1)->get();
        $cat    = DB::table('mst_cat_part')->where('is_active', 1)->get();
        $data = array(
            'title' => 'List Sparepart',
            'idnusr' => $this->idnusr(),
            'arr'   => $arr,
            'cat'   => $cat
        );

        return view('Dashboard.listpart')->with($data);
    }

    function listbooking(){
        $arr    = DB::table('trx_booking')->select('trx_booking.*', 'mst_keperluan.name AS kep_name')->leftJoin('mst_keperluan', 'mst_keperluan.id', '=', 'trx_booking.keperluan')->orderBy('trx_booking.date_booking', 'desc')->get();
        $data = array(
            'title' => 'List Data Booking',
            'idnusr' => $this->idnusr(),
            'arr'   => $arr
        );

        return view('Dashboard.listbooking')->with($data);
    }

    function actionbooking(Request $request){
        $id     = $request['id'];
        $arr    = DB::table('trx_booking')->where('id', $id)->first();
        if($arr){
            $dt['name']         = $arr->name;
            $dt['no_tlp']       = $arr->no_tlp;
            $dt['nopol']        = $arr->nopol;
            $dt['keperluan']    = $arr->keperluan;
            $dt['kode_qr']      = $arr->kode_qr;
            $dt['date']         = $arr->date;
            $dt['date_booking'] = $arr->date_booking;
        }else{
            $dt['name']         = '-';
            $dt['no_tlp']       = '-';
            $dt['nopol']        = '-';
            $dt['keperluan']    = '-';
            $dt['kode_qr']      = '-';
            $dt['date']         = '-';
            $dt['date_booking'] = '-';
        }


        $data = array(
            'title'     => 'List Data Booking',
            'idnusr'    => $this->idnusr(),
            'dt'        => $dt
        );

        return view('Dashboard.actionbooking')->with($data);
    }


    // Upload Image
    function upload_profile(Request $request) : object {

        if($request->hasFile('add_foto')){
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_foto');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/assets/images/profiles/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_foto')->move($path, $fileName);

            return response($fileName);
        }elseif($request->hasFile('add_image')){
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_image');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/assets/images/products/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_image')->move($path, $fileName);

            return response($fileName);
        }elseif($request->hasFile('add_file')){
            $fourRandomDigit = rand(10,99999);
            $photo      = $request->file('add_file');
            $fileName   = $fourRandomDigit.'.'.$photo->getClientOriginalExtension();

            $path = public_path().'/assets/file/';

            File::makeDirectory($path, 0777, true, true);

            $request->file('add_file')->move($path, $fileName);

            return response($fileName);
        }else{
            return response('Failed');
        }

    }

    // Action Add
    function actionadd(Request $request) : object {
        $table      = $request['table'];
        $dt         = $request['data'];
        if($table == 'users'){
            $data   = array(
                'username'  => $dt['username'],
                'password'  => Hash::make($dt['password']),
                'pass'      => $dt['password'],
                'role_id'   => $dt['role_id'],
                'name'      => $dt['name'],
                'email'     => $dt['email'],
                'no_tlp'    => $dt['no_tlp'],
                'foto'      => $dt['foto'],
                'is_active' => 1,
                'update_by' => 1,
            );
        }else{
            $data   = $request['data'];
        }
        // $data       = $request['data'];
        DB::table($table)->insert([$data]);
        return response('success');
    }

    // Action Edit
    function actionedit(Request $request) : object {
        $table      = $request['table'];
        $id         = $request['id'];
        $whr        = $request['whr'];
        $dt         = $request['dats'];
        if($table == 'users'){
            $data   = array(
                'username'  => $dt['username'],
                'password'  => Hash::make($dt['password']),
                'pass'      => $dt['password'],
                'role_id'   => $dt['role_id'],
                'name'      => $dt['name'],
                'email'     => $dt['email'],
                'no_tlp'    => $dt['no_tlp'],
                'foto'      => $dt['foto'],
                'update_by' => 1,
            );
        }else{
            $data   = $request['dats'];
        }

        DB::table($table)->where($whr, $id)->update($data);
        return response('success');
    }

    function actioneditwmulti(Request $request) : object {
        $table      = $request['table'];
        $id1        = $request['id1'];
        $whr1       = $request['whr1'];
        $id2        = $request['id2'];
        $whr2       = $request['whr2'];
        $data       = $request['dats'];

        DB::table($table)->where($whr1, $id1)->where($whr2, $id2)->update($data);
        return response('success');
    }

    // Action Delete
    function actiondelete(Request $request) : object {
        $table      = $request['table'];
        $id         = $request['id'];
        $whr        = $request['whr'];
        $data   = array(
            'is_active' => 0,
            'update_by' => 1,
        );
        DB::table($table)->where($whr, $id)->update($data);
        return response('success');
    }

    // Action Show Data
    function actionshowdata(Request $request) : object {
        $id     = $request['id'];
        $field  = $request['field'];
        $table  = $request['table'];
        $arr['data']    = DB::table($table)->where($field, $id)->first();
        return response($arr);
    }

    function actionshowdatawmulti(Request $request) : object {
        $id1     = $request['id1'];
        $field1  = $request['field1'];
        $id2     = $request['id2'];
        $field2  = $request['field2'];
        $table   = $request['table'];
        $arr['data']    = DB::table($table)->where($field1, $id1)->where($field2, $id2)->first();
        return response($arr);
    }

    // Action List Data
    function actionlistdata(Request $request) : object {
        if($request['id'] == 0 || $request['id'] == null){
            $id     = 1;
        }else{
            $id     = $request['id'];
        }
        $field  = $request['field'];
        $table  = $request['table'];
        $arr    = DB::select("SELECT * FROM $table WHERE $field=$id AND is_active=1 ");
        return response($arr);
    }

}
