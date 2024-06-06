
<!-- Add Category Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        // Handle Add Category Form Submission
        $('#addCategoryForm').on('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('add.category') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                    $('#addCategoryForm')[0].reset();
                    $('#addCategory').modal('hide');
                    $('#selection-datatable').load(location.href + ' #selection-datatable');
                },
                error: function (response) {
                    let errors = response.responseJSON.errors;
                    let errorMessage = '';
                    $.each(errors, function (key, value) {
                        errorMessage += '<div class="alert alert-danger">' + value[0] + '</div>';
                    });
                    $('#responseMessage').html(errorMessage);
                }
            });
        });

        // Show Edit Modal with Current Data
        $(document).on('click', '.editCategoryBtn', function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var description = $(this).data('description');
            var image = $(this).data('image');

            $('#updateCategoryForm #categoryId').val(id);
            $('#updateCategoryForm #editName').val(name);
            $('#updateCategoryForm #editDescription').val(description);
            $('#updateCategoryForm #editImagePreview').attr('src', '{{ asset('uploads/category_image') }}/' + image);

            $('#updateCategory').modal('show');
        });

        // Update Category Form Submission
        $('#updateCategoryForm').on('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);
            let categoryId = $('#categoryId').val();

            $.ajax({
                url: "{{ route('update.category', ['id' => ':id']) }}".replace(':id', categoryId),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    $('#responseMessage').html('<div class="alert alert-success">' + response.message + '</div>');
                    $('#updateCategoryForm')[0].reset();
                    $('#updateCategory').modal('hide');
                    $('#selection-datatable').load(location.href + ' #selection-datatable');
                },
                error: function (response) {
                    let errors = response.responseJSON.errors;
                    let errorMessage = '';
                    $.each(errors, function (key, value) {
                        errorMessage += '<div class="alert alert-danger">' + value[0] + '</div>';
                    });
                    $('#responseMessage').html(errorMessage);
                }
            });
        });

        // Delete Category
    $(document).on('click', '.deleteCategoryBtn', function() {
        var categoryId = $(this).data('id');
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
                    url: "{{ route('delete.category', ['id' => ':id']) }}".replace(':id', categoryId),
                    type: 'DELETE',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire(
                            'Deleted!',
                            'Your category has been deleted.',
                            'success'
                        )
                        $('#selection-datatable').load(location.href + ' #selection-datatable');
                    },
                    error: function(response) {
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the category.',
                            'error'
                        )
                    }
                });
            }
        });
    });
    });
</script>