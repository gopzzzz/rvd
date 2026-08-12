@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>FAQ</h1>
                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            FAQ
                        </li>

                    </ol>

                </div>

            </div>

        </div>
    </section>


    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h3 class="card-title">
                        Frequently Asked Questions
                    </h3>

                    <button type="button"
                            class="btn btn-primary btn-sm"
                            data-toggle="modal"
                            data-target="#newFaqModal">

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

                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead>

                                <tr>
                                    <th style="width:60px">#</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th style="width:180px">Action</th>
                                </tr>

                            </thead>


                            <tbody>

                                @forelse($faqs as $key)

                                    <tr>

                                        <td>
                                            {{ $key->id }}
                                        </td>

                                        <td>
                                            {{ $key->question }}
                                        </td>

                                        <td>
                                            {{ $key->answer }}
                                        </td>

                                        <td>

                                            <button type="button"
                                                    class="btn btn-primary btn-sm editfaq"
                                                    data-id="{{ $key->id }}"
                                                    data-question="{{ $key->question }}"
                                                    data-answer="{{ $key->answer }}"
                                                    data-toggle="modal"
                                                    data-target="#editFaqModal">

                                                Edit

                                            </button>


                                            <form action="{{ route('deletefaq') }}"
                                                  method="POST"
                                                  style="display:inline-block;"
                                                  onsubmit="return confirm('Are you sure you want to delete this FAQ?');">

                                                @csrf

                                                <input type="hidden"
                                                       name="id"
                                                       value="{{ $key->id }}">

                                                <button type="submit"
                                                        class="btn btn-danger btn-sm">

                                                    Delete

                                                </button>

                                            </form>

                                        </td>

                                    </tr>


                                @empty

                                    <tr>

                                        <td colspan="4"
                                            class="text-center">

                                            No FAQ records found.

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



<!-- NEW FAQ MODAL -->

<div class="modal fade"
     id="newFaqModal"
     tabindex="-1"
     role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="{{ route('createfaq') }}"
                  method="POST">

                @csrf

                <input type="hidden"
                       name="_form"
                       value="create">


                <div class="modal-header">

                    <h5 class="modal-title">
                        Add FAQ
                    </h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>


                <div class="modal-body">


                    @if($errors->any() && old('_form') == 'create')

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <div class="form-group">

                        <label>
                            Question
                        </label>

                        <textarea name="question"
                                  class="form-control @error('question') is-invalid @enderror"
                                  rows="3"
                                  required>{{ old('question') }}</textarea>

                        @error('question')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    <div class="form-group">

                        <label>
                            Answer
                        </label>

                        <textarea name="answer"
                                  class="form-control @error('answer') is-invalid @enderror"
                                  rows="5"
                                  required>{{ old('answer') }}</textarea>

                        @error('answer')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

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

                        Save Record

                    </button>

                </div>


            </form>

        </div>

    </div>

</div>



<!-- EDIT FAQ MODAL -->

<div class="modal fade"
     id="editFaqModal"
     tabindex="-1"
     role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="{{ route('updatefaq') }}"
                  method="POST">

                @csrf

                <input type="hidden"
                       name="id"
                       id="edit_id">


                <div class="modal-header">

                    <h5 class="modal-title">
                        Edit FAQ
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
                            Question
                        </label>

                        <textarea name="question"
                                  id="edit_question"
                                  class="form-control"
                                  rows="3"
                                  required></textarea>

                    </div>


                    <div class="form-group">

                        <label>
                            Answer
                        </label>

                        <textarea name="answer"
                                  id="edit_answer"
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

                        Update

                    </button>

                </div>


            </form>

        </div>

    </div>

</div>

@endsection