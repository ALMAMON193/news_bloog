<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div class="modal fade" id="updateBloog" tabindex="-1" aria-labelledby="bloogEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bloogEditLabel">Edit Bloog</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateBloogForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="bloogId" name="id">
                    <div class="mb-3">
                        <label class="form-label" for="editCategory">Category <span class="text-danger">*</span></label>
                        <select id="editCategory_id" name="category_id" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                    {{ $category->id == old('category_id', $post->category_id ?? '') ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="editAuthor">Author <span class="text-danger">*</span></label>
                        <input type="text" id="editAuthor" name="author" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="editTitle">Title <span class="text-danger">*</span></label>
                        <input type="text" id="editTitle" name="title" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="editShortDescription">Short Description<span class="text-danger">*</span></label>
                        <input type="text" id="editShortDescription" name="short_description" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="editLongDescription">Long Description<span class="text-danger">*</span></label>
                        <textarea id="editLongDescription" name="long_description" cols="10" rows="30" class="form-control" placeholder="Enter Long description here"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="editImage">Image<span class="text-danger">*</span></label>
                        <input type="file" id="editImage" name="image" class="form-control" />
                        <br>
                        <img id="editImagePreview" src="" height="100px" width="100px" alt="Image Preview" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
                <div id="responseMessage"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
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
            for (instance in CKEDITOR.instances) {
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
                success: function (response) {
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
    });
</script>
