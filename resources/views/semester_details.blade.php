@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">


<!-- PAGE HEADER -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Semester-wise Curriculum</h1>
            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item">
                        <a href="{{ route('course.index') }}">
                            Courses
                        </a>
                    </li>

                    <li class="breadcrumb-item active">
                        Semester-wise Curriculum
                    </li>

                </ol>

            </div>

        </div>

    </div>

</section>


<!-- MAIN CONTENT -->
<section class="content">

    <div class="container-fluid">


        <!-- SUCCESS MESSAGE -->

        @if(session('success'))

            <div class="alert alert-success alert-dismissible fade show">

                <button type="button"
                        class="close"
                        data-dismiss="alert">

                    &times;

                </button>

                <i class="fas fa-check-circle"></i>

                {{ session('success') }}

            </div>

        @endif


        <!-- ERROR MESSAGE -->

        @if(session('error'))

            <div class="alert alert-danger alert-dismissible fade show">

                <button type="button"
                        class="close"
                        data-dismiss="alert">

                    &times;

                </button>

                <i class="fas fa-exclamation-circle"></i>

                {{ session('error') }}

            </div>

        @endif


        <!-- VALIDATION ERRORS -->

        @if($errors->any())

            <div class="alert alert-danger">

                <strong>
                    Please fix the following errors:
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


        <!-- COURSE DETAILS -->

        <div class="card card-primary">

            <div class="card-header">

                <h3 class="card-title">

                    <i class="fas fa-book mr-2"></i>

                    Course Details

                </h3>

            </div>


            <div class="card-body">

                <div class="row">


                    <!-- COURSE NAME -->

                    <div class="col-md-4">

                        <div class="course-detail-box">

                            <strong>

                                <i class="fas fa-book-open mr-1"></i>

                                Course Name

                            </strong>

                            <p>
                                {{ $course->coursename }}
                            </p>

                        </div>

                    </div>


                    <!-- FULL NAME -->

                    <div class="col-md-4">

                        <div class="course-detail-box">

                            <strong>

                                <i class="fas fa-graduation-cap mr-1"></i>

                                Course Full Name

                            </strong>

                            <p>
                                {{ $course->overview }}
                            </p>

                        </div>

                    </div>


                    <!-- ELIGIBILITY -->

                    <div class="col-md-4">

                        <div class="course-detail-box">

                            <strong>

                                <i class="fas fa-user-check mr-1"></i>

                                Eligibility

                            </strong>

                            <p>
                                {{ $course->eligibility }}
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </div>


        <!-- SEMESTER LIST -->

        <div class="card">

            <div class="card-header">

                <h3 class="card-title">

                    <i class="fas fa-list mr-2"></i>

                    Semester List

                </h3>


                <button type="button"
                        class="btn btn-primary btn-sm float-right"
                        data-toggle="modal"
                        data-target="#addSemesterModal">

                    <i class="fas fa-plus mr-1"></i>

                    Add Semester

                </button>

            </div>


            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover">

                        <thead>

                            <tr>

                                <th style="width:70px;">
                                    #
                                </th>

                                <th>
                                    Semester
                                </th>

                                <th>
                                    Subjects
                                </th>

                                <th style="width:200px;">
                                    Action
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($semesters as $semester)

                                <tr>

                                    <!-- NUMBER -->

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>


                                    <!-- SEMESTER -->

                                    <td>

                                        <strong>
                                            {{ $semester->semester }}
                                        </strong>

                                    </td>


                                    <!-- SUBJECTS -->

                                    <td>
                                        {{ $semester->subjects }}
                                    </td>


                                    <!-- ACTION -->

                                    <td>

                                        <!-- EDIT -->

                                        <button type="button"
                                                class="btn btn-primary btn-sm"
                                                data-toggle="modal"
                                                data-target="#editSemesterModal{{ $semester->id }}">

                                            <i class="fas fa-edit mr-1"></i>

                                            Edit

                                        </button>


                                        <!-- DELETE -->

                                        <form action="{{ route('semester.delete', $semester->id) }}"
                                              method="POST"
                                              style="display:inline;">

                                            @csrf

                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this semester?')">

                                                <i class="fas fa-trash mr-1"></i>

                                                Delete

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="4"
                                        class="text-center">

                                        <i class="fas fa-info-circle mr-1"></i>

                                        No semester details found.

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

<!-- ===================================================== -->

<!-- ADD SEMESTER MODAL -->

<!-- ===================================================== -->

<div class="modal fade"
     id="addSemesterModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">


<div class="modal-dialog modal-lg">

    <div class="modal-content">

        <form action="{{ route('semester.store') }}"
              method="POST">

            @csrf

            <!-- COURSE ID -->

            <input type="hidden"
                   name="course_id"
                   value="{{ $course->id }}">


            <!-- HEADER -->

            <div class="modal-header">

                <h5 class="modal-title">

                    <i class="fas fa-plus-circle mr-2"></i>

                    Add Semester

                </h5>

                <button type="button"
                        class="close"
                        data-dismiss="modal">

                    <span>&times;</span>

                </button>

            </div>


            <!-- BODY -->

            <div class="modal-body">


                <!-- SEMESTER -->

                <div class="form-group">

                    <label>

                        <i class="fas fa-layer-group mr-1"></i>

                        Semester

                    </label>

                    <input type="text"
                           name="semester"
                           class="form-control"
                           placeholder="Example: Semester 1"
                           value="{{ old('semester') }}"
                           required>

                </div>


                <!-- SUBJECTS -->

                <div class="form-group">

                    <label>

                        <i class="fas fa-book mr-1"></i>

                        Subjects

                    </label>

                    <textarea name="subjects"
                              class="form-control"
                              rows="6"
                              placeholder="Enter subjects for this semester"
                              required>{{ old('subjects') }}</textarea>

                    <small class="form-text text-muted">

                        Example: Mathematics, Physics, Engineering Graphics

                    </small>

                </div>


            </div>


            <!-- FOOTER -->

            <div class="modal-footer">

                <button type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">

                    <i class="fas fa-times mr-1"></i>

                    Close

                </button>


                <button type="submit"
                        class="btn btn-primary">

                    <i class="fas fa-save mr-1"></i>

                    Save Semester

                </button>

            </div>

        </form>

    </div>

</div>


</div>

<!-- ===================================================== -->

<!-- EDIT SEMESTER MODALS -->

<!-- ===================================================== -->

@foreach($semesters as $semester)


<div class="modal fade"
     id="editSemesterModal{{ $semester->id }}"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <form action="{{ route('semester.update', $semester->id) }}"
                  method="POST">

                @csrf

                @method('PUT')


                <!-- HEADER -->

                <div class="modal-header">

                    <h5 class="modal-title">

                        <i class="fas fa-edit mr-2"></i>

                        Edit Semester

                    </h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>


                <!-- BODY -->

                <div class="modal-body">


                    <!-- SEMESTER -->

                    <div class="form-group">

                        <label>

                            <i class="fas fa-layer-group mr-1"></i>

                            Semester

                        </label>

                        <input type="text"
                               name="semester"
                               class="form-control"
                               value="{{ $semester->semester }}"
                               required>

                    </div>


                    <!-- SUBJECTS -->

                    <div class="form-group">

                        <label>

                            <i class="fas fa-book mr-1"></i>

                            Subjects

                        </label>

                        <textarea name="subjects"
                                  class="form-control"
                                  rows="6"
                                  required>{{ $semester->subjects }}</textarea>

                    </div>


                </div>


                <!-- FOOTER -->

                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">

                        <i class="fas fa-times mr-1"></i>

                        Close

                    </button>


                    <button type="submit"
                            class="btn btn-success">

                        <i class="fas fa-save mr-1"></i>

                        Update Semester

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


@endforeach

<!-- ===================================================== -->

<!-- PAGE CSS -->

<!-- ===================================================== -->

<style>

.course-detail-box {
    padding: 10px 5px;
}

.course-detail-box strong {
    display: block;
    font-size: 15px;
    margin-bottom: 8px;
}

.course-detail-box p {
    margin: 0;
    font-size: 15px;
}

.table td,
.table th {
    vertical-align: middle;
}

.table td:nth-child(3) {
    white-space: normal;
    word-break: break-word;
}

.btn {
    margin-bottom: 2px;
}

.modal-content {
    border-radius: 5px;
}

.modal-header {
    background-color: #007bff;
    color: #fff;
}

.modal-header .close {
    color: #fff;
    opacity: 1;
}

.modal-header .close:hover {
    color: #fff;
}

</style>

@endsection
