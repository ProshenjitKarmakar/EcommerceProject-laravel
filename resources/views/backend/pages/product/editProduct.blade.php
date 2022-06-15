
@extends('backend.mastertemplate.template')

@section('maincontent')
<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Products</h4>
          <p class="mg-b-0">Edit this product information.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card p-3 shadow-base">
                    <form action="{{ Route('update',$product->id) }}" method="post">
                    @csrf <!--   hack protect | it's generate a token for protection from hack| -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="productName">Product Name</label>
                                    <input class="form-control" type="text" name="productName" id="productName" placeholder="Name" value="{{ $product->productName }}">
                                    <span class="text-danger">
                                </div>
                                <div class="form-group">
                                    <label for="productDescription">Product Description</label>
                                    <textarea placeholder="Description" class="form-control" type="text" name="productDescription" id="productDescription" col="30" value="{{ $product->productDescription }}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Category">Product Category</label>
                                    <select name="productCategory" id="productCategory" class="form-control">
                                        <option value="Panjabi">------Select Category------</option>
                                        <option value="Panjabi" @if ($product->productCategory == 'Panjabi') selected @endif>Panjabi</option>
                                        <option value="t-shart" @if ($product->productCategory == 't-shart') selected @endif>T-shart</option>
                                        <option value="shart" @if ($product->productCategory == 'shart') selected @endif>Shart</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Size">Product Size</label>
                                    <select name="productSize" id="productSize" class="form-control">
                                        <option value="Panjabi">------Select Size------</option>
                                        <option value="S" @if ($product->productSize == 'S') selected @endif>S</option>
                                        <option value="M" @if ($product->productSize == 'M') selected @endif>M</option>
                                        <option value="L" @if ($product->productSize == 'L') selected @endif>L</option>
                                        <option value="XL" @if ($product->productSize == 'XL') selected @endif>XL</option>
                                        <option value="XXL" @if ($product->productSize == 'XLL') selected @endif>XXL</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="productCostPrice">Product Cost Price</label>
                                    <input class="form-control" type="text" name="productCostPrice" id="productCostPrice" placeholder="Cost Price" value="{{ $product->productCostPrice }}">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="productSalePrice">Product Sale Price</label>
                                    <input class="form-control" type="text" name="productSalePrice" id="productSalePrice" placeholder="Cost Price" value="{{ $product->productSalePrice }}">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="productQuantity">Product Quantity</label>
                                    <input class="form-control" type="text" name="productQuantity" id="productQuantity" placeholder="Quantity" value="{{ $product->productQuantity }}">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="productStatus" id="productStatus" class="form-control">
                                        <option value="">------Select Status------</option>
                                        <option value="1" @if ($product->productStatus == '1') selected @endif>Active</option>
                                        <option value="2"  @if ($product->productStatus == '2') selected @endif>Inactive</option>
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