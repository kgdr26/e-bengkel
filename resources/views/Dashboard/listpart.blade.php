@extends('dashboard')
@section('content')

<div class="container">
    <!-- row -->
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <!-- pageheader -->
                <div>
                    <h2>List Sparepart</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List Sparepart</li>
                        </ol>
                    </nav>
                </div>
                <!-- button -->
                <div>
                    <a href="#" class="btn btn-info" data-name="add_stock">Add Stock</a>
                    <a href="#" class="btn btn-primary" data-name="add">Add New Sparepart</a>
                </div>
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
                                    <th>Image</th>
                                    <th>Kode Part</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Support</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach($arr as $key => $val)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>
                                            <a href="#!">
                                                <img src="{{asset('assets/images/products/'.$val->image)}}" alt="" class="icon-shape icon-md">
                                            </a>
                                        </td>
                                        <td>{{$val->kode_part}}</td>
                                        <td>{{$val->name}}</td>
                                        <td>Rp. {{number_format($val->price, 0, ',', '.')}}</td>
                                        <td>{{$val->stock}}</td>
                                        <td>
                                            @php
                                                $typ_mtr    = json_decode($val->support_by);
                                            @endphp
                                            <a href="#" class="badge bg-light-info text-dark-info">
                                                {{count($typ_mtr ?? [])}} Type Motor
                                            </a>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="feather-icon icon-more-vertical fs-5"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <button type="button" class="dropdown-item" data-name="delete" data-item="{{$val->id}}">
                                                            <i class="bi bi-trash me-3"></i>Delete
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="dropdown-item" data-name="edit" data-item="{{$val->id}}">
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

{{-- Modal Add --}}
<div class="modal fade" id="modal_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Sparepart</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-8">
                        <div class="card-style">
                            <div class="mb-3">
                                <label for="" class="form-label">Kode Part</label>
                                <input type="text" class="form-control" id="" placeholder="Kode Part" data-name="kode_part">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" id="" placeholder="Name" data-name="name">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select data-name="id_category" class="form-select select-2-add">
                                    <option value="">-- Select Category --</option>
                                    @foreach($cat as $key => $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="number" class="form-control" id="" placeholder="Price" data-name="price">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="" placeholder="Stock" data-name="stock">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Support By</label>
                                <input type="text" class="form-control" id="" placeholder="Support By" data-name="support_by" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-style">
                            <div class="card-foto">
                                <img src="{{asset('assets/images/products/sample.png')}}" alt="user avatar" id="img_add">
                            </div>
                            <div class="input-type-file">
                                <input type="file" id="add_image" name="add_image" accept="image/*" />
                                <label for="add_image">Choose File</label>
                            </div>
                            <input type="hidden" id="add_name_foto" data-name="foto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="save_add">Save</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal ADD --}}

{{-- Modal Edit --}}
<div class="modal fade" id="modal_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Sparepart</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-8">
                        <div class="card-style">
                            <div class="mb-3">
                                <label for="" class="form-label">Kode Part</label>
                                <input type="text" class="form-control" id="" placeholder="Kode Part" data-name="edit_kode_part">
                                <input type="hidden" data-name="edit_id">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" id="" placeholder="Name" data-name="edit_name">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select data-name="edit_id_category" class="form-select select-2-edit">
                                    <option value="">-- Select Category --</option>
                                    @foreach($cat as $key => $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="number" class="form-control" id="" placeholder="Price" data-name="edit_price">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="" placeholder="Stock" data-name="edit_stock">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Support By</label>
                                <input type="text" class="form-control" id="" placeholder="Support By" data-name="edit_support_by" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-style">
                            <div class="card-foto">
                                <img src="{{asset('assets/images/products/sample.png')}}" alt="user avatar" id="img_edit">
                            </div>
                            <div class="input-type-file">
                                <input type="file" id="edit_image" name="edit_image" accept="image/*" />
                                <label for="edit_image">Choose File</label>
                            </div>
                            <input type="hidden" id="edit_name_image" data-name="edit_foto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="save_edit">Save</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Edit --}}

{{-- Modal Support By Add --}}
<div class="modal fade" id="add_support_by" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Support By</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card-style" id="frm_scents">
                            <div class="input-group mb-3" id="p_scents">
                                <input type="text" class="form-control" data-name="option_support[]">
                                <span class="input-group-text btn btn-info" id="basic-addon2" data-name="add_option_add"><i class="bi bi-plus-circle-fill"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="add_option">Save</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Support By Add --}}

{{-- Modal Support By Edit --}}
<div class="modal fade" id="modal_edit_support_by" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Support By</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card-style" id="frm_scents_edit">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info" data-name="add_edit_option"><i class="bi bi-plus-circle-fill"></i>Add</button>
                <button type="button" class="btn btn-primary" data-name="save_edit_option">Save</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Support By Edit --}}

{{-- Modal Add Stock --}}
<div class="modal fade" id="modal_add_stock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Stock Sparepart</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card-style">
                            <div class="mb-3">
                                <label for="" class="form-label">Sparepart</label>
                                <select data-name="stock_id_sparepart" class="form-select select-2-stock">
                                    <option value="">-- Select Sparepart --</option>
                                    @foreach($arr as $key => $value)
                                        <option value="{{$value->id}}">({{$value->kode_part}}) - {{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="" placeholder="Stock" data-name="stock_add">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-name="save_add_stock">Save</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal Add Stock --}}

{{-- JS Add Data --}}
<script>
    var scntDivadd     = $("#frm_scents");
    var iadd           = $("#p_scents").length + 1;
    var forminputadd   = '<div class="input-group mb-3" id="remove_option"><input type="text" class="form-control" data-name="option_support[]"><span class="input-group-text btn btn-danger" id="basic-addon2" onclick="removeCont(this);"><i class="bi bi-dash-circle-fill"></i></span></div>';

    $(function() {
        $("[data-name='add_option_add']").click(function() {
            $(forminputadd).appendTo(scntDivadd);
            iadd++;
            return false;
        });
    });

    function removeCont(_this) {
        // console.log(_this)
        if (iadd > 1) {
            $(_this).parent().remove();
            iadd--;
        }
    }
</script>

<script>
    $(document).on("click", "[data-name='add']", function (e) {
        $("[data-name='kode_part']").val('');
        $("[data-name='name']").val('');
        $("[data-name='price']").val('');
        $("[data-name='stock']").val('');
        $("[data-name='support_by']").val('');
        $("[data-name='foto']").val('');
        $("#modal_add").modal('show');
    });

    $(document).on("click", "[data-name='support_by']", function (e) {
        $("#add_support_by").modal('show');
    });

    $(document).on("click", "[data-name='add_option']", function (e) {
        var option_support      = $("[data-name='option_support[]']").map(function(){return '"'+$(this).val()+'"';}).get();
        // console.log(option_support);
        $("[data-name='support_by']").val(option_support);
        $("#add_support_by").modal('hide');
    });
    

    $(document).on("click", "[data-name='save_add']", function (e) {
        var kode_part   = $("[data-name='kode_part']").val();
        var name        = $("[data-name='name']").val();
        var id_category = '5';
        var price       = $("[data-name='price']").val();
        var stock       = $("[data-name='stock']").val();
        var support_by  = '['+$("[data-name='support_by']").val()+']';
        var image       = $("[data-name='foto']").val();
        var is_active   = 1;
        var update_by   = 1;
        var table       = "mst_sparepart";
        if(image === ''){
            var image    = 'sample.png';
        }else{
            var image    = $("[data-name='foto']").val();
        }

        var data = {
                kode_part:kode_part,
                name:name,
                id_category:id_category,
                price:price,
                stock:stock,
                support_by:support_by,
                image:image,
                is_active:is_active,
                update_by:update_by
            };

        if (kode_part === '' || name === '' || id_category === '' || price === '' || stock === '' || support_by === '' || image === '') {
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
                url: "{{ route('actionadd') }}",
                data: {table: table, data: data},
                cache: false,
                success: function(data) {
                    // console.log(data);
                    Swal.fire({
                        position:'center',
                        title: 'Success!',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((data) => {
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
        }

    });

    $("#add_image").on("change", function(e){
        var ext = $("#add_image").val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile    = URL.createObjectURL(e.target.files[0]);
            $('#img_add').attr('src', uploadedFile);
            var photo           = e.target.files[0];
            var formData        = new FormData();
            formData.append('add_image', photo);
            $.ajax({
                url: "{{route('upload_profile')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    // console.log(res);
                    $('#add_name_foto').val(res);
                }
            })

        }
    });
</script>
{{-- End JS Add Data --}}

{{-- JS Edit Data --}}
<script>
    $(document).on("click", "[data-name='edit']", function (e) {
        var id      = $(this).attr("data-item");
        var table   = 'mst_sparepart';
        var field   = 'id';

        $.ajax({
            type: "POST",
            url: "{{ route('actionshowdata') }}",
            data: {id:id,table:table,field:field},
            cache: false,
            success: function(data) {
                // console.log(data['data']);
                $("[data-name='edit_id']").val(data['data'].id);
                $("[data-name='edit_kode_part']").val(data['data'].kode_part);
                $("[data-name='edit_name']").val(data['data'].name);
                $("[data-name='edit_price']").val(data['data'].price);
                $("[data-name='edit_stock']").val(data['data'].stock);
                var spprt       = data['data'].support_by;
                var val_spprt   = spprt.replace(/[\[\]]/g, '');
                $("[data-name='edit_support_by']").val(val_spprt);
                $("[data-name='edit_support_by']").attr('data-item', val_spprt);
                $("[data-name='edit_foto']").val(data['data'].image);
                var show_foto   = "assets/images/products/"+data['data'].image;
                $('#img_edit').attr('src', show_foto);
                $("#modal_edit").modal('show');
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

    $(document).on("click", "[data-name='edit_support_by']", function (e) {
        var list_support    = $(this).attr("data-item");
        var arrlist         = list_support.split(",");
        var html            = '';
        
        for(var i = 0; i < arrlist.length; i++){
            var datavalue = arrlist[i].replace(/"/g, '');
            html += '<div class="input-group mb-3" id=""><input type="text" class="form-control" data-name="edit_option_support[]" value="'+datavalue+'"><span class="input-group-text btn btn-danger" id="basic-addon2" onclick="removeContedit(this);"><i class="bi bi-dash-circle-fill"></i></span></div>';
        }
        $("#frm_scents_edit").html(html);
        $("#modal_edit_support_by").modal('show');
    });

    $(document).on("click", "[data-name='save_edit_option']", function (e) {
        var option_support      = $("[data-name='edit_option_support[]']").map(function(){return '"'+$(this).val()+'"';}).get();
        $("[data-name='edit_support_by']").val(option_support);
        $("#modal_edit_support_by").modal('hide');
    }); 

    var scntDiv     = $("#frm_scents_edit");
    var i           = $("#edit_remove_option").length + 1;
    var forminput   = '<div class="input-group mb-3" id="edit_remove_option"><input type="text" class="form-control" data-name="edit_option_support[]"><span class="input-group-text btn btn-danger" id="basic-addon2" onclick="removeContedit(this);"><i class="bi bi-dash-circle-fill"></i></span></div>';

    $(function() {
        $("[data-name='add_edit_option']").click(function() {
            $(forminput).appendTo(scntDiv);
            i++;
            return false;
        });
    });

    function removeContedit(_this) {
        // console.log(_this)
        if (i > 1) {
            $(_this).parent().remove();
            i--;
        }
    }

    $(document).on("click", "[data-name='save_edit']", function (e) {
        var kode_part   = $("[data-name='edit_kode_part']").val();
        var name        = $("[data-name='edit_name']").val();
        var id_category = '5';
        var price       = $("[data-name='edit_price']").val();
        var stock       = $("[data-name='edit_stock']").val();
        var support_by  = '['+$("[data-name='edit_support_by']").val()+']';
        var image       = $("[data-name='edit_foto']").val();
        if(image === ''){
            var image    = 'default.jpg';
        }else{
            var image    = $("[data-name='edit_foto']").val();
        }

        var table       = "mst_sparepart";
        var whr         = "id";
        var id          = $("[data-name='edit_id']").val();
        var dats        = {
            kode_part:kode_part,
            name:name,
            id_category:id_category,
            price:price,
            stock:stock,
            support_by:support_by,
            image:image,
        };

        if (kode_part === '' || name === '' || id_category === '' || price === '' || stock === '' || support_by === '' || image === '') {
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
                url: "{{ route('actionedit') }}",
                data: {id:id,whr:whr,table:table,dats:dats},
                cache: false,
                success: function(data) {
                    // console.log(data);
                    Swal.fire({
                        position:'center',
                        title: 'Success!',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((data) => {
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
        }
    });

    $("#edit_image").on("change", function(e){
        var ext = $("#edit_image").val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile    = URL.createObjectURL(e.target.files[0]);
            $('#img_edit').attr('src', uploadedFile);
            var photo           = e.target.files[0];
            var formData        = new FormData();
            formData.append('add_image', photo);
            $.ajax({
                url: "{{route('upload_profile')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    console.log(res);
                    $('#edit_name_image').val(res);
                }
            })

        }
    });
</script>
{{-- End JS Edit Data --}}

{{-- JS Delete Data --}}
<script>
    $(document).on("click", "[data-name='delete']", function (e) {
        var id      = $(this).attr("data-item");
        var table   = 'mst_sparepart';
        var whr     = 'id';

        Swal.fire({
            title: 'Anda yakin?',
            text: 'Aksi ini tidak dapat diulang!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('actiondelete') }}",
                    data: {id:id,whr:whr,table:table},
                    cache: false,
                    success: function(data) {
                        Swal.fire({
                            position:'center',
                            title: 'Success!',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        }).then((data) => {
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
            }
        })
    });
</script>
{{-- End JS Delete Data --}}

{{-- JS Add Stock --}}
<script>
    $(document).on("click", "[data-name='add_stock']", function (e) {
        $("[data-name='stock_add']").val('');
        $("#modal_add_stock").modal('show');
    });

    $("[data-name='stock_id_sparepart']").change(function() {
        var id      = $(this).val();
        var table   = 'mst_sparepart';
        var field   = 'id';

        $.ajax({
            type: "POST",
            url: "{{ route('actionshowdata') }}",
            data: {id:id,table:table,field:field},
            cache: false,
            success: function(data) {
                // console.log(data['data']);
                $("[data-name='stock_add']").val(data['data'].stock);
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

    $(document).on("click", "[data-name='save_add_stock']", function (e) {
        var stock       = $("[data-name='stock_add']").val();
        var table       = "mst_sparepart";
        var whr         = "id";
        var id          = $("[data-name='stock_id_sparepart']").val();
        var dats        = {
            stock:stock
        };

        if (id === '' || stock === '') {
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
                url: "{{ route('actionedit') }}",
                data: {id:id,whr:whr,table:table,dats:dats},
                cache: false,
                success: function(data) {
                    // console.log(data);
                    Swal.fire({
                        position:'center',
                        title: 'Success!',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((data) => {
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
        }
    });
</script>
{{-- End JS Add Stock --}}

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

    $(".select-2-stock").select2({
        allowClear: false,
        width: '100%',
        dropdownParent: $("#modal_add_stock")
    });
</script>
{{-- End Select2 --}}

{{-- Datatable --}}
<script>
    $('#dataTable').DataTable();
</script>
{{-- End Datatable --}}

@stop