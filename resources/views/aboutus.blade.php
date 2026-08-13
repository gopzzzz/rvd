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



                        </div>


                        <!-- Table -->

                     


              <!-- /.card-header -->
             <div class="card-body">

    @if($aboutus)
<form action="{{ route('updateaboutus') }}" method="POST">
    @csrf

            <div class="row">

                <div class="col-md-12 mb-3">
                    <label class="form-label">About Us</label>
                    <input type="hidden" name="keyid" value="{{$aboutus->id}}">
                    <textarea name="about"
                              class="form-control about-field"
                              rows="5"
                              disabled>{{ $aboutus->about }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Vision</label>
                    <textarea name="vision"
                              class="form-control about-field"
                              rows="4"
                              disabled>{{ $aboutus->vision }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Mission</label>
                    <textarea name="mission"
                              class="form-control about-field"
                              rows="4"
                              disabled>{{ $aboutus->mission }}</textarea>
                </div>

                  <div class="col-md-12 mb-3">
                    <h2>Director & Principal Message</h3>
                  </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Principal Name</label>
                    <input type="text" name="principal_name" class="form-control" value="{{ $aboutus->principal_name }}">
                   
                </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label">Director Name</label>
                    <input type="text" name="direct_name" class="form-control" value="{{ $aboutus->direct_name }}">
                   
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Principal Message</label>
                    <textarea name="principalmsg"
                              class="form-control about-field"
                              rows="4"
                              disabled>{{ $aboutus->principalmsg }}</textarea>
                </div>

                

                <div class="col-md-6 mb-3">
                    <label class="form-label">Director Message</label>
                    <textarea name="directormsg"
                              class="form-control about-field"
                              rows="4"
                              disabled>{{ $aboutus->directormsg }}</textarea>
                </div>
<!-- 
                <div class="col-md-6 mb-3">
                    <label class="form-label">Accreditation</label>
                    <textarea name="accrediation"
                              class="form-control about-field"
                              rows="4"
                              disabled>{{ $aboutus->accrediation }}</textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Infrastructure</label>
                    <textarea name="infrastructure"
                              class="form-control about-field"
                              rows="4"
                              disabled>{{ $aboutus->infrastructure }}</textarea>
                </div> -->

                <div class="col-md-12 mb-3">
                    <label class="form-label">Campus Video</label>
                    <input type="text"
                           name="campusvideo"
                           class="form-control about-field"
                           value="{{ $aboutus->campusvideo }}"
                           disabled>
                </div>

                <div class="col-md-12">

                    <!-- Edit Button -->
                    <button type="button"
                            id="editBtn"
                            class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit
                    </button>

                    <!-- Update Button -->
                    <button type="submit"
                            id="updateBtn"
                            class="btn btn-success d-none">
                        <i class="fas fa-save"></i> Update
                    </button>

                    <!-- Cancel Button -->
                    <button type="button"
                            id="cancelBtn"
                            class="btn btn-secondary d-none">
                        Cancel
                    </button>

                    <!-- VISION -->


                <!-- Modal Footer -->

               


            </form>

        </div>

    </div>

</div>



<!-- ======================================================= -->
<!-- AUTOMATICALLY OPEN MODAL WHEN VALIDATION FAILS -->
<!-- ======================================================= -->




            </div>

        </form>

    @else

        <div class="alert alert-warning">
            About Us details not found.
        </div>

    @endif

</div>
              </div>
              <!-- /.card-body -->
            
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
        <!-- /.row -->
       
        <!-- /.row -->
     
        <!-- /.row -->
       
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 @endsection

<script>
document.addEventListener('DOMContentLoaded', function () {

    const editBtn = document.getElementById('editBtn');
    const updateBtn = document.getElementById('updateBtn');
    const cancelBtn = document.getElementById('cancelBtn');

    const fields = document.querySelectorAll('.about-field');

    editBtn.addEventListener('click', function () {

        fields.forEach(function (field) {
            field.disabled = false;
        });

        editBtn.classList.add('d-none');
        updateBtn.classList.remove('d-none');
        cancelBtn.classList.remove('d-none');
    });

    cancelBtn.addEventListener('click', function () {

        location.reload();

    });

});
</script>
