@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <!-- PAGE HEADER -->
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Faculties</h1>
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Faculties
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

                <!-- CARD HEADER -->
                <div class="card-header d-flex justify-content-between align-items-center">

                    <h3 class="card-title">
                        Faculties List
                    </h3>

                    <button type="button"
                            class="btn btn-primary btn-sm"
                            data-toggle="modal"
                            data-target="#newFacultyModal">

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


                <!-- ERROR MESSAGE -->
                @if(session('error'))

                    <div class="alert alert-danger m-3">
                        {{ session('error') }}
                    </div>

                @endif


                <!-- TABLE -->
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead>

                                <tr>

                                    <th>ID</th>

                                    <th>Department</th>

                                    <th>Name</th>

                                    <th>Photo</th>

                                    <th>Occupation</th>

                                    <th>Qualification</th>

                                    <th>Experience</th>

                                    <th>Bio</th>

                                    <th>Action</th>

                                </tr>

                            </thead>


                            <tbody>

                                @forelse($faculties as $key)

                                    <tr>

                                        <td>
                                            {{ $key->id }}
                                        </td>


                                        <!-- DEPARTMENT -->
                                        <td>
                                             {{ $key->department_name }}
                                        </td>


                                        <!-- NAME -->
                                        <td>
                                            {{ $key->name }}
                                        </td>


                                        <!-- PHOTO -->
                                        <td>

                                            @if(!empty($key->photo))

                                                <a href="{{ asset($key->photo) }}"
                                                   target="_blank">

                                                    <img src="{{ asset($key->photo) }}"
                                                         width="70"
                                                         height="70"
                                                         alt="Faculty Photo"
                                                         style="
                                                             object-fit:cover;
                                                             border-radius:5px;
                                                         ">

                                                </a>

                                            @else

                                                No Photo

                                            @endif

                                        </td>


                                        <!-- OCCUPATION -->
                                        <td>
                                            {{ $key->occupation }}
                                        </td>


                                        <!-- QUALIFICATION -->
                                        <td>
                                            {{ $key->qualification }}
                                        </td>


                                        <!-- EXPERIENCE -->
                                        <td>
                                            {{ $key->experiance }}
                                        </td>


                                        <!-- BIO -->
                                        <td>
                                            {{ $key->bio }}
                                        </td>


                                        <!-- ACTION -->
                                        <td>

                                            <button type="button"
                                                    class="btn btn-primary btn-sm editfaculty"

                                                    data-id="{{ $key->id }}"

                                                    data-department="{{ $key->department_id }}"

                                                    data-name="{{ $key->name }}"

                                                    data-photo="{{ $key->photo }}"

                                                    data-occupation="{{ $key->occupation }}"

                                                    data-qualification="{{ $key->qualification }}"

                                                    data-experiance="{{ $key->experiance }}"

                                                    data-bio="{{ $key->bio }}"

                                                    data-toggle="modal"

                                                    data-target="#editFacultyModal">

                                                Edit

                                            </button>

                                        </td>

                                    </tr>


                                @empty

                                    <tr>

                                        <td colspan="9"
                                            class="text-center">

                                            No Faculty Records Found

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>



<!-- ====================================================== -->
<!-- ADD FACULTY MODAL -->
<!-- ====================================================== -->

<div class="modal fade"
     id="newFacultyModal"
     tabindex="-1"
     role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">


            <form action="{{ route('createfaculties') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <input type="hidden"
                       name="_form"
                       value="create">


                <!-- MODAL HEADER -->
                <div class="modal-header">

                    <h5 class="modal-title">
                        Add Faculty
                    </h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

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



                    <!-- DEPARTMENT -->
                    <div class="form-group">

                        <label>
                            Department
                        </label>

                        <select name="department_id"
                                class="form-control @error('department_id') is-invalid @enderror"
                                required>

                            <option value="">
                                Select Department
                            </option>


                            @foreach($departments as $department)

                                <option value="{{ $department->id }}"
                                    {{ old('department_id') == $department->id ? 'selected' : '' }}>

                                     {{ $department->name }}

                                </option>

                            @endforeach

                        </select>


                        @error('department_id')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- NAME -->
                    <div class="form-group">

                        <label>
                            Faculty Name
                        </label>

                        <input type="text"
                               name="name"
                               value="{{ old('name') }}"
                               class="form-control @error('name') is-invalid @enderror"
                               required>


                        @error('name')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- PHOTO -->
                    <div class="form-group">

                        <label>
                            Photo
                        </label>

                        <input type="file"
                               name="photo"
                               class="form-control @error('photo') is-invalid @enderror"
                               accept=".jpg,.jpeg,.png,.webp" >


                        @error('photo')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- OCCUPATION -->
                    <div class="form-group">

                        <label>
                            Occupation
                        </label>

                        <input type="text"
                               name="occupation"
                               value="{{ old('occupation') }}"
                               class="form-control @error('occupation') is-invalid @enderror"
                               required>


                        @error('occupation')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- QUALIFICATION -->
                    <div class="form-group">

                        <label>
                            Qualification
                        </label>

                        <input type="text"
                               name="qualification"
                               value="{{ old('qualification') }}"
                               class="form-control @error('qualification') is-invalid @enderror"
                               required>


                        @error('qualification')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- EXPERIENCE -->
                    <div class="form-group">

                        <label>
                            Experience
                        </label>

                        <input type="number"
                               name="experiance"
                               value="{{ old('experiance') }}"
                               class="form-control @error('experiance') is-invalid @enderror"
                               required>


                        @error('experiance')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- BIO -->
                    <div class="form-group">

                        <label>
                            Bio
                        </label>

                        <textarea name="bio"
                                  rows="4"
                                  class="form-control @error('bio') is-invalid @enderror">{{ old('bio') }}</textarea>


                        @error('bio')

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

                        Save Faculty

                    </button>

                </div>


            </form>

        </div>

    </div>

</div>



<!-- ====================================================== -->
<!-- EDIT FACULTY MODAL -->
<!-- ====================================================== -->

<div class="modal fade"
     id="editFacultyModal"
     tabindex="-1"
     role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">


            <form action="{{ route('updatefaculties') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- FACULTY ID -->
                <input type="hidden"
                       name="id"
                       id="edit_id">


                <!-- MODAL HEADER -->
                <div class="modal-header">

                    <h5 class="modal-title">
                        Edit Faculty
                    </h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>


                <!-- MODAL BODY -->
                <div class="modal-body">


                    <!-- DEPARTMENT -->
                    <div class="form-group">

                        <label>
                            Department
                        </label>

                        <select name="department_id"
                                id="edit_department"
                                class="form-control"
                                required>

                            <option value="">
                                Select Department
                            </option>


                            @foreach($departments as $department)

                                <option value="{{ $department->id }}">

                                     {{ $department->name }}

                                </option>

                            @endforeach

                        </select>

                    </div>



                    <!-- NAME -->
                    <div class="form-group">

                        <label>
                            Faculty Name
                        </label>

                        <input type="text"
                               name="name"
                               id="edit_name"
                               class="form-control"
                               required>

                    </div>



                    <!-- CURRENT PHOTO -->
                    <div class="form-group">

                        <label>
                            Current Photo
                        </label>

                        <br>

                        <a href="#"
                           id="previewPhotoLink"
                           target="_blank">

                            <img id="previewPhoto"
                                 src=""
                                 width="100"
                                 height="100"
                                 alt="Current Faculty Photo"
                                 style="
                                     object-fit:cover;
                                     border-radius:5px;
                                 ">

                        </a>

                    </div>



                    <!-- REPLACE PHOTO -->
                    <div class="form-group">

                        <label>
                            Replace Photo
                        </label>

                        <input type="file"
                               name="photo"
                               class="form-control"
                               accept=".jpg,.jpeg,.png,.webp" >

                        <small class="text-muted">
                            Leave empty to keep the current photo.
                        </small>

                    </div>



                    <!-- OCCUPATION -->
                    <div class="form-group">

                        <label>
                            Occupation
                        </label>

                        <input type="text"
                               name="occupation"
                               id="edit_occupation"
                               class="form-control"
                               required>

                    </div>



                    <!-- QUALIFICATION -->
                    <div class="form-group">

                        <label>
                            Qualification
                        </label>

                        <input type="text"
                               name="qualification"
                               id="edit_qualification"
                               class="form-control"
                               required>

                    </div>



                    <!-- EXPERIENCE -->
                    <div class="form-group">

                        <label>
                            Experience
                        </label>

                        <input type="text"
                               name="experiance"
                               id="edit_experiance"
                               class="form-control"
                               required>

                    </div>



                    <!-- BIO -->
                    <div class="form-group">

                        <label>
                            Bio
                        </label>

                        <textarea name="bio"
                                  id="edit_bio"
                                  rows="4"
                                  class="form-control"></textarea>

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
                            class="btn btn-success">

                        Update Faculty

                    </button>

                </div>


            </form>

        </div>

    </div>

</div>


@endsection