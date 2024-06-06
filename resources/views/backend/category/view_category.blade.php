<!-- resources/views/admin/your_main_template.blade.php -->
@extends('admin.admin_master')
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Category List</h4>
                                <button style="background-color: #11191d" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#category">Add Category</button>
                            </div>
                            <hr>
                            <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach ($allData as $item)
<tr>
    <td>{{ $item->name }}</td>
    <td>{{ $item->description }}</td>
    <td><img src="{{ asset('uploads/category_image/' . $item->image) }}" height="50px" width="50px" alt=""></td>
    <td>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateCategory">
        Edit
      </button>
        <button class="btn btn-danger">Delete</button>
    </td>
</tr>
@endforeach
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
        </div>
    </div>
</div>

@include('backend.category.add_category')
@include('backend.category.edit_category') <!-- Include the edit modal -->

@endsection

<!-- Add Category Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {
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
                $('#addCategoryForm')[0].reset(); // Reset form after success
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

  });
</script>
