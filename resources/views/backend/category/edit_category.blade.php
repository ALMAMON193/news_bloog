<!-- Edit Category Modal -->
<div class="modal fade" id="updateCategory" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="updateModalLabel">Edit Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateCategoryForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="categoryId" name="id">
                    <div class="mb-3">
                        <label class="form-label" for="editName">Category Name <span
                                class="text-danger">*</span></label>
                        <input type="text" id="editName" name="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="editDescription">Description</label>
                        <textarea name="description" id="editDescription" class="form-control" placeholder="Enter description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="editImage">Image</label>
                        <input type="file" id="editImage" name="image" class="form-control" />
                        <br>
                        <img id="editImagePreview" src="" height="100px" width="100px" alt="Image Preview" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="updateCategoryBtn">Update Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
