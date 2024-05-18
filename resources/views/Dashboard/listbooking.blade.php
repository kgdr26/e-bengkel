@extends('dashboard')
@section('content')

<div class="container">
    <!-- row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- pageheader -->
                <div>
                    <h2>List Booking</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List Booking</li>
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
                                                <span class="badge bg-light-info text-dark-info">Processing</span>
                                            @elseif($value->status == 4)
                                                <span class="badge bg-light-success text-dark-success">Finished</span>
                                            @else
                                                <span class="badge bg-light-warning text-dark-warning">Booking</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="feather-icon icon-more-vertical fs-5"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <button type="button" class="dropdown-item" data-name="delete" data-item="{{$value->id}}">
                                                            <i class="bi bi-trash me-3"></i>Delete
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="dropdown-item" data-name="edit" data-item="{{$value->id}}">
                                                            <i class="bi bi-pencil-square me-3 "></i>Edit
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
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

{{-- Datatable --}}
<script>
    $('#dataTable').DataTable();
</script>
{{-- End Datatable --}}

@stop