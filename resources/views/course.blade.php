@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Courses</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Courses
                        </li>
                    </ol>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>

                    <button type="submit" class="btn btn-primary">
                        Save Course
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Course Name</th>
                      <th>Over View</th>
                       <th>Eligibility</th>
                       <th>Duration</th>
                       <th>Curriculum</th>
                       <th>Opportunities</th>
                        <th>Certifications</th>
                        <th>Values</th>
                        <th>Placement Support</th>
                        <th>Fees</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
            
                  @foreach($courses as $key)
                      
                    <tr>
                      <td>{{ $key->id }}</td>
                      <td>{{$key->coursename}}</td>
                      <td>{{$key->overview}}</td>
                      <td>{{$key->eligibility}}</td>
                      <td>{{$key->duration}}</td>

                      <td>{{$key->curriculum}}</td>
                      <td>{{$key->opportunities}}</td>
                      <td>{{$key->certifications}}</td>
                      <td>{{$key->values}}</td>
                      <td>{{$key->placementsupport}}</td>
                      <td>{{$key->fees}}</td>

                      
                      <td>

                      <button type="button"
            class="btn btn-sm btn-primary editaboutus"
            data-id="{{ $key->id }}">
        Edit
    </button>
                      </td>
                    </tr>

                    @endforeach
                    

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
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
                        <div class="card-header">

                            <h3 class="card-title">
                                Course List
                            </h3>

                            <button type="button"
                                    class="btn btn-primary btn-sm float-right"
                                    data-toggle="modal"
                                    data-target="#newRecordModal">

                                <i class="fas fa-plus"></i>
                                New Record

                            </button>

                        </div>


                        <!-- ================================================= -->
                        <!-- NEW COURSE MODAL -->
                        <!-- ================================================= -->

                        <div class="modal fade"
                             id="newRecordModal"
                             tabindex="-1"
                             role="dialog"
                             aria-hidden="true">

                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">

                                    <form action="{{ route('course.store') }}"
                                          method="POST">

                                        @csrf

                                        <!-- Modal Header -->
                                        <div class="modal-header">

                                            <h5 class="modal-title">
                                                Add New Course
                                            </h5>

                                            <button type="button"
                                                    class="close"
                                                    data-dismiss="modal">

                                                <span>&times;</span>

                                            </button>

                                        </div>


                                        <!-- Modal Body -->
                                        <div class="modal-body">


                                            <!-- Course Name -->
                                            <div class="form-group">

                                                <label>
                                                    Course Name
                                                </label>

                                                <input type="text"
                                                       name="coursename"
                                                       class="form-control @error('coursename') is-invalid @enderror"
                                                       value="{{ old('coursename') }}"
                                                       required>

                                                @error('coursename')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                            <!-- Course Full Name -->
                                            <div class="form-group">

                                                <label>
                                                    Course Full Name
                                                </label>

                                                <input type="text"
                                                       name="coursefullname"
                                                       class="form-control @error('coursefullname') is-invalid @enderror"
                                                       value="{{ old('coursefullname') }}"
                                                       required>

                                                @error('coursefullname')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                            <!-- Eligibility -->
                                            <div class="form-group">

                                                <label>
                                                    Eligibility
                                                </label>

                                                <input type="text"
                                                       name="eligibility"
                                                       class="form-control @error('eligibility') is-invalid @enderror"
                                                       value="{{ old('eligibility') }}"
                                                       required>

                                                @error('eligibility')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                            <!-- Duration -->
                                            <div class="form-group">

                                                <label>
                                                    Duration
                                                </label>

                                                <input type="number"
                                                       name="duration"
                                                       class="form-control @error('duration') is-invalid @enderror"
                                                       value="{{ old('duration') }}"
                                                       required>

                                                @error('duration')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                            <!-- Core Objectives -->
                                            <div class="form-group">

                                                <label>
                                                    Core Objectives
                                                </label>

                                                <textarea name="CoreObjectives"
                                                          class="form-control @error('CoreObjectives') is-invalid @enderror"
                                                          rows="3"
                                                          required>{{ old('CoreObjectives') }}</textarea>

                                                @error('CoreObjectives')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                            <!-- Highlights -->
                                            <div class="form-group">

                                                <label>
                                                    Highlights
                                                </label>

                                                <textarea name="Highlights"
                                                          class="form-control @error('Highlights') is-invalid @enderror"
                                                          rows="3"
                                                          required>{{ old('Highlights') }}</textarea>

                                                @error('Highlights')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                            <!-- Intake -->
                                            <div class="form-group">

                                                <label>
                                                    Intake
                                                </label>

                                                <input type="number"
                                                       name="intake"
                                                       class="form-control @error('intake') is-invalid @enderror"
                                                       value="{{ old('intake') }}"
                                                       required>

                                                @error('intake')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                            <!-- Fees -->
                                            <div class="form-group">

                                                <label>
                                                    Fees
                                                </label>

                                                <input type="number"
                                                       name="fees"
                                                       class="form-control @error('fees') is-invalid @enderror"
                                                       value="{{ old('fees') }}"
                                                       required>

                                                @error('fees')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                        </div>


                                        <!-- Modal Footer -->
                                        <div class="modal-footer">

                                            <button type="button"
                                                    class="btn btn-secondary"
                                                    data-dismiss="modal">

                                                Close

                                            </button>

                                            <button type="submit"
                                                    class="btn btn-primary">

                                                Save Course

                                            </button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>


                        <!-- ================================================= -->
                        <!-- EDIT COURSE MODAL -->
                        <!-- ================================================= -->

                        <div class="modal fade"
                             id="editCourseModal"
                             tabindex="-1"
                             role="dialog"
                             aria-hidden="true">

                            <div class="modal-dialog modal-lg">

                                <div class="modal-content">

                                    <form id="editCourseForm"
                                          method="POST">

                                        @csrf
                                        @method('PUT')


                                        <!-- Edit Header -->
                                        <div class="modal-header">

                                            <h5 class="modal-title">
                                                Edit Course
                                            </h5>

                                            <button type="button"
                                                    class="close"
                                                    data-dismiss="modal">

                                                <span>&times;</span>

                                            </button>

                                        </div>


                                        <!-- Edit Body -->
                                        <div class="modal-body">


                                            <!-- Course Name -->
                                            <div class="form-group">

                                                <label>
                                                    Course Name
                                                </label>

                                                <input type="text"
                                                       name="coursename"
                                                       id="edit_coursename"
                                                       class="form-control"
                                                       required>

                                                @error('coursename')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                            <!-- Course Full Name -->
                                            <div class="form-group">

                                                <label>
                                                    Course Full Name
                                                </label>

                                                <input type="text"
                                                       name="coursefullname"
                                                       id="edit_coursefullname"
                                                       class="form-control"
                                                       required>

                                                @error('coursefullname')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror

                                            </div>


                                            <!-- Eligibility -->
                                            <div class="form-group">

                                                <label>
                                                    Eligibility
                                                </label>

                                                <input type="text"
                                                       name="eligibility"
                                                       id="edit_eligibility"
                                                       class="form-control"
                                                       required>

                                            </div>


                                            <!-- Duration -->
                                            <div class="form-group">

                                                <label>
                                                    Duration
                                                </label>

                                                <input type="number"
                                                       name="duration"
                                                       id="edit_duration"
                                                       class="form-control"
                                                       required>

                                            </div>


                                            <!-- Core Objectives -->
                                            <div class="form-group">

                                                <label>
                                                    Core Objectives
                                                </label>

                                                <textarea name="CoreObjectives"
                                                          id="edit_CoreObjectives"
                                                          class="form-control"
                                                          rows="3"
                                                          required></textarea>

                                            </div>


                                            <!-- Highlights -->
                                            <div class="form-group">

                                                <label>
                                                    Highlights
                                                </label>

                                                <textarea name="Highlights"
                                                          id="edit_Highlights"
                                                          class="form-control"
                                                          rows="3"
                                                          required></textarea>

                                            </div>


                                            <!-- Intake -->
                                            <div class="form-group">

                                                <label>
                                                    Intake
                                                </label>

                                                <input type="number"
                                                       name="intake"
                                                       id="edit_intake"
                                                       class="form-control"
                                                       required>

                                            </div>


                                            <!-- Fees -->
                                            <div class="form-group">

                                                <label>
                                                    Fees
                                                </label>

                                                <input type="number"
                                                       name="fees"
                                                       id="edit_fees"
                                                       class="form-control"
                                                       required>

                                            </div>


                                        </div>


                                        <!-- Edit Footer -->
                                        <div class="modal-footer">

                                            <button type="button"
                                                    class="btn btn-secondary"
                                                    data-dismiss="modal">

                                                Close

                                            </button>

                                            <button type="submit"
                                                    class="btn btn-success">

                                                Update Course

                                            </button>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        </div>


                        <!-- ================================================= -->
                        <!-- COURSE TABLE -->
                        <!-- ================================================= -->

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered table-hover">

                                    <thead>

                                        <tr>

                                            <th style="width: 10px">
                                                #
                                            </th>

                                            <th>
                                                Course Name
                                            </th>

                                            <th>
                                                Eligibility
                                            </th>

                                            <th>
                                                Duration
                                            </th>

                                            <th>
                                                Intake
                                            </th>

                                            <th>
                                                Fees
                                            <th style="width: 300px">
    ACTION
</th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        @foreach($courses as $key)

                                            <tr>

                                                <td>
                                                    {{ $key->id }}
                                                </td>

                                                <td>
                                                    {{ $key->coursename }}
                                                </td>

                                                <td>
                                                    {{ $key->eligibility }}
                                                </td>

                                                <td>
                                                    {{ $key->duration }}
                                                </td>

                                                <td>
                                                    {{ $key->values }}
                                                </td>

                                                <td>
                                                    {{ $key->fees }}
                                                </td>

                                                <td>

    <!-- Edit Button -->
    <button type="button"
            class="btn btn-sm btn-primary editCourse"
            data-id="{{ $key->id }}"
            data-coursename="{{ $key->coursename }}"
            data-coursefullname="{{ $key->overview }}"
            data-eligibility="{{ $key->eligibility }}"
            data-duration="{{ $key->duration }}"
            data-coreobjectives="{{ $key->Curriculum }}"
            data-highlights="{{ $key->Certifications }}"
            data-intake="{{ $key->values }}"
            data-fees="{{ $key->fees }}">

        <i class="fas fa-edit"></i>
        Edit

    </button>


    <!-- Semester-wise Curriculum Button -->
    <a href="{{ route('semester.index', $key->id) }}"
       class="btn btn-sm btn-info">

        <i class="fas fa-book"></i>
        Semester-wise Curriculum

    </a>

</td>

                                            </tr>

                                        @endforeach

                                    </tbody>

                                </table>

                            </div>

                        </div>


                        <!-- ================================================= -->
                        <!-- CARD FOOTER -->
                        <!-- ================================================= -->

                        <div class="card-footer clearfix">

                            <ul class="pagination pagination-sm m-0 float-right">

                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        &laquo;
                                    </a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        1
                                    </a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        2
                                    </a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        3
                                    </a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        &raquo;
                                    </a>
                                </li>

                            </ul>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>

</div>


@endsection