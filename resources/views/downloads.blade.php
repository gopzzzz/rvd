@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Downloads</h1>
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Downloads
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
                                Downloads
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

                            <div class="alert alert-success m-3">

                                {{ session('success') }}

                            </div>

                        @endif


                        <!-- TABLE -->
                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered">

                                    <thead>

                                        <tr>

                                            <th style="width: 10px">
                                                #
                                            </th>

                                            <th>
                                                Document Name
                                            </th>

                                            <th>
                                                Documents
                                            </th>

                                            <th style="width: 100px">
                                                Action
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        @forelse($downloads as $key)

                                            <tr>

                                                <td>
                                                    {{ $key->id }}
                                                </td>


                                                <td>
                                                    {{ $key->documentname }}
                                                </td>


                                                <td>

                                                    @if(!empty($key->documents))

                                                        <a href="{{ asset($key->documents) }}"
                                                           target="_blank"
                                                           class="btn btn-sm btn-info">

                                                            View Document

                                                        </a>

                                                    @else

                                                        No Document

                                                    @endif

                                                </td>


                                                <td>

                                                    <button type="button"
                                                            class="btn btn-sm btn-primary editdownloads"

                                                            data-id="{{ $key->id }}"

                                                            data-documentname="{{ $key->documentname }}"

                                                            data-documents="{{ $key->documents }}">

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


                        <!-- Card Footer -->
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



<!-- ====================================================== -->
<!-- NEW RECORD MODAL -->
<!-- ====================================================== -->

<div class="modal fade"
     id="newRecordModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">


            <form action="{{ route('createdownloads') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- Header -->
                <div class="modal-header">

                    <h5 class="modal-title">
                        Add New Record
                    </h5>


                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>


                <!-- Body -->
                <div class="modal-body">


                    <!-- VALIDATION ERRORS -->

                    @if ($errors->any())

                        <div class="alert alert-danger alert-dismissible">

                            <button type="button"
                                    class="close"
                                    data-dismiss="alert">

                                &times;

                            </button>


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



                    <!-- DOCUMENT NAME -->

                    <div class="form-group">

                        <label>
                            Document Name
                        </label>


                        <input type="text"
                               name="documentname"
                               value="{{ old('documentname') }}"
                               class="form-control @error('documentname') is-invalid @enderror"
                               required>


                        @error('documentname')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                        @enderror

                    </div>



                    <!-- DOCUMENT -->

                    <div class="form-group">

                        <label>
                            Documents
                        </label>


                        <input type="file"
                               name="documents"
                               class="form-control @error('documents') is-invalid @enderror"
                               accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                               required>


                        @error('documents')

                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>

                        @enderror

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



<!-- ====================================================== -->
<!-- EDIT DOWNLOAD MODAL -->
<!-- ====================================================== -->

<div class="modal fade"
     id="editDownloadsModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">


            <form action="{{ route('updatedownloads') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- Header -->
                <div class="modal-header">

                    <h5 class="modal-title">
                        Edit Download
                    </h5>


                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>


                <!-- Body -->
                <div class="modal-body">


                    <!-- ID -->

                    <input type="hidden"
                           name="id"
                           id="edit_id">


                    <!-- EXISTING DOCUMENT -->

                    <input type="hidden"
                           name="current_document"
                           id="current_document">



                    <!-- DOCUMENT NAME -->

                    <div class="form-group">

                        <label>
                            Document Name
                        </label>


                        <input type="text"
                               name="documentname"
                               id="edit_documentname"
                               class="form-control"
                               required>

                    </div>



                    <!-- CURRENT DOCUMENT -->

                    <div class="form-group">

                        <label>
                            Current Document
                        </label>

                        <div>

                            <a href="#"
                               id="current_document_link"
                               target="_blank"
                               class="btn btn-sm btn-info">

                                View Current Document

                            </a>

                        </div>

                    </div>



                    <!-- REPLACE DOCUMENT -->

                    <div class="form-group">

                        <label>
                            Replace Document
                        </label>


                        <input type="file"
                               name="documents"
                               class="form-control"
                               accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">


                        <small class="text-muted">

                            Leave empty if you do not want to replace the current document.

                        </small>

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

                        Update

                    </button>


                </div>


            </form>

        </div>

    </div>

</div>
@endsection