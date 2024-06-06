<!-- Modal -->
<div class="modal fade" id="updateCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editCategoryForm" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="category-name">Category Name <span class="text-danger">*</span></label>
            <input type="text" id="name" name="name" class="form-control" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="category-description">Description</label>
            <textarea name="description" id="description" class="form-control" placeholder="Enter description"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label" for="category-image">Image</label>
            <input type="file" id="image" name="image" class="form-control" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary add_category">Update Category</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
