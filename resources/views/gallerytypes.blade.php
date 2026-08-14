@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">


    <!-- PAGE HEADER -->

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Gallery Type</h1>

                </div>


                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">

                            <a href="#">
                                Home
                            </a>

                        </li>


                        <li class="breadcrumb-item active">

                            Gallery Type

                        </li>

                    </ol>

                </div>

            </div>

        </div>

    </section>



    <!-- MAIN CONTENT -->

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">


                        <!-- HEADER -->

                        <div class="card-header d-flex justify-content-between align-items-center">


                            <h3 class="card-title">

                                Gallery Type List

                            </h3>


                            <button type="button"
                                    class="btn btn-primary btn-sm"
                                    data-toggle="modal"
                                    data-target="#newGalleryTypeModal">


                                <i class="fas fa-plus"></i>

                                New Record


                            </button>


                        </div>



                        <!-- SUCCESS MESSAGE -->

                        @if(session('success'))

                            <div class="alert alert-success m-3">

                                {{ session('success') }}

                            </div>

                        @endif



                        <!-- TABLE -->

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped">


                                    <thead>

                                        <tr>

                                            <th style="width:80px;">
                                                #
                                            </th>

                                            <th>
                                                Gallery Type
                                            </th>

                                            <th style="width:120px;">
                                                Action
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody>


                                        @forelse($gallerytypes as $key)


                                            <tr>


                                                <td>

                                                    {{ $loop->iteration }}

                                                </td>


                                                <td>

                                                    {{ $key->type_name }}

                                                </td>


                                                <td>


                                                    <button type="button"
                                                            class="btn btn-sm btn-primary editgallerytype"

                                                            data-id="{{ $key->id }}"

                                                            data-name="{{ $key->type_name }}"

                                                            data-toggle="modal"

                                                            data-target="#editGalleryTypeModal">


                                                        <i class="fas fa-edit"></i>

                                                        Edit


                                                    </button>


                                                </td>


                                            </tr>


                                        @empty


                                            <tr>

                                                <td colspan="3"
                                                    class="text-center">

                                                    No Gallery Types Found

                                                </td>

                                            </tr>


                                        @endforelse


                                    </tbody>


                                </table>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>

</div>



<!-- ===================================================== -->
<!-- ADD GALLERY TYPE MODAL -->
<!-- ===================================================== -->

<div class="modal fade"
     id="newGalleryTypeModal"
     tabindex="-1"
     role="dialog">


    <div class="modal-dialog">


        <div class="modal-content">


            <form action="{{ route('creategallerytype') }}"
                  method="POST">


                @csrf


                <input type="hidden"
                       name="_form"
                       value="create">


                <!-- HEADER -->

                <div class="modal-header">


                    <h5 class="modal-title">

                        Add Gallery Type

                    </h5>


                    <button type="button"
                            class="close"
                            data-dismiss="modal">


                        <span>
                            &times;
                        </span>


                    </button>


                </div>



                <!-- BODY -->

                <div class="modal-body">


                    @if($errors->any() && old('_form') == 'create')


                        <div class="alert alert-danger">


                            <strong>

                                Please correct the following errors:

                            </strong>


                            <ul class="mb-0 mt-2">


                                @foreach($errors->all() as $error)


                                    <li>

                                        {{ $error }}

                                    </li>


                                @endforeach


                            </ul>


                        </div>


                    @endif



                    <div class="form-group">


                        <label>

                            Gallery Type

                        </label>


                        <input type="text"
                               name="type_name"
                               value="{{ old('type_name') }}"
                               class="form-control @error('type_name') is-invalid @enderror"
                               required>


                        @error('type_name')


                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>


                        @enderror


                    </div>


                </div>



                <!-- FOOTER -->

                <div class="modal-footer">


                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">

                        Close

                    </button>


                    <button type="submit"
                            class="btn btn-primary">

                        Save Record

                    </button>


                </div>


            </form>


        </div>


    </div>


</div>



<!-- ===================================================== -->
<!-- EDIT GALLERY TYPE MODAL -->
<!-- ===================================================== -->

<div class="modal fade"
     id="editGalleryTypeModal"
     tabindex="-1"
     role="dialog">


    <div class="modal-dialog">


        <div class="modal-content">


            <form action="{{ route('updategallerytype') }}"
                  method="POST">


                @csrf


                <input type="hidden"
                       name="id"
                       id="edit_id">


                <!-- HEADER -->

                <div class="modal-header">


                    <h5 class="modal-title">

                        Edit Gallery Type

                    </h5>


                    <button type="button"
                            class="close"
                            data-dismiss="modal">


                        <span>
                            &times;
                        </span>


                    </button>


                </div>



                <!-- BODY -->

                <div class="modal-body">


                    <div class="form-group">


                        <label>

                            Gallery Type

                        </label>


                        <input type="text"
                               name="type_name"
                               id="edit_type_name"
                               class="form-control"
                               required>


                    </div>


                </div>



                <!-- FOOTER -->

                <div class="modal-footer">


                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">

                        Close

                    </button>


                    <button type="submit"
                            class="btn btn-success">

                        Update

                    </button>


                </div>


            </form>


        </div>


    </div>


</div>

@endsection