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

<div class="modal fade"
     id="newRecordModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <form action="{{ route('createdownloads') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title">Add New Record</h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label>Document Name</label>

                        <input type="text"
                               name="documentname"
                               class="form-control"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Documents</label>

                        <input type="file"
                               name="documents"
                               class="form-control"
                               accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                               required>
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

<div class="modal fade"
     id="editDownloadsModal"
     tabindex="-1"
     role="dialog"
     aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <form action="{{ route('updatedownloads') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="modal-header">
                    <h5 class="modal-title">Edit Download</h5>

                    <button type="button"
                            class="close"
                            data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <input type="hidden"
                           name="id"
                           id="edit_id">

                    <input type="hidden"
                           name="current_document"
                           id="current_document">

                    <div class="form-group">
                        <label>Document Name</label>

                        <input type="text"
                               name="documentname"
                               id="edit_documentname"
                               class="form-control"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Current Document</label>

                        <div>
                            <a href="#"
                               id="current_document_link"
                               target="_blank">
                                View Current Document
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Replace Document</label>

                        <input type="file"
                               name="documents"
                               class="form-control"
                               accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
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
                        Update
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
                      <th>Document Name</th>
                      <th>Documents</th>
                       <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                 <tbody>
    @foreach($downloads as $key)
        <tr>
            <td>{{ $key->id }}</td>

            <td>{{ $key->documentname }}</td>

            <td>
                <a href="{{ asset($key->documents) }}"
                   target="_blank">
                    View Document
                </a>
            </td>

           <td>
    <button type="button"
            class="btn btn-sm btn-primary editdownloads"
            data-id="{{ $key->id }}"
            data-documentname="{{ $key->documentname }}"
            data-documents="{{ $key->documents }}">
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