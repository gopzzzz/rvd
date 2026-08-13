@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <!-- PAGE HEADER -->
    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Gallery</h1>
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Gallery
                        </li>

                    </ol>

                </div>

            </div>

        </div>

    </section>


    <!-- MAIN CONTENT -->
    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <!-- HEADER -->
                <div class="card-header d-flex justify-content-between align-items-center">

                    <h3 class="card-title">
                        Gallery Photos
                    </h3>


                    <button type="button"
                            class="btn btn-primary btn-sm"
                            data-toggle="modal"
                            data-target="#newRecordModal">

                        <i class="fas fa-plus"></i>
                        New Record

                    </button>

                </div>


                <!-- SUCCESS MESSAGE -->
                @if(session('success'))

                    <div class="alert alert-success alert-dismissible m-3">

                        <button type="button"
                                class="close"
                                data-dismiss="alert">

                            &times;

                        </button>

                        {{ session('success') }}

                    </div>

                @endif


                <!-- ERROR MESSAGE -->
                @if(session('error'))

                    <div class="alert alert-danger alert-dismissible m-3">

                        <button type="button"
                                class="close"
                                data-dismiss="alert">

                            &times;

                        </button>

                        {{ session('error') }}

                    </div>

                @endif



                <!-- ================================================= -->
                <!-- GALLERY GRID -->
                <!-- ================================================= -->

                <div class="card-body">


                    @if($uploads->count() > 0)


                        <div class="row">


                            @foreach($uploads as $key)


                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">


                                    <div class="card gallery-card h-100">


                                        <!-- IMAGE -->

                                        <div class="gallery-image">


                                            @if(!empty($key->photo))


                                                <a href="{{ asset($key->photo) }}"
                                                   target="_blank">


                                                    <img src="{{ asset($key->photo) }}"
                                                         class="gallery-photo"
                                                         alt="Gallery Photo">


                                                </a>


                                            @else


                                                <div class="no-image">

                                                    <i class="fas fa-image"></i>

                                                    <span>
                                                        No Image
                                                    </span>

                                                </div>


                                            @endif


                                            <!-- PHOTO NUMBER -->

                                            <div class="photo-number">

                                                {{ $loop->iteration }}

                                            </div>


                                            <!-- STATUS ON IMAGE -->

                                            <div class="photo-status">


                                                @if(strtolower($key->status) == 'active')


                                                    <span class="badge badge-success">

                                                        Active

                                                    </span>


                                                @elseif(strtolower($key->status) == 'inactive')


                                                    <span class="badge badge-danger">

                                                        Inactive

                                                    </span>


                                                @else


                                                    <span class="badge badge-secondary">

                                                        {{ $key->status }}

                                                    </span>


                                                @endif


                                            </div>


                                        </div>



                                        <!-- CARD BODY -->

                                        <div class="card-body gallery-details">


                                            <div class="d-flex justify-content-between align-items-center">


                                                <div>


                                                    <small class="text-muted">

                                                        Gallery Type

                                                    </small>


                                                    <h5 class="gallery-title mb-0">

                                                        {{ $key->type_name ?? 'Gallery' }}

                                                    </h5>


                                                </div>


                                                <div class="gallery-icon">

                                                    <i class="fas fa-images"></i>

                                                </div>


                                            </div>


                                        </div>



                                        <!-- DELETE -->

                                        <div class="card-footer gallery-footer">


                                            <form action="{{ route('deleteuploads') }}"
                                                  method="POST"
                                                  class="delete-upload-form">


                                                @csrf


                                                <!-- REAL DATABASE ID -->

                                                <input type="hidden"
                                                       name="id"
                                                       value="{{ $key->id }}">


                                                <button type="submit"
                                                        class="btn btn-danger btn-sm btn-block">


                                                    <i class="fas fa-trash-alt mr-1"></i>

                                                    Delete Photo


                                                </button>


                                            </form>


                                        </div>


                                    </div>


                                </div>


                            @endforeach


                        </div>


                    @else


                        <!-- NO PHOTOS -->

                        <div class="empty-gallery">


                            <i class="fas fa-images"></i>


                            <h4>
                                No Gallery Photos
                            </h4>


                            <p>
                                Click New Record to upload photos.
                            </p>


                            <button type="button"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#newRecordModal">


                                <i class="fas fa-plus"></i>

                                Upload Photos


                            </button>


                        </div>


                    @endif


                </div>


            </div>

        </div>

    </section>

</div>



<!-- ====================================================== -->
<!-- ADD NEW PHOTOS MODAL -->
<!-- ====================================================== -->

<div class="modal fade"
     id="newRecordModal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="newRecordModalLabel"
     aria-hidden="true">


    <div class="modal-dialog modal-lg"
         role="document">


        <div class="modal-content">


            <form action="{{ route('createuploads') }}"
                  method="POST"
                  enctype="multipart/form-data">


                @csrf


                <input type="hidden"
                       name="_form"
                       value="create">



                <!-- MODAL HEADER -->

                <div class="modal-header">


                    <h5 class="modal-title"
                        id="newRecordModalLabel">

                        <i class="fas fa-images mr-2"></i>

                        Add Gallery Photos

                    </h5>


                    <button type="button"
                            class="close"
                            data-dismiss="modal">


                        <span>
                            &times;
                        </span>


                    </button>


                </div>



                <!-- MODAL BODY -->

                <div class="modal-body">


                    <!-- VALIDATION ERRORS -->

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



                    <!-- GALLERY TYPE -->

                    <div class="form-group">


                        <label>
                            Gallery Type
                        </label>


                        <select name="type"
                                class="form-control @error('type') is-invalid @enderror"
                                required>


                            <option value="">

                                Select Gallery Type

                            </option>


                            @foreach($types as $type)


                                <option value="{{ $type->id }}"
                                    {{ old('type') == $type->id ? 'selected' : '' }}>


                                    {{ $type->type_name }}


                                </option>


                            @endforeach


                        </select>


                        @error('type')


                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>


                        @enderror


                    </div>



                    <!-- PHOTOS -->

                    <div class="form-group">


                        <label>
                            Select Photos
                        </label>


                        <div class="upload-area">


                            <i class="fas fa-cloud-upload-alt"></i>


                            <p>
                                Choose one or more gallery images
                            </p>


                            <input type="file"
                                   name="photo[]"
                                   id="photos"
                                   class="form-control-file"
                                   accept=".jpg,.jpeg,.png,.gif"
                                   multiple
                                   required>


                        </div>


                        <small class="form-text text-muted">

                            JPG, JPEG, PNG and GIF allowed.
                            Maximum 5 MB per photo.

                        </small>


                        @error('photo')


                            <div class="text-danger mt-2">

                                {{ $message }}

                            </div>


                        @enderror


                        @error('photo.*')


                            <div class="text-danger mt-2">

                                {{ $message }}

                            </div>


                        @enderror


                    </div>



                    <!-- PREVIEW -->

                    <div class="form-group">


                        <label>
                            Preview
                        </label>


                        <div id="imagePreview"
                             class="preview-container">


                            <span class="preview-empty">

                                Selected images will appear here.

                            </span>


                        </div>


                    </div>



                    <!-- STATUS -->

                    <div class="form-group">


                        <label>
                            Status
                        </label>


                        <select name="status"
                                class="form-control @error('status') is-invalid @enderror"
                                required>


                            <option value="">

                                Select Status

                            </option>


                            <option value="active"
                                {{ old('status') == 'active' ? 'selected' : '' }}>

                                Active

                            </option>


                            <option value="inactive"
                                {{ old('status') == 'inactive' ? 'selected' : '' }}>

                                Inactive

                            </option>


                        </select>


                        @error('status')


                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>


                        @enderror


                    </div>


                </div>



                <!-- MODAL FOOTER -->

                <div class="modal-footer">


                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">

                        Close

                    </button>


                    <button type="submit"
                            class="btn btn-primary">


                        <i class="fas fa-upload mr-1"></i>

                        Upload Photos


                    </button>


                </div>


            </form>


        </div>


    </div>


</div>



<!-- ====================================================== -->
<!-- GALLERY CSS -->
<!-- ====================================================== -->

<style>


.gallery-card {

    border-radius: 10px;

    overflow: hidden;

    border: 1px solid rgba(255,255,255,0.08);

    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease;

}


.gallery-card:hover {

    transform: translateY(-5px);

    box-shadow:
        0 10px 25px
        rgba(0,0,0,0.30);

}



.gallery-image {

    width: 100%;

    height: 230px;

    position: relative;

    overflow: hidden;

    background: #252a30;

}



.gallery-photo {

    width: 100%;

    height: 100%;

    object-fit: cover;

    display: block;

    transition: transform 0.35s ease;

}



.gallery-card:hover .gallery-photo {

    transform: scale(1.06);

}



.photo-number {

    position: absolute;

    left: 12px;

    top: 12px;

    min-width: 30px;

    height: 30px;

    padding: 0 8px;

    display: flex;

    justify-content: center;

    align-items: center;

    border-radius: 30px;

    background: rgba(0,0,0,0.65);

    color: white;

    font-weight: 600;

}



.photo-status {

    position: absolute;

    right: 12px;

    top: 12px;

}



.photo-status .badge {

    padding: 7px 10px;

    border-radius: 15px;

}



.gallery-details {

    padding: 15px;

}



.gallery-title {

    font-size: 17px;

    font-weight: 600;

    text-transform: capitalize;

    margin-top: 3px;

}



.gallery-icon {

    width: 38px;

    height: 38px;

    border-radius: 50%;

    display: flex;

    justify-content: center;

    align-items: center;

    background: rgba(0,123,255,0.12);

    color: #3498db;

}



.gallery-footer {

    padding: 12px 15px;

}



.gallery-footer .btn {

    border-radius: 5px;

}



.no-image {

    width: 100%;

    height: 100%;

    display: flex;

    flex-direction: column;

    justify-content: center;

    align-items: center;

    color: #888;

}



.no-image i {

    font-size: 45px;

    margin-bottom: 10px;

}



.empty-gallery {

    padding: 70px 20px;

    text-align: center;

}



.empty-gallery > i {

    display: block;

    font-size: 70px;

    margin-bottom: 20px;

    color: #6c757d;

}



.empty-gallery h4 {

    font-weight: 600;

}



.empty-gallery p {

    color: #999;

    margin-bottom: 20px;

}



/* UPLOAD AREA */

.upload-area {

    border: 2px dashed #6c757d;

    border-radius: 8px;

    padding: 25px;

    text-align: center;

}



.upload-area > i {

    display: block;

    font-size: 40px;

    margin-bottom: 10px;

    color: #3498db;

}



.upload-area p {

    margin-bottom: 15px;

}



/* IMAGE PREVIEW */

.preview-container {

    min-height: 100px;

    display: flex;

    flex-wrap: wrap;

    align-items: center;

    border: 1px dashed #6c757d;

    border-radius: 6px;

    padding: 10px;

}



.preview-empty {

    color: #888;

    padding: 20px;

}



.preview-image {

    width: 110px;

    height: 100px;

    object-fit: cover;

    border-radius: 6px;

    margin-right: 10px;

    margin-bottom: 10px;

    border: 1px solid rgba(255,255,255,0.1);

}



@media(max-width: 768px) {

    .gallery-image {

        height: 260px;

    }

}


</style>


@endsection