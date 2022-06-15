
@extends('backend.mastertemplate.template')

@section('maincontent')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Category</h4>
        <p class="mg-b-0">Manage all your Category.</p>
    </div>
</div>


    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card p-3 shadow-base">
                    
                    <div class="row d-flex justify-content-between mx-2">
                        <h4>Categories</h4>
                        <button type="button" data-toggle="modal" data-target="#addCategoryButton" class="btn btn-sm btn-info addCategoryButton"><i class="fa fa-plus"> Add Category</i></button>
                    </div>
                    

                    <!-- Main Input fields  -->
                    <form action="{{ Route('catStore') }}" method="post" enctype="multipart/data">
                    @csrf <!--   hack protect | it's generate a token for protection from hack| -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="categoryName">Category Name</label>
                                    <input class="form-control" type="text" name="categoryName" id="categoryName" placeholder="Category Name" value="{{ old('categoryName') }}">
                                    <span class="text-danger">
                                        @error('categoryName')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="categorySlug">Category Slug</label>
                                    <input class="form-control" type="text" name="categorySlug" id="categorySlug" placeholder="Slug" value="{{ old('categorySlug') }}">
                                    <span class="text-danger">
                                        @error('categorySlug')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="categoryDescription">Category Description</label>
                                    <textarea placeholder="Description" class="form-control" type="text" name="categoryDescription" id="categoryDescription" col="30" value="{{ old('categoryDescription') }}"></textarea>
                                    <span class="text-danger">
                                        @error('categoryDescription')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="file">Choose Image File to Upload</label>
                                <input class="form-control" type="file" id="categoryImg" name="categoryImg">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="categoryStatus" id="categoryStatus">
                                        <option value="">------Select Status------</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-info">Add Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection






