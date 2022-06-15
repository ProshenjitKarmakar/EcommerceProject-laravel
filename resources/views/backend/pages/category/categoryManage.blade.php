
@extends('backend.mastertemplate.template')

@section('maincontent')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Category</h4>
        <p class="mg-b-0">Manage all your Category.</p>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addCategoryButton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="categoryName">Category Name</label>
            <input class="form-control" type="text" name="categoryName" id="productName" placeholder="Name" value="{{ old('categoryName') }}">
        </div>
        <div class="form-group">
            <label for="categoryDescription">Category Description</label>
            <textarea placeholder="Description" class="form-control" type="text" name="categoryDescription" id="categoryDescription" col="4" value="{{ old('categoryDescription') }}"></textarea>
        </div>
        <div class="form-group">
            <label for="categoryTag">Category Name</label>
            <input class="form-control" type="text" name="categoryTag" id="categoryTag" placeholder="Name" value="{{ old('categoryTag') }}">
        </div>
      


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add Category</button>
      </div>
    </div>
  </div>
</div>

<!-- model end  -->






    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card p-3 shadow-base">
                    <div class="row d-flex justify-content-between mx-2">
                        <h4>Categories</h4>
                        <button type="button" data-toggle="modal" data-target="#addCategoryButton" class="btn btn-sm btn-info addCategoryButton"><i class="fa fa-plus"> Add Category</i></button>
                    </div>
                    <table class="table productTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Category Tag</th>
                                <th>Category Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Man</td>
                                <td>This is man category</td>
                                <td>man, children</td>
                                <td></td>
                                <td>1</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>

@endsection






