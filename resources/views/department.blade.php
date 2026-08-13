@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Department</h1>
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Department
                        </li>

                    </ol>

                </div>

            </div>

        </div>

    </section>


    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">

                        <!-- Card Header -->
                        <div class="card-header d-flex justify-content-between align-items-center">

                            <h3 class="card-title">
                                Department Table
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
                             id="newRecordModal"
                             tabindex="-1"
                             role="dialog"
                             aria-hidden="true">

                            <div class="modal-dialog">

                                <form action="{{ route('department.store') }}"
                                      method="POST">

                                    @csrf

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <h5 class="modal-title">
                                                Add New Department
                                            </h5>

                                            <button type="button"
                                                    class="close"
                                                    data-dismiss="modal">

                                                <span>&times;</span>

                                            </button>

                                        </div>


                                        <div class="modal-body">

                                            <div class="form-group">

                                                <label>
                                                    Department Name
                                                </label>

                                                <input type="text"
                                                       name="name"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       value="{{ old('name') }}"
                                                       required>

                                                @error('name')

                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>

                                                @enderror

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
                                                Save Record

                                            </button>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>


                        <!-- ================= DEPARTMENT TABLE ================= -->

                        <div class="card-body">

                            <div class="table-responsive">

                                <table class="table table-bordered table-hover">

                                    <thead>

                                        <tr>

                                            <th style="width:70px;">
                                                #
                                            </th>

                                            <th>
                                                Name
                                            </th>

                                            <th style="width:150px;">
                                                Action
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        @forelse($department as $index => $key)

                                            <tr>

                                                <!-- NUMBER -->

                                                <td>
                                                    {{ $index + 1 }}
                                                </td>


                                                <!-- NAME -->

                                                <td>
                                                    {{ $key->name }}
                                                </td>


                                                <!-- ACTION -->

                                                <td>

                                                    <!-- EDIT -->

                                                    <button type="button"
                                                            class="btn btn-primary btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#editDepartmentModal{{ $key->id }}">

                                                        <i class="fas fa-edit"></i>
                                                        Edit

                                                    </button>

                                                </td>

                                            </tr>

                                        @empty

                                            <tr>

                                                <td colspan="3"
                                                    class="text-center">

                                                    No departments found.

                                                </td>

                                            </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>

                        </div>


                        <!-- ================= EDIT MODALS ================= -->

                        @foreach($department as $key)

                            <div class="modal fade"
                                 id="editDepartmentModal{{ $key->id }}"
                                 tabindex="-1"
                                 role="dialog"
                                 aria-hidden="true">

                                <div class="modal-dialog">

                                    <form action="{{ route('department.update', $key->id) }}"
                                          method="POST">

                                        @csrf

                                        @method('PUT')

                                        <div class="modal-content">


                                            <!-- Header -->

                                            <div class="modal-header">

                                                <h5 class="modal-title">

                                                    <i class="fas fa-edit"></i>
                                                    Edit Department

                                                </h5>

                                                <button type="button"
                                                        class="close"
                                                        data-dismiss="modal">

                                                    <span>&times;</span>

                                                </button>

                                            </div>


                                            <!-- Body -->

                                            <div class="modal-body">

                                                <div class="form-group">

                                                    <label>
                                                        Department Name
                                                    </label>

                                                    <input type="text"
                                                           name="name"
                                                           class="form-control"
                                                           value="{{ $key->name }}"
                                                           required>

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

                                                    <i class="fas fa-save"></i>
                                                    Update

                                                </button>

                                            </div>

                                        </div>

                                    </form>

                                </div>

                            </div>

                        @endforeach


                        <!-- Pagination -->
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