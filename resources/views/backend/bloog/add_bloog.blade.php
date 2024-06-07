
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div class="modal fade" id="addBloog" tabindex="-1" aria-labelledby="bloogLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg ">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="bloogLabel">Add Bloog</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <!-- Add your form here -->
              <form id="addBloogForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="category">Category <span class="text-danger">*</span></label>
                  <select id="category_id" name="category_id" class="form-control">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                     
                  </select>
              </div>
               
                <div class="mb-3">
                <label class="form-label" for="Title">Title <span class="text-danger">*</span></label>
                <input type="text" id="title" name="title" class="form-control" />
                </div>
                <div class="mb-3">
                <label class="form-label" for="category">Tag <span class="text-danger">*</span></label>
                <input type="text" id="tags" name="tags" value="dfddf,dfd" class="form-control" data-role="tagsinput" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="short_description">Short Decsription<span class="text-danger">*</span></label>
                  <input type="text" id="short_description" name="short_description" class="form-control" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="Long_description">Long Description<span class="text-danger">*</span></label>
                  <textarea id="long_description" name="long_description" cols="10" rows="30" class="form-control" placeholder="Enter Long description here"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="category-image">Image<span class="text-danger">*</span></label>
                  <input type="file" id="image" name="image" class="form-control" />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary add_Bloog">Save Category</button>
              </div>
              </form>
              <div id="responseMessage"></div>
          </div>
     
      </div>
  </div>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
   
      CKEDITOR.replace('long_description');
     
  });
</script>
