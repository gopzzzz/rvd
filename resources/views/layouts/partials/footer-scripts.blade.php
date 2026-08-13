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




<script>

$(document).ready(function () {


    $('.editfaculty').click(function () {


        var id =
            $(this).data('id');

        var department =
            $(this).data('department');

        var name =
            $(this).data('name');

        var photo =
            $(this).data('photo');

        var occupation =
            $(this).data('occupation');

        var qualification =
            $(this).data('qualification');

        var experiance =
            $(this).data('experiance');

        var bio =
            $(this).data('bio');


        // Fill values

        $('#edit_id').val(id);

        $('#edit_department').val(department);

        $('#edit_name').val(name);

        $('#edit_occupation').val(occupation);

        $('#edit_qualification').val(qualification);

        $('#edit_experiance').val(experiance);

        $('#edit_bio').val(bio);


        // Photo Preview

        if(photo) {

            var photoUrl =
                '{{ asset("") }}' + photo;


            $('#previewPhoto')
                .attr('src', photoUrl)
                .show();


            $('#previewPhotoLink')
                .attr('href', photoUrl)
                .show();

        }
        else {

            $('#previewPhoto').hide();

            $('#previewPhotoLink').hide();

        }


    });


});

</script>



@if($errors->any() && old('_form') == 'create')

<script>

$(document).ready(function () {

    $('#newFacultyModal').modal('show');

});

</script>

@endif



<!-- ====================================================== -->
<!-- DELETE CONFIRMATION -->
<!-- ====================================================== -->

<script>

$(document).ready(function () {


    $('.delete-upload-form').on('submit', function(e) {


        var confirmed = confirm(
            'Are you sure you want to delete this photo?'
        );


        if(!confirmed) {

            e.preventDefault();

            return false;

        }


    });


});

</script>



<!-- ====================================================== -->
<!-- IMAGE PREVIEW -->
<!-- ====================================================== -->

<script>

$(document).ready(function () {


    $('#photos').on('change', function () {


        $('#imagePreview').html('');


        var files = this.files;


        if(files && files.length > 0) {


            Array.from(files).forEach(function(file) {


                if(file.type.startsWith('image/')) {


                    var reader =
                        new FileReader();


                    reader.onload = function(e) {


                        var image =
                            $('<img>');


                        image.attr(
                            'src',
                            e.target.result
                        );


                        image.addClass(
                            'preview-image'
                        );


                        $('#imagePreview')
                            .append(image);


                    };


                    reader.readAsDataURL(file);


                }


            });


        }
        else {


            $('#imagePreview').html(
                '<span class="preview-empty">Selected images will appear here.</span>'
            );


        }


    });


});

</script>



<!-- ====================================================== -->
<!-- REOPEN MODAL AFTER VALIDATION ERROR -->
<!-- ====================================================== -->

@if($errors->any() && old('_form') == 'create')

<script>

$(document).ready(function () {

    $('#newRecordModal').modal('show');

});

</script>

@endif