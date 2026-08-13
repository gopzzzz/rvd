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

                </div>

               
<div class="card">
    <div class="card-header">
        <h4 class="mb-0">Edit Contact</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('updatecontacts') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
          

            @if ($errors->any())

                <div class="alert alert-danger">

                    <strong>Please correct the following errors:</strong>

                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            @endif


            <!-- Small Caption -->
            <div class="form-group">
                <label>Small Caption</label>

                <input type="hidden" name="keyid" value="{{$contacts->id}}">

                <input type="text"
                       name="smallcaption"
                       value="{{ old('smallcaption', $contacts->smallcaption) }}"
                       class="form-control @error('smallcaption') is-invalid @enderror"
                       required>

                @error('smallcaption')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Broacher -->
            <div class="form-group">
                <label>Broacher</label>

                @if($contacts->broacher)
                    <div class="mb-2">
                        <a href="{{ asset('/'.$contacts->broacher) }}"
                           target="_blank"
                           class="btn btn-sm btn-info">
                            View Current Broacher
                        </a>
                    </div>
                @endif

                <input type="file"
                       name="broacher"
                       class="form-control @error('broacher') is-invalid @enderror"
                       accept=".pdf,.doc,.docx">

                <small class="text-muted">
                    Leave blank to keep the existing broacher.
                </small>

                @error('broacher')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Logo -->
            <div class="form-group">
                <label>Logo</label>

                @if($contacts->logo)
                    <div class="mb-2">
                        <img src="{{ asset('/'.$contacts->logo) }}"
                             width="100"
                             height="100"
                             style="object-fit: contain; border:1px solid #ddd; padding:5px;">
                    </div>
                @endif

                <input type="file"
                       name="logo"
                       class="form-control @error('logo') is-invalid @enderror"
                       accept=".jpg,.jpeg,.png,.webp">

                <small class="text-muted">
                    Leave blank to keep the existing logo.
                </small>

                @error('logo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Phone Number -->
            <div class="form-group">
                <label>Phone Number</label>

                <input type="text"
                       name="phonenumber"
                       value="{{ old('phonenumber', $contacts->phonenumber) }}"
                       class="form-control @error('phonenumber') is-invalid @enderror"
                       placeholder="9876543210">

                @error('phonenumber')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Email -->
            <div class="form-group">
                <label>Email</label>

                <input type="email"
                       name="mail"
                       value="{{ old('mail', $contacts->mail) }}"
                       class="form-control @error('mail') is-invalid @enderror"
                       placeholder="example@gmail.com">

                @error('mail')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Open Time -->
            <div class="form-group">
                <label>Open Time</label>

                <input type="time"
                       name="open"
                       value="{{ old('open', $contacts->open) }}"
                       class="form-control @error('open') is-invalid @enderror"
                       required>

                @error('open')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Close Time -->
            <div class="form-group">
                <label>Close Time</label>

                <input type="time"
                       name="close"
                       value="{{ old('close', $contacts->close) }}"
                       class="form-control @error('close') is-invalid @enderror"
                       required>

                @error('close')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Facebook Link -->
            <div class="form-group">
                <label>Facebook Link</label>

                <input type="url"
                       name="facebooklink"
                       value="{{ old('facebooklink', $contacts->facebooklink) }}"
                       class="form-control @error('facebooklink') is-invalid @enderror"
                       placeholder="https://facebook.com/...">

                @error('facebooklink')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Instagram Link -->
            <div class="form-group">
                <label>Instagram Link</label>

                <input type="url"
                       name="instagramlink"
                       value="{{ old('instagramlink', $contacts->instagramlink) }}"
                       class="form-control @error('instagramlink') is-invalid @enderror"
                       placeholder="https://instagram.com/...">

                @error('instagramlink')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- YouTube Link -->
            <div class="form-group">
                <label>YouTube Link</label>

                <input type="url"
                       name="youtubelink"
                       value="{{ old('youtubelink', $contacts->youtubelink) }}"
                       class="form-control @error('youtubelink') is-invalid @enderror"
                       placeholder="https://youtube.com/...">

                @error('youtubelink')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- LinkedIn Link -->
            <div class="form-group">
                <label>LinkedIn Link</label>

                <input type="url"
                       name="linkedinlink"
                       value="{{ old('linkedinlink', $contacts->linkedinlink) }}"
                       class="form-control @error('linkedinlink') is-invalid @enderror"
                       placeholder="https://linkedin.com/...">

                @error('linkedinlink')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- WhatsApp Number -->
            <div class="form-group">
                <label>WhatsApp Number</label>

                <input type="text"
                       name="whatsappnumber"
                       value="{{ old('whatsappnumber', $contacts->whatsappnumber) }}"
                       class="form-control @error('whatsappnumber') is-invalid @enderror"
                       placeholder="9876543210">

                @error('whatsappnumber')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Address -->
            <div class="form-group">
                <label>Address</label>

                <textarea name="address"
                          class="form-control @error('address') is-invalid @enderror"
                          rows="3"
                          placeholder="Enter address">{{ old('address', $contacts->address) }}</textarea>

                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Map Link -->
            <div class="form-group">
                <label>Map Link</label>

                <input type="url"
                       name="maplink"
                       value="{{ old('maplink', $contacts->maplink) }}"
                       class="form-control @error('maplink') is-invalid @enderror"
                       placeholder="https://maps.google.com/...">

                @error('maplink')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <!-- Buttons -->
            <div class="mt-4">

              

                <button type="submit"
                        class="btn btn-primary">
                    Update Contact
                </button>

            </div>

        </form>

    </div>
</div>





             
                </div>

            </div>

        </div>

    </section>

</div>





@endsection