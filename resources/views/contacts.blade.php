@extends('layouts.mainlayout')

@section('content')

<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Contacts</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Contacts
                        </li>

                    </ol>
                </div>

            </div>

        </div>
    </section>


    <!-- Main Content -->
    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <!-- Card Header -->
                <div class="card-header d-flex justify-content-between align-items-center">

                    <h3 class="card-title">
                        Contacts List
                    </h3>

                    <button type="button"
                            class="btn btn-primary btn-sm"
                            data-toggle="modal"
                            data-target="#newContactModal">

                        <i class="fas fa-plus"></i>
                        New Record

                    </button>

                </div>


                <!-- Success Message -->
                @if(session('success'))

                    <div class="alert alert-success m-3">
                        {{ session('success') }}
                    </div>

                @endif


                <!-- Error Message -->
                @if(session('error'))

                    <div class="alert alert-danger m-3">
                        {{ session('error') }}
                    </div>

                @endif


                <!-- Contacts Table -->
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead>

                                <tr>

                                    <th>ID</th>
                                    <th>Caption</th>
                                    <th>Logo</th>
                                    <th>Broacher</th>
                                    <th>Phone</th>
                                    <th>Mail</th>
                                    <th>Open Time</th>
                                    <th>Close Time</th>
                                    <th>WhatsApp</th>
                                    <th>Address</th>

                                </tr>

                            </thead>


                            <tbody>

                                @forelse($contacts as $key)

                                    <tr>

                                        <td>
                                            {{ $key->id }}
                                        </td>


                                        <td>
                                            {{ $key->smallcaption }}
                                        </td>


                                        <!-- Logo -->
                                        <td>

                                            @if(!empty($key->logo))

                                                <a href="{{ asset($key->logo) }}"
                                                   target="_blank">

                                                    <img src="{{ asset($key->logo) }}"
                                                         width="70"
                                                         height="70"
                                                         style="object-fit:cover;"
                                                         alt="Logo">

                                                </a>

                                            @else

                                                No Logo

                                            @endif

                                        </td>


                                        <!-- Broacher -->
                                        <td>

                                            @if(!empty($key->broacher))

                                                <a href="{{ asset($key->broacher) }}"
                                                   target="_blank">

                                                    View Broacher

                                                </a>

                                            @else

                                                No Broacher

                                            @endif

                                        </td>


                                        <td>
                                            {{ $key->phonenumber }}
                                        </td>


                                        <td>
                                            {{ $key->mail }}
                                        </td>


                                        <!-- Open Time -->
                                        <td>

                                            @if(!empty($key->open))

                                                {{ date('h:i A', strtotime($key->open)) }}

                                            @else

                                                -

                                            @endif

                                        </td>


                                        <!-- Close Time -->
                                        <td>

                                            @if(!empty($key->close))

                                                {{ date('h:i A', strtotime($key->close)) }}

                                            @else

                                                -

                                            @endif

                                        </td>


                                        <td>
                                            {{ $key->whatsappnumber }}
                                        </td>


                                        <td>
                                            {{ $key->address }}
                                        </td>

                                    </tr>


                                @empty

                                    <tr>

                                        <td colspan="10"
                                            class="text-center">

                                            No Contacts Found

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
<!-- NEW CONTACT MODAL -->
<!-- ===================================================== -->

<div class="modal fade"
     id="newContactModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <form action="{{ route('createcontacts') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf


                <!-- Used to identify Create form errors -->
                <input type="hidden"
                       name="_form"
                       value="create">


                <!-- Modal Header -->
                <div class="modal-header">

                    <h5 class="modal-title">
                        Add Contact
                    </h5>


                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>


                <!-- Modal Body -->
                <div class="modal-body">


                    <!-- Validation Errors -->
                    @if ($errors->any() && old('_form') == 'create')

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



                    <!-- Small Caption -->
                    <div class="form-group">

                        <label>
                            Small Caption
                        </label>

                        <input type="text"
                               name="smallcaption"
                               value="{{ old('smallcaption') }}"
                               class="form-control @error('smallcaption') is-invalid @enderror"
                               required>


                        @error('smallcaption')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- Broacher -->
                    <div class="form-group">

                        <label>
                            Broacher
                        </label>

                        <input type="file"
                               name="broacher"
                               class="form-control @error('broacher') is-invalid @enderror"
                               accept=".pdf,.doc,.docx">


                        @error('broacher')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- Logo -->
                    <div class="form-group">

                        <label>
                            Logo
                        </label>

                        <input type="file"
                               name="logo"
                               class="form-control @error('logo') is-invalid @enderror"
                               accept=".jpg,.jpeg,.png,.webp">


                        @error('logo')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- Phone Number -->
                    <div class="form-group">

                        <label>
                            Phone Number
                        </label>

                        <input type="text"
                               name="phonenumber"
                               value="{{ old('phonenumber') }}"
                               class="form-control @error('phonenumber') is-invalid @enderror"
                               placeholder="9876543210">


                        @error('phonenumber')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- Email -->
                    <div class="form-group">

                        <label>
                            Email
                        </label>

                        <input type="email"
                               name="mail"
                               value="{{ old('mail') }}"
                               class="form-control @error('mail') is-invalid @enderror"
                               placeholder="example@gmail.com">


                        @error('mail')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- ======================================== -->
                    <!-- OPEN TIME -->
                    <!-- ======================================== -->

                    <div class="form-group">

                        <label>
                            Open Time
                        </label>

                        <input type="time"
                               name="open"
                               value="{{ old('open') }}"
                               class="form-control @error('open') is-invalid @enderror"
                               required>


                        @error('open')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- ======================================== -->
                    <!-- CLOSE TIME -->
                    <!-- ======================================== -->

                    <div class="form-group">

                        <label>
                            Close Time
                        </label>

                        <input type="time"
                               name="close"
                               value="{{ old('close') }}"
                               class="form-control @error('close') is-invalid @enderror"
                               required>


                        @error('close')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- Facebook Link -->
                    <div class="form-group">

                        <label>
                            Facebook Link
                        </label>

                        <input type="url"
                               name="facebooklink"
                               value="{{ old('facebooklink') }}"
                               class="form-control @error('facebooklink') is-invalid @enderror"
                               placeholder="https://facebook.com/...">


                        @error('facebooklink')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- Instagram Link -->
                    <div class="form-group">

                        <label>
                            Instagram Link
                        </label>

                        <input type="url"
                               name="instagramlink"
                               value="{{ old('instagramlink') }}"
                               class="form-control @error('instagramlink') is-invalid @enderror"
                               placeholder="https://instagram.com/...">


                        @error('instagramlink')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- YouTube Link -->
                    <div class="form-group">

                        <label>
                            YouTube Link
                        </label>

                        <input type="url"
                               name="youtubelink"
                               value="{{ old('youtubelink') }}"
                               class="form-control @error('youtubelink') is-invalid @enderror"
                               placeholder="https://youtube.com/...">


                        @error('youtubelink')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- LinkedIn Link -->
                    <div class="form-group">

                        <label>
                            LinkedIn Link
                        </label>

                        <input type="url"
                               name="linkedinlink"
                               value="{{ old('linkedinlink') }}"
                               class="form-control @error('linkedinlink') is-invalid @enderror"
                               placeholder="https://linkedin.com/...">


                        @error('linkedinlink')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- WhatsApp Number -->
                    <div class="form-group">

                        <label>
                            WhatsApp Number
                        </label>

                        <input type="text"
                               name="whatsappnumber"
                               value="{{ old('whatsappnumber') }}"
                               class="form-control @error('whatsappnumber') is-invalid @enderror"
                               placeholder="9876543210">


                        @error('whatsappnumber')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- Address -->
                    <div class="form-group">

                        <label>
                            Address
                        </label>

                        <textarea name="address"
                                  class="form-control @error('address') is-invalid @enderror"
                                  rows="3"
                                  placeholder="Enter address">{{ old('address') }}</textarea>


                        @error('address')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- Map Link -->
                    <div class="form-group">

                        <label>
                            Map Link
                        </label>

                        <input type="url"
                               name="maplink"
                               value="{{ old('maplink') }}"
                               class="form-control @error('maplink') is-invalid @enderror"
                               placeholder="https://maps.google.com/...">


                        @error('maplink')

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

@endsection