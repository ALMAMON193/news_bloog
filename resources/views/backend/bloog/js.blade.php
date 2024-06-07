<!-- Add Category Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle Add Category Form Submission
        $('#addBloogForm').on('submit', function(e) {
            e.preventDefault();

            // Update the textarea with the CKEditor data before sending the form
            for (var instance in CKEDITOR.instances) {
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
                    $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');

                    // Reset form and CKEditor
                    $('#addBloogForm')[0].reset();
                    for (var instance in CKEDITOR.instances) {
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
                        errorMessage += '<div class="alert alert-danger">' + value[0] + '</div>';
                    });
                    $('#responseMessage').html(errorMessage);
                }
            });
        });

        // Function to initialize CKEditor
        function initializeCKEditor() {
            if (CKEDITOR.instances['editLongDescription']) {
                CKEDITOR.instances['editLongDescription'].destroy(true);
            }
            CKEDITOR.replace('editLongDescription');
        }

        // Handle the click event on the edit button
        $('.editBloogBtn').on('click', function() {
            // Clear previous errors and response messages
            $('#responseMessage').html('');

            var id = $(this).data('id');
            var title = $(this).data('title');
            var author = $(this).data('author');
            var category_id = $(this).data('category_id');
            var short_description = $(this).data('short_description');
            var long_description = $(this).data('long_description');
            var image = $(this).data('image');

            // Populate the modal with the data
            $('#bloogId').val(id);
            $('#editTitle').val(title);
            $('#editAuthor').val(author);
            $('#editCategory_id').val(category_id);
            $('#editShortDescription').val(short_description);
            $('#editImagePreview').attr('src', '{{ asset('uploads/bloog_images') }}/' + image);

            // Set CKEditor's content
            if (CKEDITOR.instances['editLongDescription']) {
                CKEDITOR.instances['editLongDescription'].setData(long_description);
            } else {
                $('#editLongDescription').val(long_description);
            }

            // Show the modal
            $('#updateBloog').modal('show');
        });

        // Initialize CKEditor when the modal is shown
        $('#updateBloog').on('shown.bs.modal', function() {
            initializeCKEditor();
        });

        // Destroy CKEditor and reset form when the modal is hidden
        $('#updateBloog').on('hidden.bs.modal', function() {
            // Reset the form
            $('#updateBloogForm')[0].reset();
            $('#editImagePreview').attr('src', '');

            // Destroy CKEditor instance
            if (CKEDITOR.instances['editLongDescription']) {
                CKEDITOR.instances['editLongDescription'].destroy(true);
            }
        });

        // Handle form submission
        $('#updateBloogForm').off('submit').on('submit', function(e) {
            e.preventDefault();

            // Ensure CKEditor data is updated in the textarea
            for (var instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            let formData = new FormData(this);
            let bloogId = $('#bloogId').val();

            $.ajax({
                url: "{{ route('update.bloog', ['id' => ':id']) }}".replace(':id', bloogId),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                    $('#updateBloogForm')[0].reset();
                    $('#updateBloog').modal('hide');
                    $('#selection-datatable').load(location.href + ' #selection-datatable');
                },
                error: function(response) {
                    let errors = response.responseJSON.errors;
                    let errorMessage = '';
                    $.each(errors, function(key, value) {
                        errorMessage += '<div class="alert alert-danger">' + value[0] + '</div>';
                    });
                    $('#responseMessage').html(errorMessage);
                }
            });
        });

        // Handle delete button click
        $('.deleteBloogBtn').on('click', function() {
            var bloogId = $(this).data('id');
            var deleteUrl = "{{ route('delete.bloog', ['id' => ':id']) }}".replace(':id', bloogId);

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: deleteUrl,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'Your bloog has been deleted.',
                                'success'
                            )
                            $('#selection-datatable').load(location.href + ' #selection-datatable');
                        },
                        error: function(response) {
                            Swal.fire(
                                'Error!',
                                'There was a problem deleting the bloog.',
                                'error'
                            )
                        }
                    });
                }
            })
        });

        // Initialize CKEditor for long description on document ready
        CKEDITOR.replace('long_description');
    });
</script>
