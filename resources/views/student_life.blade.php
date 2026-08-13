@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

```
<!-- Content Header -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Student Life</h1>
            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        Student Life
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
                            Student Life List
                        </h3>

                        <button type="button"
                                class="btn btn-primary btn-sm"
                                data-toggle="modal"
                                data-target="#addStudentLifeModal">

                            <i class="fas fa-plus"></i>
                            Add Student Life

                        </button>

                    </div>


                    <!-- Success Message -->
                    @if(session('success'))

                        <div class="alert alert-success alert-dismissible fade show m-3">

                            {{ session('success') }}

                            <button type="button"
                                    class="close"
                                    data-dismiss="alert">

                                <span>&times;</span>

                            </button>

                        </div>

                    @endif


                    <!-- Error Message -->
                    @if(session('error'))

                        <div class="alert alert-danger alert-dismissible fade show m-3">

                            {{ session('error') }}

                            <button type="button"
                                    class="close"
                                    data-dismiss="alert">

                                <span>&times;</span>

                            </button>

                        </div>

                    @endif


                    <!-- ================= ADD MODAL ================= -->

                    <div class="modal fade"
                         id="addStudentLifeModal"
                         tabindex="-1"
                         role="dialog"
                         aria-hidden="true">

                        <div class="modal-dialog">

                            <form action="{{ route('student-life.store') }}"
                                  method="POST"
                                  enctype="multipart/form-data">

                                @csrf

                                <div class="modal-content">

                                    <div class="modal-header">

                                        <h5 class="modal-title">
                                            Add Student Life
                                        </h5>

                                        <button type="button"
                                                class="close"
                                                data-dismiss="modal">

                                            <span>&times;</span>

                                        </button>

                                    </div>


                                    <div class="modal-body">

                                        <!-- Type -->
                                        <div class="form-group">

                                            <label>
                                                Type
                                            </label>

                                            <select name="type"
                                                    class="form-control"
                                                    required>

                                                <option value="">
                                                    Select Type
                                                </option>

                                                <option value="1">
                                                    Facilities
                                                </option>

                                                <option value="2">
                                                    Club Activities
                                                </option>

                                                <option value="3">
                                                    Sports
                                                </option>

                                                <option value="4">
                                                    NSS
                                                </option>

                                            </select>

                                        </div>


                                        <!-- Title -->
                                        <div class="form-group">

                                            <label>
                                                Title
                                            </label>

                                            <input type="text"
                                                   name="title"
                                                   class="form-control"
                                                   required>

                                        </div>


                                        <!-- Image -->
                                        <div class="form-group">

                                            <label>
                                                Image
                                            </label>

                                            <input type="file"
                                                   name="image"
                                                   class="form-control-file"
                                                   accept="image/*"
                                                   required>

                                            <small class="text-muted">
                                                JPG, JPEG, PNG or WEBP. Maximum 2MB.
                                            </small>

                                        </div>


                                        <!-- Description -->
                                        <div class="form-group">

                                            <label>
                                                Description
                                            </label>

                                            <textarea name="description"
                                                      class="form-control"
                                                      rows="4"
                                                      required></textarea>

                                        </div>

                                    </div>


                                    <div class="modal-footer">

                                        <button type="button"
                                                class="btn btn-secondary"
                                                data-dismiss="modal">

                                            Close

                                        </button>

                                        <button type="submit"
                                                class="btn btn-primary">

                                            <i class="fas fa-save"></i>
                                            Save

                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>


                    <!-- ================= LIST ================= -->

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover">

                                <thead>

                                    <tr>

                                        <th style="width: 50px;">
                                            #
                                        </th>

                                        <th>
                                            Type
                                        </th>

                                        <th>
                                            Title
                                        </th>

                                        <th>
                                            Image
                                        </th>

                                        <th>
                                            Description
                                        </th>

                                        <th style="width: 180px;">
                                            Action
                                        </th>

                                    </tr>

                                </thead>


                                <tbody>

                                    @forelse($studentLives as $studentLife)

                                        <tr>

                                            <!-- ID -->
                                            <td>
                                                {{ $studentLife->id }}
                                            </td>


                                            <!-- TYPE -->
                                            <td>

                                                @if($studentLife->type == 1)

                                                    Facilities

                                                @elseif($studentLife->type == 2)

                                                    Club Activities

                                                @elseif($studentLife->type == 3)

                                                    Sports

                                                @elseif($studentLife->type == 4)

                                                    NSS

                                                @endif

                                            </td>


                                            <!-- TITLE -->
                                            <td>
                                                {{ $studentLife->title }}
                                            </td>


                                            <!-- IMAGE -->
                                            <td>

                                                @if($studentLife->image)

                                                    <img src="{{ asset('storage/' . $studentLife->image) }}"
                                                         alt="{{ $studentLife->title }}"
                                                         style="width:100px;
                                                                height:70px;
                                                                object-fit:cover;
                                                                border-radius:5px;
                                                                border:1px solid #ddd;">

                                                @else

                                                    <span class="text-muted">
                                                        No Image
                                                    </span>

                                                @endif

                                            </td>


                                            <!-- DESCRIPTION -->
                                            <td>
                                                {{ $studentLife->description }}
                                            </td>


                                            <!-- ACTION -->
                                            <td>

                                                <!-- EDIT BUTTON -->

                                                <button type="button"
                                                        class="btn btn-sm btn-warning"
                                                        data-toggle="modal"
                                                        data-target="#editStudentLifeModal{{ $studentLife->id }}">

                                                    <i class="fas fa-edit"></i>
                                                    Edit

                                                </button>


                                                <!-- DELETE BUTTON -->

                                                <form action="{{ route('student-life.destroy', $studentLife->id) }}"
                                                      method="POST"
                                                      style="display:inline-block;">

                                                    @csrf

                                                    @method('DELETE')

                                                    <button type="submit"
                                                            class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this record?')">

                                                        <i class="fas fa-trash"></i>
                                                        Delete

                                                    </button>

                                                </form>

                                            </td>

                                        </tr>

                                    @empty

                                        <tr>

                                            <td colspan="6"
                                                class="text-center">

                                                No Student Life records found.

                                            </td>

                                        </tr>

                                    @endforelse

                                </tbody>

                            </table>

                        </div>

                    </div>


                    <!-- ================= EDIT MODALS ================= -->

                    @foreach($studentLives as $studentLife)

                        <div class="modal fade"
                             id="editStudentLifeModal{{ $studentLife->id }}"
                             tabindex="-1"
                             role="dialog"
                             aria-hidden="true">

                            <div class="modal-dialog">

                                <form action="{{ route('student-life.update', $studentLife->id) }}"
                                      method="POST"
                                      enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')

                                    <div class="modal-content">


                                        <!-- HEADER -->

                                        <div class="modal-header">

                                            <h5 class="modal-title">
                                                Edit Student Life
                                            </h5>

                                            <button type="button"
                                                    class="close"
                                                    data-dismiss="modal">

                                                <span>&times;</span>

                                            </button>

                                        </div>


                                        <!-- BODY -->

                                        <div class="modal-body">


                                            <!-- TYPE -->

                                            <div class="form-group">

                                                <label>
                                                    Type
                                                </label>

                                                <select name="type"
                                                        class="form-control"
                                                        required>

                                                    <option value="1"
                                                        {{ $studentLife->type == 1 ? 'selected' : '' }}>
                                                        Facilities
                                                    </option>

                                                    <option value="2"
                                                        {{ $studentLife->type == 2 ? 'selected' : '' }}>
                                                        Club Activities
                                                    </option>

                                                    <option value="3"
                                                        {{ $studentLife->type == 3 ? 'selected' : '' }}>
                                                        Sports
                                                    </option>

                                                    <option value="4"
                                                        {{ $studentLife->type == 4 ? 'selected' : '' }}>
                                                        NSS
                                                    </option>

                                                </select>

                                            </div>


                                            <!-- TITLE -->

                                            <div class="form-group">

                                                <label>
                                                    Title
                                                </label>

                                                <input type="text"
                                                       name="title"
                                                       class="form-control"
                                                       value="{{ $studentLife->title }}"
                                                       required>

                                            </div>


                                            <!-- CURRENT IMAGE -->

                                            <div class="form-group">

                                                <label>
                                                    Current Image
                                                </label>

                                                <br>

                                                @if($studentLife->image)

                                                    <img src="{{ asset('storage/' . $studentLife->image) }}"
                                                         alt="{{ $studentLife->title }}"
                                                         style="width:120px;
                                                                height:80px;
                                                                object-fit:cover;
                                                                border-radius:5px;
                                                                border:1px solid #ddd;">

                                                @else

                                                    <p class="text-muted mb-0">
                                                        No Image
                                                    </p>

                                                @endif

                                            </div>


                                            <!-- CHANGE IMAGE -->

                                            <div class="form-group">

                                                <label>
                                                    Change Image
                                                </label>

                                                <input type="file"
                                                       name="image"
                                                       class="form-control-file"
                                                       accept="image/*">

                                                <small class="text-muted">
                                                    Leave empty to keep the current image.
                                                </small>

                                            </div>


                                            <!-- DESCRIPTION -->

                                            <div class="form-group">

                                                <label>
                                                    Description
                                                </label>

                                                <textarea name="description"
                                                          class="form-control"
                                                          rows="4"
                                                          required>{{ $studentLife->description }}</textarea>

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

                                                <i class="fas fa-save"></i>
                                                Update

                                            </button>

                                        </div>


                                    </div>

                                </form>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>


</div>

@endsection
