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
                            <h2 class="mb-0">Booking ID: -</h2>
                            <span class="badge bg-light-warning text-dark-warning ms-2">Pending</span>
                        </div>
                    </div>
                    <div class="mt-8">
                        <div class="row">
                            <!-- address -->
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="mb-6">
                                    <h6>Customer Details</h6>
                                    <p class="mb-1 lh-lg">
                                        Name : <span class="text-dark">-</span><br>
                                        No Tlp : <span class="text-dark">-</span><br>
                                        Nopol : <span class="text-dark">-</span>
                                    </p>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="mb-6">
                                    <h6>Keperluan</h6>
                                    <p class="mb-1 lh-lg">-</p>
                                </div>
                            </div>
                            <!-- address -->
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="mb-6">
                                    <h6>Order Details</h6>
                                    <p class="mb-1 lh-lg">
                                        Code Booking : <span class="text-dark">-</span><br>
                                        Date Booking : <span class="text-dark">-</span><br>
                                        Date Create Booking : <span class="text-dark">-</span>
                                    </p>
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
                                    </tr>
                                </thead>
                                <!-- tbody -->
                                <tbody>
                                    <tr>
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
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0 pb-0"></td>
                                        <td class="border-bottom-0 pb-0"></td>
                                        <td colspan="1" class="fw-medium text-dark ">
                                            <!-- text -->
                                            Sub Total :
                                        </td>
                                        <td class="fw-medium text-dark ">
                                            <!-- text -->
                                            $80.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom-0 pb-0"></td>
                                        <td class="border-bottom-0 pb-0"></td>
                                        <td colspan="2" class="fw-medium text-dark text-end">
                                            <button type="button" class="btn btn-success" data-name="">Save And Confirmation</button>
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

@stop
