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

    <button type="button" class="btn btn-primary btn-sm"
            data-toggle="modal"
            data-target="#newRecordModal">
        <i class="fas fa-plus"></i> New Record
    </button>
</div>


<div class="modal fade" id="newRecordModal" tabindex="-1" role="dialog" aria-labelledby="newRecordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admission.store') }}" method="POST">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newRecordModalLabel">Add New Record</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                   <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" required>
</div>

<div class="form-group">
    <label>DOB</label>
    <input type="date" name="dob" class="form-control" required>
</div>

<div class="form-group">
    <label>Gender</label>
    <input type="text" name="gender" class="form-control" required>
</div>

<div class="form-group">
    <label>Aadhaar Card</label>
    <input type="text" name="adharcard" class="form-control" required>
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
</div>

<div class="form-group">
    <label>Phone Number</label>
    <input type="text" name="phonenumber" class="form-control" required>
</div>

<div class="form-group">
    <label>10th Percentage</label>
    <input type="number"
           name="tenthpercentage"
           class="form-control"
           step="0.01"
           min="0"
           max="100"
           required>
</div>

<div class="form-group">
    <label>Higher School Name</label>
    <input type="text" name="higherschoolname" class="form-control" required>
</div>

<div class="form-group">
    <label>Higher Percentage</label>
    <input type="number"
           name="higherpercentage"
           class="form-control"
           step="0.01"
           min="0"
           max="100"
           required>
</div>

<div class="form-group">
    <label>Higher Department</label>
    <input type="text" name="higherdepartment" class="form-control" required>
</div>

<div class="form-group">
    <label>Program</label>
    <input type="text" name="program" class="form-control" required>
</div>

<div class="form-group">
    <label>How did you hear about us?</label>
    <input type="text" name="hearabout" class="form-control" required>
</div>

<div class="form-group">
    <label>Address</label>
    <textarea name="address" class="form-control" required></textarea>
</div>

<div class="form-group">
    <label>City</label>
    <input type="text" name="city" class="form-control" required>
</div>

<div class="form-group">
    <label>State</label>
    <input type="text" name="state" class="form-control" required>
</div>

<div class="form-group">
    <label>Pincode</label>
    <input type="text" name="pincode" class="form-control" required>
</div>
                    








































                    


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>

                    <button type="submit" class="btn btn-primary">
                        Save Record
                    </button>
                </div>
            </div>
        </form>
    </div>
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
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- DOB -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date of Birth</label>

                                <input type="date"
                                       name="dob"
                                       id="edit_dob"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>

                                <input type="text"
                                       name="gender"
                                       id="edit_gender"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- Aadhaar -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Aadhaar Card</label>

                                <input type="text"
                                       name="adharcard"
                                       id="edit_adharcard"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>

                                <input type="email"
                                       name="email"
                                       id="edit_email"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>

                                <input type="text"
                                       name="phonenumber"
                                       id="edit_phonenumber"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- 10th Percentage -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>10th Percentage</label>

                                <input type="number"
                                       name="tenthpercentage"
                                       id="edit_tenthpercentage"
                                       class="form-control"
                                       step="0.01"
                                       min="0"
                                       max="100"
                                       required>
                            </div>
                        </div>

                        <!-- Higher School Name -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Higher School Name</label>

                                <input type="text"
                                       name="higherschoolname"
                                       id="edit_higherschoolname"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- Higher Percentage -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Higher Percentage</label>

                                <input type="number"
                                       name="higherpercentage"
                                       id="edit_higherpercentage"
                                       class="form-control"
                                       step="0.01"
                                       min="0"
                                       max="100"
                                       required>
                            </div>
                        </div>

                        <!-- Higher Department -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Higher Department</label>

                                <input type="text"
                                       name="higherdepartment"
                                       id="edit_higherdepartment"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- Program -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Program</label>

                                <input type="text"
                                       name="program"
                                       id="edit_program"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- Hear About -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>How did you hear about us?</label>

                                <input type="text"
                                       name="hearabout"
                                       id="edit_hearabout"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>

                                <textarea name="address"
                                          id="edit_address"
                                          class="form-control"
                                          rows="3"
                                          required></textarea>
                            </div>
                        </div>

                        <!-- City -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City</label>

                                <input type="text"
                                       name="city"
                                       id="edit_city"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- State -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>State</label>

                                <input type="text"
                                       name="state"
                                       id="edit_state"
                                       class="form-control"
                                       required>
                            </div>
                        </div>

                        <!-- Pincode -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Pincode</label>

                                <input type="text"
                                       name="pincode"
                                       id="edit_pincode"
                                       class="form-control"
                                       maxlength="6"
                                       required>
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
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>name</th>
                      <!-- <th>dob</th> -->
                      <th>gender</th>
                      <!-- <th>adharcard</th> -->
                      <th>email</th>
                      <th>phonenumber</th>
                      <th>10 %</th>
                      <!-- <th>higherschoolname</th> -->
                      <th>12 %</th>
                      <!-- <th>higherdepartment</th> -->
                      <th>program</th>
                      <!-- <th>hearabout</th> -->
                      <!-- <th>address</th>
                      <th>city</th>
                      <th>state</th>
                      <th>pincode</th> -->

                      <th style="width: 40px">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($admission as $key)
                    <tr>
                        <td>{{ $key->id }}</td>
                        <td>{{ $key->name }}</td>
                        <!-- <td>{{ $key->dob }}</td> -->
                        <td>{{ $key->gender }}</td>
                        <!-- <td>{{ $key->adharcard }}</td> -->
                        <td>{{ $key->email }}</td>
                        <td>{{ $key->phonenumber }}</td>
                        <td>{{ $key->tenthpercentage }}</td>
                        <!-- <td>{{ $key->higherschoolname }}</td> -->
                        <td>{{ $key->higherpercentage }}</td>
                        <!-- <td>{{ $key->higherdepartment }}</td> -->
                        <td>{{ $key->program }}</td>
                        <!-- <td>{{ $key->hearabout }}</td> -->
                        <!-- <td>{{ $key->address }}</td>
                        <td>{{ $key->city }}</td>
                        <td>{{ $key->state }}</td>
                        <td>{{ $key->pincode }}</td> -->


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