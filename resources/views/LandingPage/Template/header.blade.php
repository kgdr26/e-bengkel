<div class="border-bottom ">
    <div class="py-5">
        <div class="container">
            <div class="row w-100 align-items-center gx-lg-2 gx-0">
                <div class="col-xxl-6 col-lg-6">
                    <a class="navbar-brand d-none d-lg-block" href="">
                        <img src="{{asset('assets/images/logo/logoebengkel.png')}}" style="width: 40%;" alt="eCommerce HTML Template">
                    </a>
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href="">
                            <img src="{{asset('assets/images/logo/logoebengkel.png')}}" style="width: 40%;" alt="eCommerce HTML Template">
                        </a>
                        <div class="d-flex align-items-center lh-1">
                            <button class="btn btn-primary w-100 d-flex justify-content-center align-items-center me-4" type="button" data-name="booking">
                                <span class="me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                </span> Booking
                            </button>

                            <div class="list-inline me-4">
                                <div class="list-inline-item">
                                    <a href="" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <!-- Button -->
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-indent-left text-muted" viewBox="0 0 16 16">
                                    <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-6 text-end d-none d-lg-block">
                    <div class="list-inline">
                        <div class="list-inline-item me-5">
                            <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4 " aria-label="Offcanvas navbar large">
        <div class="container">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
                <div class="offcanvas-header pb-1">
                    <a href=""><img src="{{asset('assets/images/logo/logoebengkel.png')}}" style="width: 40%;" alt="eCommerce HTML Template"></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="d-block d-lg-none mb-4">
                        <button class="btn btn-primary w-100 d-flex justify-content-center align-items-center" type="button" data-name="booking">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </span> Booking
                        </button>
                    </div>
                    <div class="dropdown me-3 d-none d-lg-block">
                        <button class="btn btn-primary w-100 d-flex justify-content-center align-items-center" type="button" data-name="booking">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </span> Booking
                        </button>
                    </div>
                    {{-- <div class="">
                        <ul class="navbar-nav align-items-center ">
                            <li class="nav-item w-100 w-lg-auto">
                                <a class="nav-link" href="">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown w-100 w-lg-auto">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Content 1
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Content 1</a></li>
                                    <li><a class="dropdown-item" href="">Content 2</a></li>
                                    <li><a class="dropdown-item" href="">Content 3</a></li>
                                    <li><a class="dropdown-item" href="">Content 4</a></li>
                                    <li><a class="dropdown-item" href="">Content 5 <span class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown w-100 w-lg-auto">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Content 2
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Content 1</a></li>
                                    <li><a class="dropdown-item" href="">Content 2</a></li>
                                    <li><a class="dropdown-item" href="">Content 3</a></li>
                                    <li><a class="dropdown-item" href="">Content 4</a></li>
                                    <li><a class="dropdown-item" href="">Content 5 <span class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown w-100 w-lg-auto">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Content 3
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Content 1</a></li>
                                    <li><a class="dropdown-item" href="">Content 2</a></li>
                                    <li><a class="dropdown-item" href="">Content 3</a></li>
                                    <li><a class="dropdown-item" href="">Content 4</a></li>
                                    <li><a class="dropdown-item" href="">Content 5 <span class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown w-100 w-lg-auto">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Content 4
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Content 1</a></li>
                                    <li><a class="dropdown-item" href="">Content 2</a></li>
                                    <li><a class="dropdown-item" href="">Content 3</a></li>
                                    <li><a class="dropdown-item" href="">Content 4</a></li>
                                    <li><a class="dropdown-item" href="">Content 5 <span class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown w-100 w-lg-auto">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Content 5
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Content 1</a></li>
                                    <li><a class="dropdown-item" href="">Content 2</a></li>
                                    <li><a class="dropdown-item" href="">Content 3</a></li>
                                    <li><a class="dropdown-item" href="">Content 4</a></li>
                                    <li><a class="dropdown-item" href="">Content 5 <span class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown w-100 w-lg-auto">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Content 6
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Content 1</a></li>
                                    <li><a class="dropdown-item" href="">Content 2</a></li>
                                    <li><a class="dropdown-item" href="">Content 3</a></li>
                                    <li><a class="dropdown-item" href="">Content 4</a></li>
                                    <li><a class="dropdown-item" href="">Content 5 <span class="badge bg-light-info text-dark-info ms-1">New</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </nav>
</div>

<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Sign in</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('login_post')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Username</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter Username" required="" name="username">
                    </div>

                    <div class="mb-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter Password" required="" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    {{-- <a href="{{route('dasbor')}}" class="btn btn-primary">Sign in</a> --}}
                </form>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                Don't have an account yet? <a href="#">Sign Up</a>
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
                    <input type="text" class="form-control" id="" placeholder="Nama" data-name="name">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">No TLP/ No WA</label>
                    <input type="text" class="form-control" id="" placeholder="No Tlp/ No WA" data-name="no_tlp">
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

{{-- JS Booking --}}
<script>
    $(document).on("click", "[data-name='booking']", function (e) {
        $("[data-name='date']").val('');
        $("[data-name='name']").val('');
        $("[data-name='no_tlp']").val('');
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
        if(date < currentDate){
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