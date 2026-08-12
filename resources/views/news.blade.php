@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>News & Events</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            News & Events
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
                                News & Events List
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


                        <!-- Table -->
                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered">

                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type</th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th width="120">Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        @forelse($news as $key)

                                            <tr>

                                                <!-- ID -->
                                                <td>
                                                    {{ $key->id }}
                                                </td>


                                                <!-- Type -->
                                                <td>

                                                    @if($key->type == 'news')

                                                        <span class="badge badge-primary">
                                                            News
                                                        </span>

                                                    @elseif($key->type == 'events')

                                                        <span class="badge badge-success">
                                                            Events
                                                        </span>

                                                    @else

                                                        {{ $key->type }}

                                                    @endif

                                                </td>


                                                <!-- Photo -->
                                                <td>

                                                    @if(!empty($key->photo))

                                                        <a href="{{ asset($key->photo) }}"
                                                           target="_blank">

                                                            <img
                                                                src="{{ asset($key->photo) }}"
                                                                width="80"
                                                                height="80"
                                                                alt="News Photo"
                                                                style="
                                                                    object-fit: cover;
                                                                    border-radius: 5px;
                                                                    cursor: pointer;
                                                                ">

                                                        </a>

                                                    @else

                                                        No Image

                                                    @endif

                                                </td>


                                                <!-- Title -->
                                                <td>
                                                    {{ $key->title }}
                                                </td>


                                                <!-- Description -->
                                                <td>
                                                    {{ $key->description }}
                                                </td>


                                                <!-- Date -->
                                                <td>
                                                    {{ $key->date }}
                                                </td>


                                                <!-- Edit Button -->
                                                <td>

                                                    <button
                                                        type="button"
                                                        class="btn btn-primary btn-sm editnews"

                                                        data-id="{{ $key->id }}"

                                                        data-type="{{ $key->type }}"

                                                        data-title="{{ $key->title }}"

                                                        data-description="{{ $key->description }}"

                                                        data-photo="{{ $key->photo }}"

                                                        data-date="{{ $key->date }}"

                                                        data-toggle="modal"

                                                        data-target="#editNewsModal">

                                                        Edit

                                                    </button>

                                                </td>

                                            </tr>


                                        @empty

                                            <tr>
                                                <td colspan="7"
                                                    class="text-center">
                                                    No Records Found
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
<!-- ADD NEW RECORD MODAL -->
<!-- ===================================================== -->

<div class="modal fade"
     id="newRecordModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">


            <form action="{{ route('createnews') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- Header -->
                <div class="modal-header">

                    <h5 class="modal-title">
                        Add News / Event
                    </h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">
                        <span>&times;</span>
                    </button>

                </div>


                <!-- Body -->
                <div class="modal-body">


                    <!-- Validation Error Box -->
                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <strong>
                                Please correct the following errors:
                            </strong>

                            <ul class="mb-0 mt-2">

                                @foreach ($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    @endif



                    <!-- TYPE -->
                    <div class="form-group">

                        <label>Type</label>

                        <select
                            name="type"
                            class="form-control @error('type') is-invalid @enderror"
                            required>

                            <option value="">
                                Select Type
                            </option>

                            <option value="news"
                                {{ old('type') == 'news' ? 'selected' : '' }}>
                                News
                            </option>

                            <option value="events"
                                {{ old('type') == 'events' ? 'selected' : '' }}>
                                Events
                            </option>

                        </select>


                        @error('type')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- PHOTO -->
                    <div class="form-group">

                        <label>Photo</label>

                        <input
                            type="file"
                            name="photo"
                            class="form-control @error('photo') is-invalid @enderror"
                            accept=".jpg,.jpeg,.png,.gif"
                            required>


                        @error('photo')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- TITLE -->
                    <div class="form-group">

                        <label>Title</label>

                        <input
                            type="text"
                            name="title"
                            value="{{ old('title') }}"
                            class="form-control @error('title') is-invalid @enderror"
                            required>


                        @error('title')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- DESCRIPTION -->
                    <div class="form-group">

                        <label>Description</label>

                        <textarea
                            name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            rows="5"
                            required>{{ old('description') }}</textarea>


                        @error('description')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- DATE -->
                    <div class="form-group">

                        <label>Date</label>

                        <input
                            type="date"
                            name="date"
                            value="{{ old('date') }}"
                            min="1000-01-01"
                            max="9999-12-31"
                            class="form-control @error('date') is-invalid @enderror"
                            required>


                        @error('date')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                </div>


                <!-- Footer -->
                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">
                        Close
                    </button>

                    <button
                        type="submit"
                        class="btn btn-success">
                        Save Record
                    </button>

                </div>


            </form>

        </div>

    </div>

</div>



<!-- ===================================================== -->
<!-- EDIT NEWS MODAL -->
<!-- ===================================================== -->

<div class="modal fade"
     id="editNewsModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">


            <form action="{{ route('updatenews') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- IMPORTANT: SAVED ID -->
                <input
                    type="hidden"
                    name="id"
                    id="edit_id">


                <!-- Header -->
                <div class="modal-header">

                    <h5 class="modal-title">
                        Edit News / Event
                    </h5>

                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>


                <!-- Body -->
                <div class="modal-body">


                    <!-- ============================== -->
                    <!-- TYPE -->
                    <!-- Saved type will appear here -->
                    <!-- ============================== -->

                    <div class="form-group">

                        <label>Type</label>

                        <select
                            name="type"
                            id="edit_type"
                            class="form-control"
                            required>

                            <option value="">
                                Select Type
                            </option>

                            <option value="news">
                                News
                            </option>

                            <option value="events">
                                Events
                            </option>

                        </select>

                    </div>



                    <!-- ============================== -->
                    <!-- CURRENT PHOTO -->
                    <!-- ============================== -->

                    <div class="form-group">

                        <label>Current Photo</label>

                        <br>

                        <a href="#"
                           id="previewPhotoLink"
                           target="_blank">

                            <img
                                id="previewPhoto"
                                src=""
                                width="100"
                                height="100"
                                alt="Current Photo"
                                style="
                                    object-fit: cover;
                                    border-radius: 5px;
                                ">

                        </a>

                    </div>



                    <!-- ============================== -->
                    <!-- REPLACE PHOTO -->
                    <!-- ============================== -->

                    <div class="form-group">

                        <label>Replace Photo</label>

                        <input
                            type="file"
                            name="photo"
                            class="form-control"
                            accept=".jpg,.jpeg,.png,.gif">

                        <small class="text-muted">
                            Leave empty to keep the current photo.
                        </small>

                    </div>



                    <!-- ============================== -->
                    <!-- TITLE -->
                    <!-- ============================== -->

                    <div class="form-group">

                        <label>Title</label>

                        <input
                            type="text"
                            name="title"
                            id="edit_title"
                            class="form-control"
                            required>

                    </div>



                    <!-- ============================== -->
                    <!-- DESCRIPTION -->
                    <!-- ============================== -->

                    <div class="form-group">

                        <label>Description</label>

                        <textarea
                            name="description"
                            id="edit_description"
                            class="form-control"
                            rows="5"
                            required></textarea>

                    </div>



                    <!-- ============================== -->
                    <!-- DATE -->
                    <!-- Saved date will appear here -->
                    <!-- ============================== -->

                    <div class="form-group">

                        <label>Date</label>

                        <input
                            type="date"
                            name="date"
                            id="edit_date"
                            min="1000-01-01"
                            max="9999-12-31"
                            class="form-control"
                            required>

                    </div>


                </div>


                <!-- Footer -->
                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">

                        Close

                    </button>


                    <button
                        type="submit"
                        class="btn btn-success">

                        Update

                    </button>

                </div>


            </form>

        </div>

    </div>

</div>


@endsection