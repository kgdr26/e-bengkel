@extends('dashboard')
@section('content')

<div class="container">
    <!-- row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <div>
                    <!-- page header -->
                    <h2>Action Booking</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Action Booking</li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
                <div>
                    <button type="button" class="btn btn-primary" data-name="submit_kode_booking">Submit Kode Booking</button>
                </div>

            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row ">
        <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
                <div class="card-body p-6">
                    <div class="d-md-flex justify-content-between">
                        <div class="d-flex align-items-center mb-2 mb-md-0">
                            <h2 class="mb-0">Booking ID: {{$dt['date_booking']}}</h2>
                            <span class="badge bg-light-warning text-dark-warning ms-2">Booking</span>
                        </div>
                    </div>
                    <div class="mt-8">
                        <div class="row">
                            <!-- address -->
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="mb-6">
                                    <h6>Customer Details</h6>
                                    <p class="mb-1 lh-lg">
                                        Name : <span class="text-dark">{{$dt['name']}}</span><br>
                                        No Tlp : <span class="text-dark">{{$dt['no_tlp']}}</span><br>
                                        Nopol : <span class="text-dark">{{$dt['nopol']}}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="mb-6">
                                    <h6>Order Details</h6>
                                    <p class="mb-1 lh-lg">
                                        Code Booking : <span class="text-dark">{{$dt['kode_qr']}}</span><br>
                                        Date Booking : <span class="text-dark">{{$dt['date']}}</span><br>
                                        Date Create Booking : <span class="text-dark">{{$dt['date_booking']}}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="mb-6">
                                    <h6>Keperluan</h6>
                                    @if($dt['keperluan'] == 1)
                                        <p class="mb-1 lh-lg">Services</p>
                                    @elseif($dt['keperluan'] == 2)
                                        <p class="mb-1 lh-lg">Pergantian Sparepart</p>
                                    @else
                                        <p class="mb-1 lh-lg">-</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <!-- Table -->
                            <table class="table mb-0 text-nowrap table-centered">
                                <!-- Table Head -->
                                <thead class="bg-light">
                                    <tr>
                                        <th>Products</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5" class="fw-medium text-dark text-center">
                                            Data Not Available
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td>
                                            <a href="#" class="text-inherit">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img src="{{asset('assets/images/products/default.png')}}" alt=""  class="icon-shape icon-lg">
                                                    </div>
                                                    <div class="ms-lg-4 mt-2 mt-lg-0">
                                                        <h5 class="mb-0 h6">
                                                            Services
                                                        </h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td><span class="text-body">$18.0</span></td>
                                        <td>1</td>
                                        <td>$18.00</td>
                                        <td>Minus</td>
                                    </tr> --}}
                                    <tr>
                                        <td class="border-bottom-0 pb-0"></td>
                                        <td class="border-bottom-0 pb-0"></td>
                                        <td colspan="1" class="fw-medium text-dark ">
                                            Sub Total :
                                        </td>
                                        <td class="fw-medium text-dark ">
                                            -
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0 pb-0"></td>
                                        <td class="border-bottom-0 pb-0"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-info me-3" data-name="add_keperluan"><i class="bi bi-plus-circle-fill"></i> ADD</button>
                            <button type="button" class="btn btn-success" data-name=""><i class="bi bi-check2-all"></i> CONFIRMATION</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Submit Kode Booking --}}
<div class="modal fade" id="modal_submit_kode_booking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Submit Kode Booking</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card-style">
                            <div class="mb-3">
                                <label for="" class="form-label">Kode Booking</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-describedby="basic-addon2" data-name="kode_booking">
                                    <button type="button" class="input-group-text" id="basic-addon2" data-name="scane_kode_booking"><i class="bi bi-qr-code-scan"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="check_kode_booking">Check</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Submit Kode Booking --}}

{{-- Modal Scane Kode Booking --}}
<div class="modal fade" id="modal_scane_qr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Scane Kode Booking</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-cam">
                    <div id="qr_reader"></div>
                </div>
                <div class="form-costum">
                    <label for="" class="form-label">QR Code</label>
                    <input type="text" class="form-control" name="" placeholder="" id="val_scan_kode_booking" readonly>
                    <audio id="successSound" src="{{asset('assets/suarscane.mp3')}}"></audio>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="submit_scane_kode_booking">Check</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Scane Kode Booking --}}

{{-- Modal Add Keperluan --}}
<div class="modal fade" id="modal_add_keperluan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-style">
                    <div class="mb-3">
                        <label for="" class="form-label">Select Type</label>
                        <select data-name="" class="form-select select-2-add">
                            <option value="">-- Select Type --</option>
                            <option value="1">Jasa Dll</option>
                            <option value="2">Sparepart</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Jasa Name</label>
                        <input type="text" class="form-control" data-name="">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input type="text" class="form-control" data-name="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="save_add_keperluan">Save</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Add Keperluan --}}

{{-- JS Check Kode Booking --}}
<script>
    $(document).on("click", "[data-name='submit_kode_booking']", function (e) {
        $("[data-name='kode_booking']").val('');
        $("#modal_submit_kode_booking").modal('show');
    });

    $(document).on("click", "[data-name='check_kode_booking']", function (e) {
        var id      = $("[data-name='kode_booking']").val();
        var table   = 'trx_booking';
        var field   = 'kode_qr';

        $.ajax({
            type: "POST",
            url: "{{route('actionshowdata')}}",
            data: {id:id,table:table,field:field},
            cache: false,
            success: function(data) {
                console.log(data['data']);
                if(data['data'] !== null){
                    var id      = data['data'].id;
                    var urlTemplate = '{{ route("actionbooking",["id"=>"varid"])}}';
                    var url = urlTemplate.replace('varid', id);
                    window.location.href = url;
                }else{
                    Swal.fire({
                        position:'center',
                        title: 'Data Not Available',
                        icon: 'warning',
                        showConfirmButton: true,
                        // timer: 1500
                    }).then((data) => {
                        // location.reload();
                    })
                }
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


        $("#modal_submit_kode_booking").modal('show');
    });
</script>
{{-- End JS Check Kode Booking --}}

{{-- JS Add kwpwrluan --}}
<script>
    $(document).on("click", "[data-name='add_keperluan']", function (e) {   
        $("[data-name='kode_booking']").val('');
        $("#modal_add_keperluan").modal('show');
    });
</script>
{{-- End JS Add Keperluan --}}

{{-- Select2 --}}
<script>
    $(".select-2-add").select2({
        allowClear: false,
        width: '100%',
        dropdownParent: $("#modal_add_keperluan")
    });
</script>
{{-- End Select2 --}}

@stop
