@extends('landingpage')
@section('content')

<section class="mt-8">
    <div class="container">
        <div class="hero-slider ">
            <div style="background: url({{asset('assets/images/slider/gmbsiled1.png')}})no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                    <h2 class="text-dark display-5 fw-bold mt-4">Pelayanan Yang Ramah </h2>
                    <p class="lead">Nikmati pelayanan yang ramah di bengkel kami & teknisi yang berpengalaman.</p>
                    <a href="#" class="btn btn-dark mt-3" data-name="booking">Booking Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>
            </div>
            <div style="background: url({{asset('assets/images/slider/gmbsiled2.png')}})no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                    <h2 class="text-dark display-5 fw-bold mt-4">Sparepart yang lengkap </h2>
                    <p class="lead">Tak perlu khawatir stock sparepart di kami lengkap dan slalu ready dengan berbagi jenis apapun.</p>
                    <a href="#" class="btn btn-dark mt-3" data-name="booking">Booking Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Products Start-->
<section class="my-lg-14 my-8">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-6">
                <h3 class="mb-0">Sparepart</h3>
            </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
            @foreach ($sparepart as $key => $val)
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative ">
                                <a href="#!">
                                    <img src="{{asset('assets/images/products/').'/'.$val->image}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                </a>
                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted">
                                    <small>{{$val->kode_part}}</small>
                                </a>
                            </div>
                            <h2 class="fs-6">
                                <a href="" class="text-inherit text-decoration-none">{{$val->name}}</a>
                            </h2>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark">Rp. {{number_format($val->price, 0, ',', '.')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Modal --}}
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-8">
                <div class="position-absolute top-0 end-0 me-3 mt-3">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">
                            <div class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset('assets/images/products/sparepart1.jpg')}});">
                                <!-- img -->
                                <img src="{{asset('assets/images/products/sparepart1.jpg')}}" alt="">
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset('assets/images/products/sparepart1.jpg')}});">
                                    <!-- img -->
                                    <img src="{{asset('assets/images/products/sparepart1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset('assets/images/products/sparepart1.jpg')}});">
                                    <!-- img -->
                                    <img src="{{asset('assets/images/products/sparepart1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="zoom" onmousemove="zoom(event)" style="background-image: url({{asset('assets/images/products/sparepart1.jpg')}});">
                                    <!-- img -->
                                    <img src="{{asset('assets/images/products/sparepart1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                            <div class="thumbnails row g-3" id="productModalThumbnails">
                                <div class="col-3" class="tns-nav-active">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="{{asset('assets/images/products/sparepart1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="{{asset('assets/images/products/sparepart1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="{{asset('assets/images/products/sparepart1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="thumbnails-img">
                                        <!-- img -->
                                        <img src="{{asset('assets/images/products/sparepart1.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ps-lg-8 mt-6 mt-lg-0">
                            <a href="#!" class="mb-4 d-block">Rantai Roda Kit</a>
                            <h2 class="mb-1 h1">(Drive Chain Kit) – Verza 150</h2>
                            <div class="fs-4">
                                <span class="fw-bold text-dark">Rp. 300.000</span>
                            </div>
                            <hr class="my-6">
                            <div>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Kode Part</td>
                                            <td>: 06401K18900</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Resmi Produk</td>
                                            <td>: Drive Chain Kit</td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td>: Rantai Roda (Drive Chain Kit)</td>
                                        </tr>
                                        <tr>
                                            <td>Produk ini bisa digunakan oleh motor:</td>
                                            <td>
                                                <ul>
                                                    <li>Verza 150 (2013 - 2018)</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
