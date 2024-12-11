<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Product;


class ProductController 
{
    public function list(){
        $products=Product::all();
        return view('admin.products.list',compact('products'));
    }
    public function create(){
        $categories=Category::all();
        return view('admin.products.create',compact('categories'));
    }
    public function save(ProductSaveRequest $request){
        $input=$request->validated();
        Product::create($input);
        return redirect()->route('product.list')->with('message','product save succesfully');
    }
    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }
    
    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('product.list')->with('message', 'Product updated successfully');
    }
    
    public function delete($id) {
        Product::findOrFail($id)->delete();
        return redirect()->route('product.list')->with('message', 'Product deleted successfully');
    }
    
    
}
