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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form action="{{ route('course.store') }}" method="POST">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="newRecordModalLabel">Add New Course</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" name="coursename" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Overview</label>
                        <textarea name="overview" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Eligibility</label>
                        <textarea name="eligibility" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Duration</label>
                        <input type="text" name="duration" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Curriculum</label>
                        <textarea name="Curriculum" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Opportunities</label>
                        <textarea name="Opportunities" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Certifications</label>
                        <textarea name="Certifications" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Values</label>
                        <textarea name="values" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Placement Support</label>
                        <textarea name="placementsupport" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Fees</label>
                        <input type="number" name="fees" class="form-control" required>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>

                    <button type="submit" class="btn btn-primary">
                        Save Course
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Course Name</th>
                      <th>Over View</th>
                       <th>Eligibility</th>
                       <th>Duration</th>
                       <th>Curriculum</th>
                       <th>Opportunities</th>
                        <th>Certifications</th>
                        <th>Values</th>
                        <th>Placement Support</th>
                        <th>Fees</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
            
                  @foreach($courses as $key)
                      
                    <tr>
                      <td>{{ $key->id }}</td>
                      <td>{{$key->coursename}}</td>
                      <td>{{$key->overview}}</td>
                      <td>{{$key->eligibility}}</td>
                      <td>{{$key->duration}}</td>

                      <td>{{$key->curriculum}}</td>
                      <td>{{$key->opportunities}}</td>
                      <td>{{$key->certifications}}</td>
                      <td>{{$key->values}}</td>
                      <td>{{$key->placementsupport}}</td>
                      <td>{{$key->fees}}</td>

                      
                      <td>

                      <button type="button"
            class="btn btn-sm btn-primary editaboutus"
            data-id="{{ $key->id }}">
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