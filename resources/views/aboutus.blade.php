@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>About Us</h1>
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            About Us
                        </li>

                    </ol>

                </div>

            </div>

        </div>
    </section>


    <!-- SUCCESS MESSAGE -->

    @if(session('success'))

        <section class="content">

            <div class="container-fluid">

                <div class="alert alert-success alert-dismissible">

                    <button type="button"
                            class="close"
                            data-dismiss="alert">
                        &times;
                    </button>

                    {{ session('success') }}

                </div>

            </div>

        </section>

    @endif


    <!-- Main Content -->

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">


                        <!-- Card Header -->

                        <div class="card-header d-flex justify-content-between align-items-center">

                            <h3 class="card-title">
                                About Us List
                            </h3>


                            <button type="button"
                                    class="btn btn-primary btn-sm"
                                    data-toggle="modal"
                                    data-target="#newRecordModal">

                                <i class="fas fa-plus"></i>
                                New Record

                            </button>

                        </div>


                        <!-- Table -->

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered">

                                    <thead>

                                        <tr>

                                            <th>#</th>

                                            <th>About Us</th>

                                            <th>Vision</th>

                                            <th>Mission</th>

                                            <th>Principal Message</th>

                                            <th>Director Message</th>

                                            <th>Accrediation</th>

                                            <th>Infrastructure</th>

                                            <th>Campus Video</th>

                                            <th>Action</th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        @forelse($aboutus as $key)

                                            <tr>

                                                <td>
                                                    {{ $key->id }}
                                                </td>

                                                <td>
                                                    {{ $key->about }}
                                                </td>

                                                <td>
                                                    {{ $key->vision }}
                                                </td>

                                                <td>
                                                    {{ $key->mission }}
                                                </td>

                                                <td>
                                                    {{ $key->principalmsg }}
                                                </td>

                                                <td>
                                                    {{ $key->directormsg }}
                                                </td>

                                                <td>
                                                    {{ $key->accrediation }}
                                                </td>

                                                <td>
                                                    {{ $key->infrastructure }}
                                                </td>

                                               <td>

    @if(!empty($key->campusvideo))

        <video width="220" controls>
            <source src="{{ asset($key->campusvideo) }}">
            Your browser does not support video playback.
        </video>

    @else

        No Video

    @endif

</td>

                                                <!-- Edit -->

                                                <td>

                                                    <button type="button"
                                                            class="btn btn-sm btn-primary editaboutus"
                                                            data-id="{{ $key->id }}">

                                                        Edit

                                                    </button>

                                                </td>

                                            </tr>

                                        @empty

                                            <tr>

                                                <td colspan="10"
                                                    class="text-center">

                                                    No records found.

                                                </td>

                                            </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>

                        </div>


                        <!-- Footer -->

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



<!-- ======================================================= -->
<!-- NEW RECORD MODAL -->
<!-- ======================================================= -->

<div class="modal fade"
     id="newRecordModal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="newRecordModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-lg"
         role="document">

        <div class="modal-content">


            <form action="{{ route('createaboutus') }}"
      method="POST"
      enctype="multipart/form-data">

                @csrf


                <!-- Modal Header -->

                <div class="modal-header">

                    <h5 class="modal-title"
                        id="newRecordModalLabel">

                        Add New Record

                    </h5>


                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>



                <!-- Modal Body -->

                <div class="modal-body">


                    <!-- ====================================== -->
                    <!-- ALL VALIDATION ERRORS INSIDE MODAL -->
                    <!-- ====================================== -->

                    @if ($errors->any())

                        <div class="alert alert-danger alert-dismissible">

                            <button type="button"
                                    class="close"
                                    data-dismiss="alert">

                                &times;

                            </button>

                            <h5>
                                <i class="fas fa-exclamation-triangle"></i>
                                Please correct the following errors:
                            </h5>


                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    @endif



                    <!-- ABOUT US -->

                    <div class="form-group">

                        <label>
                            About Us
                        </label>

                        <textarea name="about"
                                  rows="3"
                                  class="form-control @error('about') is-invalid @enderror"
                                  required>{{ old('about') }}</textarea>


                        @error('about')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- VISION -->

                    <div class="form-group">

                        <label>
                            Vision
                        </label>

                        <textarea name="vision"
                                  rows="3"
                                  class="form-control @error('vision') is-invalid @enderror"
                                  required>{{ old('vision') }}</textarea>


                        @error('vision')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- MISSION -->

                    <div class="form-group">

                        <label>
                            Mission
                        </label>

                        <textarea name="mission"
                                  rows="3"
                                  class="form-control @error('mission') is-invalid @enderror"
                                  required>{{ old('mission') }}</textarea>


                        @error('mission')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- PRINCIPAL MESSAGE -->

                    <div class="form-group">

                        <label>
                            Principal Message
                        </label>

                        <textarea name="principalmsg"
                                  rows="3"
                                  class="form-control @error('principalmsg') is-invalid @enderror"
                                  required>{{ old('principalmsg') }}</textarea>


                        @error('principalmsg')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- DIRECTOR MESSAGE -->

                    <div class="form-group">

                        <label>
                            Director Message
                        </label>

                        <textarea name="directormsg"
                                  rows="3"
                                  class="form-control @error('directormsg') is-invalid @enderror"
                                  required>{{ old('directormsg') }}</textarea>


                        @error('directormsg')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- ACCREDIATION -->

                    <div class="form-group">

                        <label>
                            Accrediation
                        </label>

                        <textarea name="accrediation"
                                  rows="3"
                                  class="form-control @error('accrediation') is-invalid @enderror"
                                  required>{{ old('accrediation') }}</textarea>


                        @error('accrediation')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- INFRASTRUCTURE -->

                    <div class="form-group">

                        <label>
                            Infrastructure
                        </label>

                        <textarea name="infrastructure"
                                  rows="3"
                                  class="form-control @error('infrastructure') is-invalid @enderror"
                                  required>{{ old('infrastructure') }}</textarea>


                        @error('infrastructure')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- CAMPUS VIDEO -->

                    <div class="form-group">

    <label>Campus Video</label>

    <input type="file"
           name="campusvideo"
           class="form-control @error('campusvideo') is-invalid @enderror"
           accept=".mp4,.mov,.avi,.wmv,.mkv">

    @error('campusvideo')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
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

                        Save Record

                    </button>


                </div>


            </form>

        </div>

    </div>

</div>



<!-- ======================================================= -->
<!-- AUTOMATICALLY OPEN MODAL WHEN VALIDATION FAILS -->
<!-- ======================================================= -->

@if ($errors->any())

<script>

    $(document).ready(function () {

        $('#newRecordModal').modal('show');

    });

</script>

@endif


@endsection