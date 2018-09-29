<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');

        $this->validate($request,[
            'name' => 'required',
            'size' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:1000'
        ]);

        $image = $request->image;
        if($image)
        {
            $imageName = $image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
        }

        Product::create($formInput);
        return redirect()->route('admin.product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.product.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('name','id');
        $product = Product::find($id);
        return view('admin.product.edit', compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formInput = $request->except('image');

        $this->validate($request,[
            'name' => 'required',
            'size' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:1000'
        ]);

        $image = $request->image;
        if($image)
        {
            $imageName = $image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
        }

        $product = Product::find($id);
        $product->update($request->all());

        //Product::update($formInput, $id);
        return redirect()->route('admin.product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::destroy($id);
        return $this->view('admin.product.index');
    }
}
