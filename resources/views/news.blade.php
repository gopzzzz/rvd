@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>News</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            News
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header d-flex justify-content-between align-items-center">

                            <h3 class="card-title">
                                News List
                            </h3>

                            <button type="button"
                                    class="btn btn-primary btn-sm"
                                    data-toggle="modal"
                                    data-target="#newRecordModal">

                                <i class="fas fa-plus"></i>
                                New Record

                            </button>

                        </div>

                        @if(session('success'))
                            <div class="alert alert-success m-3">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card-body">

                            <table class="table table-bordered">

                                <thead>

                                    <tr>

                                        <th>ID</th>
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th width="120">Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    @forelse($news as $key)

                                    <tr>

                                        <td>{{ $key->id }}</td>

                                        <td>

                                            @if($key->photo)

                                                <a href="{{ asset($key->photo) }}" target="_blank">

                                                    <img src="{{ asset($key->photo) }}"
                                                         width="80"
                                                         height="80"
                                                         style="object-fit:cover;border-radius:5px;cursor:pointer;">

                                                </a>

                                            @else

                                                No Image

                                            @endif

                                        </td>

                                        <td>{{ $key->title }}</td>

                                        <td>{{ $key->description }}</td>

                                        <td>
    <button
        class="btn btn-primary btn-sm editnews"
        data-id="{{ $key->id }}"
        data-title="{{ $key->title }}"
        data-description="{{ $key->description }}"
        data-photo="{{ $key->photo }}"
        data-toggle="modal"
        data-target="#editNewsModal">
        Edit
    </button>
</td>

                                    </tr>

                                    @empty

                                    <tr>

                                        <td colspan="5" class="text-center">

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

    </section>

</div>



<!-- Add News Modal -->

<div class="modal fade"
     id="newRecordModal"
     tabindex="-1"
     role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="{{ route('createnews') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">

                        Add News

                    </h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <div class="form-group">

                        <label>Photo</label>

                        <input type="file"
                               name="photo"
                               class="form-control"
                               accept=".jpg,.jpeg,.png,.gif"
                               required>

                    </div>

                    <div class="form-group">

                        <label>Title</label>

                        <input type="text"
                               name="title"
                               class="form-control"
                               required>

                    </div>

                    <div class="form-group">

                        <label>Description</label>

                        <textarea name="description"
                                  class="form-control"
                                  rows="5"
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
                            class="btn btn-success">

                        Save Record

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<div class="modal fade" id="editNewsModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="{{ route('updatenews') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <input type="hidden" name="id" id="edit_id">

                <div class="modal-header">
                    <h5>Edit News</h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">
                        &times;
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label>Photo</label>

                        <input type="file"
                               name="photo"
                               class="form-control">

                        <br>

                        <img id="previewPhoto"
                             width="100">
                    </div>

                    <div class="form-group">
                        <label>Title</label>

                        <input type="text"
                               name="title"
                               id="edit_title"
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Description</label>

                        <textarea
                            name="description"
                            id="edit_description"
                            class="form-control"></textarea>
                    </div>

                </div>

                <div class="modal-footer">

                    <button class="btn btn-success">
                        Update
                    </button>

                </div>

            </form>

        </div>
    </div>
</div>

@endsection