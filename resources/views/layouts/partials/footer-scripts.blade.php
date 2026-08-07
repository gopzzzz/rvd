<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>

    <script>

$('.editDepartment').click(function(){

    var id = $(this).data('id');

    $.get('/department/edit/' + id,function(data){

        $('#edit_name').val(data.name);

        $('#editForm').attr('action','/department/update/'+id);

        $('#editModal').modal('show');

    });

});

<script>
$(document).on('click', '.editdownloads', function () {

    let id = $(this).data('id');
    let documentName = $(this).data('documentname');
    let documentPath = $(this).data('documents');

    $('#edit_id').val(id);
    $('#edit_documentname').val(documentName);
    $('#current_document').val(documentPath);

    $('#current_document_link')
        .attr('href', "{{ asset('') }}" + documentPath);

    $('#editDownloadsModal').modal('show');
});
</script>