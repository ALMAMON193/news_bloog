{{-- data-category_id="{{ $item->category['id'] }}" --}}
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
                                <h4 class="card-title">All Bloog</h4>
                                <button style="background-color: #11191d" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBloog">Add Bloog</button>
                            </div>
                            <hr>
                            <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Post Date || Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $item)
                                    <tr>
                                        <td><img src="{{ asset('uploads/bloog_images/' . $item->image) }}" height="50px" width="50px" alt=""></td>
                                        <td>{{ \Illuminate\Support\Str::limit($item->title, 30) }}</td>
                                        <td>{{ optional($item->category)->name ?? 'N/A' }}</td>
                                        <td>{{ $item->author }}</td>
                                        <td>{{ $item->created_at->format('d-m-Y') }} {{ $item->created_at->format('h:i A') }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary editBloogBtn"
                                                data-id="{{ $item->id }}"
                                                data-title="{{ $item->title }}"
                                                data-author="{{ $item->author }}"
                                                data-category_id="{{ optional($item->category)->id }}"
                                                data-short_description="{{ $item->short_description }}"
                                                data-long_description="{{ $item->long_description }}"
                                                data-image="{{ $item->image }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#updateBloog">
                                                Edit
                                            </button>
                                            <button class="btn btn-danger deleteBloogBtn" data-id="{{ $item->id }}">Delete</button>
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

@include('backend.bloog.add_bloog')
@include('backend.bloog.edit_bloog')

@endsection

@include('backend.bloog.js')
