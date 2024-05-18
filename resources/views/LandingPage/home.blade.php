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
            @for($i = 1; $i <= 10; $i++)
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center position-relative ">
                                <a href="#!">
                                    <img src="{{asset('assets/images/products/sparepart1.jpg')}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid">
                                </a>

                                <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="text-small mb-1">
                                <a href="#!" class="text-decoration-none text-muted">
                                    <small>Rantai Roda Kit</small>
                                </a>
                            </div>
                            <h2 class="fs-6">
                                <a href="" class="text-inherit text-decoration-none">(Drive Chain Kit) – Verza 150</a>
                            </h2>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-dark">Rp. 300.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<!-- Popular Products End-->
{{-- <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-6">
                <h3 class="mb-0">Daily Best Sells</h3>
            </div>
        </div>
        <div class="table-responsive-xl pb-6">
            <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
                <div class="col">
                    <div class=" pt-8 px-6 px-xl-8 rounded"
                        style="background:url(assets/images/banner/banner-deal.jpg)no-repeat; background-size: cover; height: 470px;">
                        <div>
                            <h3 class="fw-bold text-white">100% Organic
                                Coffee Beans.
                            </h3>
                            <p class="text-white">Get the best deal before close.</p>
                            <a href="#!" class="btn btn-primary">Shop Now <i
                                    class="feather-icon icon-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img
                                        src="assets/images/products/product-img-11.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>

                                <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                </div>
                            </div>
                            <div class="text-small mb-1"><a href="#!"
                                    class="text-decoration-none text-muted"><small>Tea, Coffee &
                                        Drinks</small></a></div>
                            <h2 class="fs-6"><a href="pages/shop-single.html"
                                    class="text-inherit text-decoration-none">Roast
                                    Ground Coffee</a></h2>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div><span class="text-dark">$13</span> <span
                                        class="text-decoration-line-through text-muted">$18</span>
                                </div>
                                <div>
                                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </small>
                                    <span><small>4.5</small></span>
                                </div>
                            </div>
                            <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg> Add to cart </a></div>
                            <div class="d-flex justify-content-start text-center mt-3">
                                <div class="deals-countdown w-100" data-countdown="2028/10/10 00:00:00"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img
                                        src="assets/images/products/product-img-12.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                </div>
                            </div>
                            <div class="text-small mb-1"><a href="#!"
                                    class="text-decoration-none text-muted"><small>Fruits &
                                        Vegetables</small></a></div>
                            <h2 class="fs-6"><a href="pages/shop-single.html"
                                    class="text-inherit text-decoration-none">Crushed
                                    Tomatoes</a></h2>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div><span class="text-dark">$13</span> <span
                                        class="text-decoration-line-through text-muted">$18</span>
                                </div>
                                <div>
                                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                    </small>
                                    <span><small>4.5</small></span>
                                </div>
                            </div>
                            <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg> Add to cart </a></div>
                            <div class="d-flex justify-content-start text-center mt-3 w-100">
                                <div class="deals-countdown w-100" data-countdown="2028/12/9 00:00:00"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img
                                        src="assets/images/products/product-img-13.jpg"
                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                <div class="card-product-action">
                                    <a href="#!" class="btn-action" data-bs-toggle="modal"
                                        data-bs-target="#quickViewModal"><i class="bi bi-eye"
                                            data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Wishlist"><i class="bi bi-heart"></i></a>
                                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true"
                                        title="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                </div>
                            </div>
                            <div class="text-small mb-1"><a href="#!"
                                    class="text-decoration-none text-muted"><small>Fruits &
                                        Vegetables</small></a></div>
                            <h2 class="fs-6"><a href="pages/shop-single.html"
                                    class="text-inherit text-decoration-none">Golden
                                    Pineapple</a></h2>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div><span class="text-dark">$13</span> <span
                                        class="text-decoration-line-through text-muted">$18</span>
                                </div>
                                <div>
                                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i></small>
                                    <span><small>4.5</small></span>
                                </div>
                            </div>
                            <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg> Add to cart </a></div>
                            <div class="d-flex justify-content-start text-center mt-3">
                                <div class="deals-countdown w-100" data-countdown="2028/11/11 00:00:00"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


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
