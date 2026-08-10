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
<script>
$(document).ready(function(){

    $('.editEvent').click(function(){

        var id = $(this).data('id');

        $('#edit_type').val($(this).data('type'));
        $('#edit_title').val($(this).data('title'));
        $('#edit_description').val($(this).data('description'));
        $('#edit_date').val($(this).data('date'));

        $('#editForm').attr('action','/events/'+id);

        $('#editEventModal').modal('show');

    });

});
</script>



<script>
$(document).ready(function () {

    // Edit Admission Button
    $(document).on('click', '.editAdmission', function () {

        var id = $(this).data('id');

        $('#edit_name').val($(this).data('name'));
        $('#edit_dob').val($(this).data('dob'));
        $('#edit_gender').val($(this).data('gender'));
        $('#edit_adharcard').val($(this).data('adharcard'));
        $('#edit_email').val($(this).data('email'));
        $('#edit_phonenumber').val($(this).data('phonenumber'));
        $('#edit_tenthpercentage').val($(this).data('tenthpercentage'));
        $('#edit_higherschoolname').val($(this).data('higherschoolname'));
        $('#edit_higherpercentage').val($(this).data('higherpercentage'));
        $('#edit_higherdepartment').val($(this).data('higherdepartment'));
        $('#edit_program').val($(this).data('program'));
        $('#edit_hearabout').val($(this).data('hearabout'));
        $('#edit_address').val($(this).data('address'));
        $('#edit_city').val($(this).data('city'));
        $('#edit_state').val($(this).data('state'));
        $('#edit_pincode').val($(this).data('pincode'));

        // Set update URL
        $('#editAdmissionForm').attr(
            'action',
            '/admission/' + id
        );

        // Open Edit Modal
        $('#editAdmissionModal').modal('show');
    });

});
</script>