<!-- resources/views/backend/category/add_category.blade.php -->
<div class="modal fade" id="category" tabindex="-1" aria-labelledby="categoryLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="categoryLabel">Add Category</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <!-- Add your form here -->
              <form id="addCategoryForm" enctype="multipart/form-data">
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
                  <button type="submit" class="btn btn-primary add_category">Save Category</button>
              </div>
              </form>
              <div id="responseMessage"></div>
          </div>
     
      </div>
  </div>
</div>
