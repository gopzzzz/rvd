@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Uploads</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Uploads
                        </li>

                    </ol>
                </div>

            </div>

        </div>
    </section>


    <!-- Main Content -->
    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">


                        <!-- Card Header -->
                        <div class="card-header d-flex justify-content-between align-items-center">

                            <h3 class="card-title">
                                Uploads List
                            </h3>

                            <button type="button"
                                    class="btn btn-primary btn-sm"
                                    data-toggle="modal"
                                    data-target="#newRecordModal">

                                <i class="fas fa-plus"></i>
                                New Record

                            </button>

                        </div>


                        <!-- Success Message -->
                        @if(session('success'))

                            <div class="alert alert-success m-3">
                                {{ session('success') }}
                            </div>

                        @endif


                        <!-- Validation Errors -->
                        @if($errors->any())

                            <div class="alert alert-danger m-3">

                                <ul class="mb-0">

                                    @foreach($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif


                        <!-- Table -->
                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered">

                                    <thead>

                                        <tr>

                                            <th style="width:60px">
                                                #
                                            </th>

                                            <th>
                                                Photo
                                            </th>

                                            <th>
                                                Status
                                            </th>

                                            <th style="width:100px">
                                                Action
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        @forelse($uploads as $key)

                                            <tr>

                                                <!-- ID -->
                                                <td>
                                                    {{ $key->id }}
                                                </td>


                                                <!-- Photo -->
                                                <td>

                                                    @if(!empty($key->photo))

                                                        <a href="{{ asset($key->photo) }}"
                                                           target="_blank">

                                                            <img src="{{ asset($key->photo) }}"
                                                                 width="100"
                                                                 height="90"
                                                                 alt="Upload Photo"
                                                                 style="object-fit:cover; border-radius:5px; cursor:pointer;">

                                                        </a>

                                                    @else

                                                        No Photo

                                                    @endif

                                                </td>


                                                <!-- Status -->
                                                <td>
                                                    {{ $key->status }}
                                                </td>


                                                <!-- Action -->
                                                <td>

                                                    <button type="button"
                                                            class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#editUploadModal"
                                                            data-id="{{ $key->id }}"
                                                            data-status="{{ $key->status }}"
                                                            data-photo="{{ $key->photo }}">

                                                        Edit

                                                    </button>

                                                </td>

                                            </tr>

                                        @empty

                                            <tr>

                                                <td colspan="4"
                                                    class="text-center">

                                                    No records found.

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



<!-- ================================================= -->
<!-- NEW RECORD MODAL -->
<!-- ================================================= -->

<div class="modal fade"
     id="newRecordModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog"
         role="document">

        <div class="modal-content">


            <form action="{{ route('createuploads') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- Header -->
                <div class="modal-header">

                    <h5 class="modal-title">
                        Add New Upload
                    </h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>


                <!-- Body -->
                <div class="modal-body">


                    <!-- Photo -->
                    <div class="form-group">

                        <label>
                            Photo
                            <span class="text-danger">*</span>
                        </label>

                        <input type="file"
                               name="photo"
                               class="form-control"
                               accept=".jpg,.jpeg,.png,.gif"
                               required>

                    </div>


                    <!-- Status -->
                    <div class="form-group">

                        <label>
                            Status
                            <span class="text-danger">*</span>
                        </label>

                        <select name="status"
                                class="form-control"
                                required>

                            <option value="">
                                Select Status
                            </option>

                            <option value="Active">
                                Active
                            </option>

                            <option value="Inactive">
                                Inactive
                            </option>

                        </select>

                    </div>


                </div>


                <!-- Footer -->
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



<!-- ================================================= -->
<!-- EDIT UPLOAD MODAL -->
<!-- ================================================= -->

<div class="modal fade"
     id="editUploadModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog"
         role="document">

        <div class="modal-content">


            <form action="{{ route('updateuploads') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- Header -->
                <div class="modal-header">

                    <h5 class="modal-title">
                        Edit Upload
                    </h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>


                <!-- Body -->
                <div class="modal-body">


                    <!-- IMPORTANT ID -->
                    <input type="hidden"
                           name="id"
                           id="edit_id">


                    <!-- Current Photo -->
                    <div class="form-group">

                        <label>
                            Current Photo
                        </label>

                        <br>

                        <a href="#"
                           id="current_photo_link"
                           target="_blank">

                            <img id="edit_photo_preview"
                                 src=""
                                 width="120"
                                 height="100"
                                 style="object-fit:cover; border-radius:5px;">

                        </a>

                    </div>


                    <!-- Change Photo -->
                    <div class="form-group">

                        <label>
                            Change Photo
                        </label>

                        <input type="file"
                               name="photo"
                               class="form-control"
                               accept=".jpg,.jpeg,.png,.gif">

                        <small class="text-muted">
                            Leave empty if you do not want to change the photo.
                        </small>

                    </div>


                    <!-- Status -->
                    <div class="form-group">

                        <label>
                            Status
                            <span class="text-danger">*</span>
                        </label>

                        <select name="status"
                                id="edit_status"
                                class="form-control"
                                required>

                            <option value="Active">
                                Active
                            </option>

                            <option value="Inactive">
                                Inactive
                            </option>

                        </select>

                    </div>


                </div>


                <!-- Footer -->
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