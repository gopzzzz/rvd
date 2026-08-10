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

    $('.editnews').click(function(){

        $('#edit_id').val($(this).data('id'));

        $('#edit_title').val($(this).data('title'));

        $('#edit_description').val($(this).data('description'));

        $('#previewPhoto').attr(
            'src',
            '/' + $(this).data('photo')
        );

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
