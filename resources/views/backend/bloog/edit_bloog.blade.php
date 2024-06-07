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

