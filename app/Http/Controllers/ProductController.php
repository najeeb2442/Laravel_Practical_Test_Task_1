<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    //
    // list of products
    public function index(){
        return view('products.index',[
            'products'=> Product::all()
        ]);
    }

    // show form page
    public function create(){
        return view('products.create');
    }

    // store new product into the database
    public function store(Request $request){
        $formFields= $request->validate([
            'name'=>['required', Rule::unique('product','name')],
            'price'=>'required',
            'description'=>'present',
        ]);
        Product::create($formFields);
        return redirect('/');

    }

    // show a product
    public function show(Product $product){
        return view('products.show',[
            'product'=> $product
        ]);
    }

    // edit a product
    public function edit(Product $product){
        return view('products.edit',[
            'product'=> $product
        ]);
    }

    // update a product
    public function update(Request $request,Product $product){
        $formFields= $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'present',
        ]);
        $product->update($formFields);
        return redirect('/');
    }

    // delete a product
    public function destroy(Product $product){
        $product->delete();
        return redirect('/');
    }
}
