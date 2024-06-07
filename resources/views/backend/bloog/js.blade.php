<!-- Add Category Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle Add Category Form Submission
        $('#addBloogForm').on('submit', function(e) {
            e.preventDefault();

            // Update the textarea with the CKEditor data before sending the form
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            // Create FormData object to send the form data
            let formData = new FormData(this);

            // Send AJAX request
            $.ajax({
                url: "{{ route('create.bloog') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Display success message
                    $('#responseMessage').html('<div class="alert alert-success">' +
                        response.message + '</div>');

                    // Reset form and CKEditor
                    $('#addBloogForm')[0].reset();
                    for (instance in CKEDITOR.instances) {
                        CKEDITOR.instances[instance].setData('');
                    }

                    // Close modal
                    $('#addBloog').modal('hide');

                    // Reload the datatable (assuming you're using a datatable)
                    $('#selection-datatable').load(location.href + ' #selection-datatable');
                },
                error: function(response) {
                    // Display error messages
                    let errors = response.responseJSON.errors;
                    let errorMessage = '';
                    $.each(errors, function(key, value) {
                        errorMessage += '<div class="alert alert-danger">' + value[
                            0] + '</div>';
                    });
                    $('#responseMessage').html(errorMessage);
                }
            });
        });
        
        
        //     // Delete Category
        // $(document).on('click', '.deleteCategoryBtn', function() {
        //     var categoryId = $(this).data('id');
        //     Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             $.ajax({
        //                 url: "{{ route('delete.category', ['id' => ':id']) }}".replace(':id', categoryId),
        //                 type: 'DELETE',
        //                 data: {
        //                     _token: $('meta[name="csrf-token"]').attr('content')
        //                 },
        //                 success: function(response) {
        //                     Swal.fire(
        //                         'Deleted!',
        //                         'Your category has been deleted.',
        //                         'success'
        //                     )
        //                     $('#selection-datatable').load(location.href + ' #selection-datatable');
        //                 },
        //                 error: function(response) {
        //                     Swal.fire(
        //                         'Error!',
        //                         'There was an error deleting the category.',
        //                         'error'
        //                     )
        //                 }
        //             });
        //         }
        //     });
        // });
    });

    document.addEventListener('DOMContentLoaded', function() {
        CKEDITOR.replace('long_description');
    });
</script>
