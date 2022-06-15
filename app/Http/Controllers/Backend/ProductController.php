<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProduct= Product::orderby('id', 'asc')->get();
        return view('backend.pages.product.productManage', compact('allProduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.product.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $allProduct)
    {
        $allProduct->validate([
            'productName'=>'required',
            'productDescription'=>'required|min:10',
            'productCategory'=>'required',
            'productSize'=>'required',
            'productCostPrice'=>'required',
            'productSalePrice'=>'required',
            'productQuantity'=>'required',
        ]);

        $product= new Product();
        
        $product->productName= $allProduct->productName;
        $product->productDescription= $allProduct->productDescription;
        $product->productCategory= $allProduct->productCategory;
        $product->productSize= $allProduct->productSize;
        $product->productCostPrice= $allProduct->productCostPrice;
        $product->productSalePrice= $allProduct->productSalePrice;
        $product->productQuantity= $allProduct->productQuantity;
        $product->productStatus= $allProduct->productStatus;

        $product->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= Product::find($id);
        return view('backend.pages.product.editProduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $all, $id)
    {
        $product =Product::find($id);
        $product->productName = $all->productName;
        $product->productDescription = $all->productDescription;
        $product->productCategory = $all->productCategory;
        $product->productSize = $all->productSize;
        $product->productCostPrice = $all->productCostPrice;
        $product->productSalePrice = $all->productSalePrice;
        $product->productQuantity = $all->productQuantity;
        $product->productStatus = $all->productStatus;
        $product->update();
        return redirect()->route('manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allProduct= Product::find($id);
        $allProduct->delete();
        return redirect()->route('manage');
    }
}
