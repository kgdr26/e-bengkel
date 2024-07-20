@extends('dashboard')
@section('content')


<div class="container">
    <!-- row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- pageheader -->
                <div>
                    <h2>Dashboard</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
                @if ($idnusr->role_id == 4)
                    <div>
                        <button type="button" class="btn btn-primary" data-name="booking">Booking</button>
                    </div>
                @endif
                <!-- button -->
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
                <!-- card body -->
                <div class="card-body p-3">
                    <!-- table -->
                    <div class="table-responsive ">
                        <table class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox" id="dataTable">
                            <thead class="bg-light">
                                <tr>
                                    <th>No</th>
                                    <th>Name Customer</th>
                                    <th>No Tlp</th>
                                    <th>Nopol</th>
                                    <th>Merk Kendaraan</th>
                                    <th>Keperluan</th>
                                    <th>Date Booking</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach($arr as $key => $value)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->no_tlp}}</td>
                                        <td>{{$value->nopol}}</td>
                                        <td>{{$value->merk_kendaraan}}</td>
                                        <td>{{$value->kep_name}}</td>
                                        <td>{{$value->date_booking}}</td>
                                        <td>
                                            @if($value->status == 1)
                                                <span class="badge bg-light-warning text-dark-warning">Booking</span>
                                            @elseif($value->status == 2)
                                                <span class="badge bg-light-primary text-dark-primary">Confirmation</span>
                                            @elseif($value->status == 3)
                                                <span class="badge bg-light-info text-dark-info">On Progress</span>
                                            @elseif($value->status == 4)
                                                <span class="badge bg-light-success text-dark-success">Close</span>
                                            @else
                                                <span class="badge bg-light-warning text-dark-warning">Booking</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-info btn-sm" data-item="{{$value->id}}" data-name="detail"><i class="bi bi-eye-fill"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Booking -->
<div class="modal fade" id="booking" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="bookingModalLabel">Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal</label>
                    <input type="text" class="form-control" id="" placeholder="Tanggal" data-name="date">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="" placeholder="Nama" data-name="name" value="{{$idnusr->name}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">No TLP/ No WA</label>
                    <input type="text" class="form-control" id="" placeholder="No Tlp/ No WA" data-name="no_tlp" value="{{$idnusr->no_tlp}}">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Nopol</label>
                    <input type="text" class="form-control" id="" placeholder="Nopol" data-name="nopol">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Merk Kendaraan</label>
                    <textarea class="form-control" id="" cols="30" rows="5" data-name="merk_kendaraan"></textarea>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Keperluan</label>
                    <select name="" id="" class="form-select select2-booking" data-name="keperluan">
                        <option value="">-- Pilih Keperluan --</option>
                        @foreach($kep as $k => $v)
                            <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-primary w-100" data-name="save_booking">Booking</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Booking -->

<!-- Modal Show QR Booking -->
<div class="modal fade" id="showqrbooking" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="bookingModalLabel">QR Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="ssanqrcode">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="w-100 d-flex justify-content-center">
                            {{-- <img src="{{asset('assets/qrbooking/657149261805e.svg')}}" alt=""> --}}
                            <img id="imgaeqr" src="" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Kode QR</td>
                                    <td id="kd_qr">: -</td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td id="kd_tgl">: -</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td id="kd_name">: -</td>
                                </tr>
                                <tr>
                                    <td>No Tlp/ No WA</td>
                                    <td id="kd_tlp">: -</td>
                                </tr>
                                <tr>
                                    <td>No Polisi</td>
                                    <td id="kd_nopol">: -</td>
                                </tr>
                                <tr>
                                    <td>Keperluan</td>
                                    <td id="kd_kep">: -</td>
                                </tr>
                                <tr>
                                    <td>Dibuat Tanggal</td>
                                    <td id="kd_diptgl">: -</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-primary w-100" data-name="save_bukti_booking" data-item="">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Show QR Booking -->

<!-- Modal Show QR Booking -->
<div class="modal fade" id="viewdetail" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="bookingModalLabel">Detail Booking</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="w-100 d-flex justify-content-center">
                            {{-- <img src="{{asset('assets/qrbooking/657149261805e.svg')}}" alt=""> --}}
                            <img id="detail_imgaeqr" src="" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Kode QR</td>
                                    <td id="kd_qr_detail">: -</td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td id="kd_tgl_detail">: -</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td id="kd_name_detail">: -</td>
                                </tr>
                                <tr>
                                    <td>No Tlp/ No WA</td>
                                    <td id="kd_tlp_detail">: -</td>
                                </tr>
                                <tr>
                                    <td>No Polisi</td>
                                    <td id="kd_nopol_detail">: -</td>
                                </tr>
                                <tr>
                                    <td>Keperluan</td>
                                    <td id="kd_kep_detail">: -</td>
                                </tr>
                                <tr>
                                    <td>Dibuat Tanggal</td>
                                    <td id="kd_diptgl_detail">: -</td>
                                </tr>

                                <tr>
                                    <td>Tgl Konfirmation</td>
                                    <td id="kd_conftfl_detail">: -</td>
                                </tr>

                                <tr>
                                    <td>User Konfrimation</td>
                                    <td id="kd_userconf_detail">: -</td>
                                </tr>

                                <tr>
                                    <td>Montir</td>
                                    <td id="kd_usermontir_detail">: -</td>
                                </tr>

                                <tr>
                                    <td>Start</td>
                                    <td id="kd_start_detail">: -</td>
                                </tr>

                                <tr>
                                    <td>End</td>
                                    <td id="kd_end_detail">: -</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center">
            </div>
        </div>
    </div>
</div>
<!-- End Modal Show QR Booking -->

{{-- Datatable --}}
<script>
    $('#dataTable').DataTable();
</script>
{{-- End Datatable --}}

{{-- JS Booking --}}
<script>
    $(document).on("click", "[data-name='detail']", function (e) {
        var id      = $(this).attr("data-item");

        $.ajax({
            type: "POST",
            url: "{{ route('viewdetailbooking') }}",
            data: {id:id},
            cache: false,
            success: function(data) {
                console.log(data);
                var newImagePath = "{{asset('assets/qrbooking/')}}/"+data.kode_qr+".svg";
                $('#detail_imgaeqr').attr("src", newImagePath);
                $('#kd_qr_detail').text(': '+data.kode_qr);
                $('#kd_tgl_detail').text(': '+moment(data.date).format('DD MMMM YYYY'));
                $('#kd_name_detail').text(': '+data.name);
                $('#kd_tlp_detail').text(': '+data.no_tlp);
                $('#kd_nopol_detail').text(': '+data.nopol);
                $('#kd_kep_detail').text(': '+data.kd_kep);
                $('#kd_diptgl_detail').text(': '+moment(data.dtbooking).format('DD MMMM YYYY H:mm:ss'));
                $('#kd_conftfl_detail').text(': '+moment(data.date_confirmation).format('DD MMMM YYYY H:mm:ss'));
                $('#kd_start_detail').text(': '+moment(data.date_start).format('DD MMMM YYYY H:mm:ss'));
                $('#kd_end_detail').text(': '+moment(data.date_end).format('DD MMMM YYYY H:mm:ss'));
                $('#kd_userconf_detail').text(': '+data.name_confir);
                $('#kd_usermontir_detail').text(': '+data.name_montir);
                $("#viewdetail").modal('show');
            },
            error: function (data) {
                Swal.fire({
                    position:'center',
                    title: 'Action Not Valid!',
                    icon: 'warning',
                    showConfirmButton: true,
                    // timer: 1500
                }).then((dat) => {
                    // location.reload();
                })
            }
        });
    });

    $(document).on("click", "[data-name='booking']", function (e) {
        $("[data-name='date']").val('');
        $("[data-name='keperluan']").val('');
        $("[data-name='nopol']").val('');
        $("[data-name='merk_kendaraan']").val('');
        $("#booking").modal('show');
    });

    $(document).on("click", "[data-name='save_booking']", function (e) {
        $(".preload-wrapper").css("display", "block");
        var date        = $("[data-name='date']").val();
        var name        = $("[data-name='name']").val();
        var no_tlp      = $("[data-name='no_tlp']").val();
        var keperluan   = $("[data-name='keperluan']").val();
        var nopol       = $("[data-name='nopol']").val();
        var merk_kendaraan  = $("[data-name='merk_kendaraan']").val();
        var dtbooking   = new Date();
        var date_booking    = moment(dtbooking).format('YYYY-MM-DD HH:mm:ss');
        var table       = "trx_booking";


        if(date === '' || name === '' || no_tlp === '' || keperluan === ''){
            Swal.fire({
                position:'center',
                title: 'Form is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
        }else{
            $.ajax({
                type: "POST",
                url: "{{ route('qrbooking') }}",
                data: {date:date,keperluan:keperluan},
                cache: false,
                success: function(dat) {
                    // console.log(dat);
                    var kode_qr = dat.qrname;
                    var kd_kep  = dat.kd_kep;
                    var data        = {
                        date_booking:date_booking,
                        date:date,
                        name:name,
                        no_tlp:no_tlp,
                        keperluan:keperluan,
                        nopol:nopol,
                        merk_kendaraan:merk_kendaraan,
                        kode_qr:kode_qr,
                        status:1
                    };

                    // console.log(data);

                    $.ajax({
                        type: "POST",
                        url: "{{ route('actionadd') }}",
                        data: {table: table, data: data},
                        cache: false,
                        success: function(dat) {
                            // console.log(dat);
                            var newImagePath = "{{asset('assets/qrbooking/')}}/"+kode_qr+".svg";
                            $('#imgaeqr').attr("src", newImagePath);
                            $('#kd_qr').text(': '+kode_qr);
                            $('#kd_tgl').text(': '+moment(date).format('DD MMMM YYYY'));
                            $('#kd_name').text(': '+name);
                            $('#kd_tlp').text(': '+no_tlp);
                            $('#kd_nopol').text(': '+nopol);
                            $('#kd_kep').text(': '+kd_kep);
                            $('#kd_diptgl').text(': '+moment(dtbooking).format('DD MMMM YYYY H:mm:ss'));
                            $('[data-name="save_bukti_booking"]').attr("data-item", kode_qr);

                            $("#booking").modal('hide');
                            $("#showqrbooking").modal('show');
                            $(".preload-wrapper").css("display", "none");
                        },
                        error: function (dat) {
                            Swal.fire({
                                position:'center',
                                title: 'Action Not Valid!',
                                icon: 'warning',
                                showConfirmButton: true,
                                // timer: 1500
                            }).then((dat) => {
                                // location.reload();
                            })
                        }
                    });

                },
                error: function (dat) {
                    Swal.fire({
                        position:'center',
                        title: 'Action Not Valid!',
                        icon: 'warning',
                        showConfirmButton: true,
                        // timer: 1500
                    }).then((dat) => {
                        // location.reload();
                    })
                }
            });
        }
    });

    $(document).on("click", "[data-name='save_bukti_booking']", function (e) {
        var elementToCapture    = document.getElementById("ssanqrcode");
        var namefilecapture     = $(this).attr("data-item");
        html2canvas(elementToCapture).then(function(canvas) {
            var imageDataUrl = canvas.toDataURL("image/png");
            var downloadLink = document.createElement("a");
            downloadLink.href = imageDataUrl;
            date    = new Date();
            downloadLink.download = "trisnahondamotor-"+moment(date).format('DD-MMMM-YYYY')+".png";
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
        });
    });
</script>
{{-- JS Booking --}}

{{-- Select2 --}}
<script>
    $(".select2-booking").select2({
        allowClear: false,
        width: '100%',
        dropdownParent: $("#booking")
    });
</script>
{{-- End Select2 --}}

{{-- JS Datepicker --}}
<script>
    $('[data-name="date"]').datepicker({
        minDate: 0,
        format: "yyyy-mm-dd",
        viewMode: "days",
        minViewMode: "days",
        autoclose: true
    }).on('changeDate', function(e) {
        var date        = e.date;
        var currentDate = new Date();

        var inputDate   = new Date(e.date);
        var today       = new Date();
        today.setHours(0, 0, 0, 0);
        var yesterday   = new Date(today);
        yesterday.setDate(today.getDate() - 1);

        if(inputDate <= yesterday){
            Swal.fire({
                position:'center',
                title: 'You select a past date!',
                icon: 'warning',
                showConfirmButton: true,
                // timer: 1500
            }).then((data) => {
                $('[data-name="date"]').val('');
            })
        }
    });
</script>
{{-- End JS Datepicker --}}

@stop
