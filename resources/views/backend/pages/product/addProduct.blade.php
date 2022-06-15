
@extends('backend.mastertemplate.template')

@section('maincontent')
<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card p-3 shadow-base">
                    <form action="{{ Route('store') }}" method="post">
                    @csrf <!--   hack protect | it's generate a token for protection from hack| -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input class="form-control" type="text" name="productName" id="productName" placeholder="Name" value="{{ old('productName') }}">
                                    <span class="text-danger">
                                        @error('productName')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="productDescription">Product Description</label>
                                    <textarea placeholder="Description" class="form-control" type="text" name="productDescription" id="productDescription" col="30" value="{{ old('productDescription') }}"></textarea>
                                    <span class="text-danger">
                                        @error('productDescription')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="Category">Product Category</label>
                                    <select name="productCategory" id="productCategory" class="form-control">
                                        <option value="Panjabi">------Select Category------</option>
                                        <option value="Panjabi">Panjabi</option>
                                        <option value="t-shart">T-shart</option>
                                        <option value="shart">Shart</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Size">Product Size</label>
                                    <select name="productSize" id="productSize" class="form-control">
                                        <option value="Panjabi">------Select Size------</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="productCostPrice">Product Cost Price</label>
                                    <input class="form-control" type="text" name="productCostPrice" id="productCostPrice" placeholder="Cost Price" value="{{ old('productCostPrice') }}">
                                    <span class="text-danger">
                                        @error('productCostPrice')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="productSalePrice">Product Sale Price</label>
                                    <input class="form-control" type="text" name="productSalePrice" id="productSalePrice" placeholder="Cost Price" value="{{ old('productSalePrice') }}">
                                    <span class="text-danger">
                                        @error('productSalePrice')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="productQuantity">Product Quantity</label>
                                    <input class="form-control" type="text" name="productQuantity" id="productQuantity" placeholder="Quantity" value="{{ old('productQuantity') }}">
                                    <span class="text-danger">
                                        @error('productQuantity')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="productStatus" id="productStatus" class="form-control">
                                        <option value="">------Select Status------</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <button class="form-control btn btn-info">Add Product</button>
                                </div> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection