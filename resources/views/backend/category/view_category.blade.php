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
                                <button style="background-color: #11191d" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategory">Add Category</button>
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
                                            <button type="button" class="btn btn-primary editCategoryBtn"
                                                data-id="{{ $item->id }}"
                                                data-name="{{ $item->name }}"
                                                data-description="{{ $item->description }}"
                                                data-image="{{ $item->image }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#updateCategory">
                                                Edit
                                            </button>
                                            <button class="btn btn-danger deleteCategoryBtn" data-id="{{ $item->id }}">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.category.add_category')
@include('backend.category.edit_category')

@endsection

@include('backend.category.js')