@extends('dashboard')
@section('content')

<div class="container">
    <!-- row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- pageheader -->
                <div>
                    <h2>List Data Pengerjaan</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Montir</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List Data Pengerjaan</li>
                        </ol>
                    </nav>
                </div>
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
                                            @if ($value->status == 2)
                                                <button type="button" class="btn btn-success btn-sm" data-item="{{$value->id}}" data-name="start">Start Progress</button>
                                            @elseif ($value->status == 3)
                                                <button type="button" class="btn btn-success btn-sm" data-item="{{$value->id}}" data-name="end">End Progress</button>
                                            @else

                                            @endif
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

{{-- Modal Detail --}}
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
{{-- End MOdal Detail --}}

{{-- JS Edit Data --}}
<script>
    $(document).on("click", "[data-name='start']", function (e) {
        var id      = $(this).attr("data-item");

        $.ajax({
            type: "POST",
            url: "{{ route('startmontir') }}",
            data: {id:id},
            cache: false,
            success: function(data) {
                // console.log(data['data']);
                Swal.fire({
                    position: 'center',
                    title: 'Success!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                }).then((response) => {
                    location.reload();
                })
            },
            error: function (data) {
                Swal.fire({
                    position:'center',
                    title: 'Action Not Valid!',
                    icon: 'warning',
                    showConfirmButton: true,
                    // timer: 1500
                }).then((data) => {
                    // location.reload();
                })
            }
        });

    });

    $(document).on("click", "[data-name='end']", function (e) {
        var id      = $(this).attr("data-item");

        $.ajax({
            type: "POST",
            url: "{{ route('endmontir') }}",
            data: {id:id},
            cache: false,
            success: function(data) {
                // console.log(data['data']);
                Swal.fire({
                    position: 'center',
                    title: 'Success!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                }).then((response) => {
                    location.reload();
                })
            },
            error: function (data) {
                Swal.fire({
                    position:'center',
                    title: 'Action Not Valid!',
                    icon: 'warning',
                    showConfirmButton: true,
                    // timer: 1500
                }).then((data) => {
                    // location.reload();
                })
            }
        });

    });

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
</script>
{{-- End JS Edit Data --}}

{{-- Select2 --}}
<script>
    $(".select-2-add").select2({
        allowClear: false,
        width: '100%',
        dropdownParent: $("#modal_add")
    });

    $(".select-2-edit").select2({
        allowClear: false,
        width: '100%',
        dropdownParent: $("#modal_edit")
    });
</script>
{{-- End Select2 --}}

{{-- Datatable --}}
<script>
    $('#dataTable').DataTable();
</script>
{{-- End Datatable --}}

@stop
