 @extends('layouts.mainlayout')

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
    <h3 class="card-title">Bordered Table</h3>

</div>



<!-- Edit Admission Modal -->
<div class="modal fade" id="editAdmissionModal" tabindex="-1" role="dialog" aria-labelledby="editAdmissionModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <form id="editAdmissionForm" method="POST">

            @csrf
            @method('PUT')

            <div class="modal-content">

                <!-- Header -->
                <div class="modal-header">

                    <h5 class="modal-title" id="editAdmissionModalLabel">
                        Edit Admission
                    </h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">

                        <span>&times;</span>

                    </button>

                </div>

                <!-- Body -->
                <div class="modal-body">

                    <div class="row">

                        <!-- Name -->
<div class="col-md-6">
    <div class="form-group">
        <label>Name</label>

        <input type="text"
               name="name"
               id="edit_name"
               class="form-control @error('name') is-invalid @enderror"
               required>

        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- DOB -->
<div class="col-md-6">
    <div class="form-group">
        <label>Date of Birth</label>

        <input type="date"
               name="dob"
               id="edit_dob"
               class="form-control @error('dob') is-invalid @enderror"
               required>

        @error('dob')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Gender -->
<div class="col-md-6">
    <div class="form-group">
        <label>Gender</label>

        <input type="text"
               name="gender"
               id="edit_gender"
               class="form-control @error('gender') is-invalid @enderror"
               required>

        @error('gender')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Aadhaar -->
<div class="col-md-6">
    <div class="form-group">
        <label>Aadhaar Card</label>

        <input type="text"
               name="adharcard"
               id="edit_adharcard"
               class="form-control @error('adharcard') is-invalid @enderror"
               maxlength="12"
               minlength="12"
               pattern="[0-9]{12}"
               required>

        @error('adharcard')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Email -->
<div class="col-md-6">
    <div class="form-group">
        <label>Email</label>

        <input type="email"
               name="email"
               id="edit_email"
               class="form-control @error('email') is-invalid @enderror"
               required>

        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Phone -->
<div class="col-md-6">
    <div class="form-group">
        <label>Phone Number</label>

        <input type="text"
               name="phonenumber"
               id="edit_phonenumber"
               class="form-control @error('phonenumber') is-invalid @enderror"
               maxlength="10"
               minlength="10"
               pattern="[0-9]{10}"
               required>

        @error('phonenumber')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- 10th Percentage -->
<div class="col-md-6">
    <div class="form-group">
        <label>10th Percentage</label>

        <input type="number"
               name="tenthpercentage"
               id="edit_tenthpercentage"
               class="form-control @error('tenthpercentage') is-invalid @enderror"
               step="0.01"
               min="0"
               max="100"
               required>

        @error('tenthpercentage')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Higher School Name -->
<div class="col-md-6">
    <div class="form-group">
        <label>Higher School Name</label>

        <input type="text"
               name="higherschoolname"
               id="edit_higherschoolname"
               class="form-control @error('higherschoolname') is-invalid @enderror"
               required>

        @error('higherschoolname')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Higher Percentage -->
<div class="col-md-6">
    <div class="form-group">
        <label>Higher Percentage</label>

        <input type="number"
               name="higherpercentage"
               id="edit_higherpercentage"
               class="form-control @error('higherpercentage') is-invalid @enderror"
               step="0.01"
               min="0"
               max="100"
               required>

        @error('higherpercentage')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Higher Department -->
<div class="col-md-6">
    <div class="form-group">
        <label>Higher Department</label>

        <input type="text"
               name="higherdepartment"
               id="edit_higherdepartment"
               class="form-control @error('higherdepartment') is-invalid @enderror"
               required>

        @error('higherdepartment')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Program -->
<div class="col-md-6">
    <div class="form-group">
        <label>Program</label>

        <input type="text"
               name="program"
               id="edit_program"
               class="form-control @error('program') is-invalid @enderror"
               required>

        @error('program')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Hear About -->
<div class="col-md-6">
    <div class="form-group">
        <label>How did you hear about us?</label>

        <input type="text"
               name="hearabout"
               id="edit_hearabout"
               class="form-control @error('hearabout') is-invalid @enderror"
               required>

        @error('hearabout')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Address -->
<div class="col-md-12">
    <div class="form-group">
        <label>Address</label>

        <textarea name="address"
                  id="edit_address"
                  class="form-control @error('address') is-invalid @enderror"
                  rows="3"
                  required></textarea>

        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- City -->
<div class="col-md-4">
    <div class="form-group">
        <label>City</label>

        <input type="text"
               name="city"
               id="edit_city"
               class="form-control @error('city') is-invalid @enderror"
               required>

        @error('city')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- State -->
<div class="col-md-4">
    <div class="form-group">
        <label>State</label>

        <input type="text"
               name="state"
               id="edit_state"
               class="form-control @error('state') is-invalid @enderror"
               required>

        @error('state')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>


<!-- Pincode -->
<div class="col-md-4">
    <div class="form-group">
        <label>Pincode</label>

        <input type="text"
               name="pincode"
               id="edit_pincode"
               class="form-control @error('pincode') is-invalid @enderror"
               maxlength="6"
               minlength="6"
               pattern="[0-9]{6}"
               required>

        @error('pincode')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

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
                        Update Admission
                    </button>

                </div>

            </div>

        </form>

    </div>

</div>








              <!-- /.card-header -->
            <div class="card-body">
    <div class="table-responsive" style="width: 100%; overflow-x: auto;">

        <table class="table table-bordered table-hover" style="min-width: 1600px;">

            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                   
                    <th>Gender</th>
                    
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>10 % </th>
                   
                    <th>12 % </th>
                   
                    <th>Program</th>
                   
                    
                    <th style="width: 40px">ACTION</th>
                </tr>
            </thead>

            <tbody>
                    @foreach($admission as $key)
                    <tr>
                        <td>{{ $key->id }}</td>
                        <td>{{ $key->name }}</td>
                      
                        <td>{{ $key->gender }}</td>
                        
                        <td>{{ $key->email }}</td>
                        <td>{{ $key->phonenumber }}</td>
                        <td>{{ $key->tenthpercentage }}</td>
                      
                        <td>{{ $key->higherpercentage }}</td>
                      
                        <td>{{ $key->program }}</td>
                      


                        <td>
                    <button type="button"
        class="btn btn-sm btn-warning editAdmission"
        data-id="{{ $key->id }}"
        data-name="{{ $key->name }}"
        data-dob="{{ $key->dob }}"
        data-gender="{{ $key->gender }}"
        data-adharcard="{{ $key->adharcard }}"
        data-email="{{ $key->email }}"
        data-phonenumber="{{ $key->phonenumber }}"
        data-tenthpercentage="{{ $key->tenthpercentage }}"
        data-higherschoolname="{{ $key->higherschoolname }}"
        data-higherpercentage="{{ $key->higherpercentage }}"
        data-higherdepartment="{{ $key->higherdepartment }}"
        data-program="{{ $key->program }}"
        data-hearabout="{{ $key->hearabout }}"
        data-address="{{ $key->address }}"
        data-city="{{ $key->city }}"
        data-state="{{ $key->state }}"
        data-pincode="{{ $key->pincode }}">
    Edit
</button>
          </td>
            </tr>
                    @endforeach
</tbody>

            
                </table>
                </div>  





                        
              
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