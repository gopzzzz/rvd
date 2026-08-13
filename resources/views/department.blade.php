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
    <h3 class="card-title">Department Table</h3>

    <button type="button" class="btn btn-primary btn-sm"
            data-toggle="modal"
            data-target="#newRecordModal">
        <i class="fas fa-plus"></i> New Record
    </button>
</div>


<div class="modal fade" id="newRecordModal" tabindex="-1" role="dialog" aria-labelledby="newRecordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
         <form action="{{ route('department.store') }}" method="POST">
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

    <input type="text"
           name="name"
           class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name') }}"
           required>

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
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

<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <form id="editForm" method="POST">
            @csrf

            <div class="modal-content">

                <div class="modal-header">
                    <h4>Edit Department</h4>
                </div>

                <div class="modal-body">

                    <input type="hidden" id="edit_id">

                    <div class="form-group">
                        <label>Department Name</label>
                        <input
                            type="text"
                            name="name"
                            id="edit_name"
                            class="form-control">
                    </div>

                </div>

                <div class="modal-footer">

                    <button class="btn btn-success">
                        Update
                    </button>

                </div>

            </div>
        </form>
    </div>
</div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      
                      <th>name</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                
                  <tbody>
@foreach($department as $index => $key)
<tr>
    <td>{{ $index + 1 }}</td>

    <td>{{ $key->name }}</td>

    <td>
        <button
    class="btn btn-primary btn-sm editDepartment"
    data-id="{{ $key->id }}">
    Edit
</button>
    </td>
</tr>
@endforeach
</tbody>

                </table>
                
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