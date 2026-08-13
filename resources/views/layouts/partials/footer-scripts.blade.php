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



<!-- OPEN ADD MODAL AUTOMATICALLY WHEN VALIDATION FAILS -->
<!-- ===================================================== -->

@if ($errors->any())

<script>

    $(document).ready(function () {

        $('#newRecordModal').modal('show');

    });

</script>

@endif



<!-- ===================================================== -->
<!-- EDIT BUTTON SCRIPT -->
<!-- ===================================================== -->

<script>
$(document).ready(function () {

    $('.editnews').click(function () {

        var id = $(this).data('id');
        var type = $(this).data('type');
        var title = $(this).data('title');
        var description = $(this).data('description');
        var photo = $(this).data('photo');
        var date = $(this).data('date');

        $('#edit_id').val(id);

        // These two lines fix your problem
        $('#edit_type').val(type);
        $('#edit_date').val(date);

        $('#edit_title').val(title);
        $('#edit_description').val(description);

        if (photo) {
            $('#previewPhoto')
                .attr('src', '{{ asset("") }}' + photo)
                .show();
        } else {
            $('#previewPhoto').hide();
        }

    });

});
</script>

<script>

$(document).ready(function () {

    $('#editUploadModal').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget);

        var id = button.data('id');

        var status = button.data('status');

        var photo = button.data('photo');

        var modal = $(this);


        // Fill ID
        modal.find('#edit_id').val(id);


        // Fill Status
        modal.find('#edit_status').val(status);


        // Show Current Photo
        if (photo) {

            var photoUrl = "{{ asset('') }}" + photo;

            modal.find('#edit_photo_preview')
                 .attr('src', photoUrl)
                 .show();

            modal.find('#current_photo_link')
                 .attr('href', photoUrl)
                 .show();

        } else {

            modal.find('#edit_photo_preview').hide();

            modal.find('#current_photo_link').hide();

        }

    });

});

</script>


<script>
$(document).on('click', '.editCourse', function () {

    var id = $(this).data('id');

    $('#edit_coursename').val($(this).data('coursename'));
    $('#edit_coursefullname').val($(this).data('coursefullname'));
    $('#edit_eligibility').val($(this).data('eligibility'));
    $('#edit_duration').val($(this).data('duration'));
    $('#edit_CoreObjectives').val($(this).data('coreobjectives'));
    $('#edit_Opportunities').val($(this).data('opportunities'));
    $('#edit_Highlights').val($(this).data('highlights'));
    $('#edit_intake').val($(this).data('intake'));
    $('#edit_fees').val($(this).data('fees'));
     $('#edit_overview').val($(this).data('overview'));

    $('#editCourseForm').attr(
        'action',
        '/course/update/' + id
    );

    $('#editCourseModal').modal('show');

});
</script>




<!-- ================================================= -->
<!-- JAVASCRIPT -->
<!-- ================================================= -->
@if ($errors->any() && old('_form') == 'create')

<script>

$(document).ready(function () {

    $('.editSemester').on('click', function () {

        var id = $(this).data('id');
        var semester = $(this).data('semester');
        var subjects = $(this).data('subjects');

        // Fill edit form
        $('#edit_semester').val(semester);
        $('#edit_subjects').val(subjects);

        // Set update URL
        $('#editSemesterForm').attr(
            'action',
            "{{ url('/semester-details/update') }}/" + id
        );

        // Open modal
        $('#editSemesterModal').modal('show');
    $('#newContactModal').modal('show');

});

</script>

@endif

<script>

$(document).ready(function () {

    $('.editfaq').click(function () {

        $('#edit_id').val(
            $(this).data('id')
        );

        $('#edit_question').val(
            $(this).data('question')
        );

        $('#edit_answer').val(
            $(this).data('answer')
        );

    });

});

</script>



<!-- REOPEN CREATE MODAL ONLY ON CREATE VALIDATION ERROR -->

@if($errors->any() && old('_form') == 'create')

<script>

$(document).ready(function () {

    $('#newFaqModal').modal('show');

});

</script>


















@endif

