<?php

namespace App\Http\Controllers\Admin;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('pages.admin.product.index', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $model = new Product;
        $model->name = $request->product_name;
        $model->category_id = $request->get('category');
        $model->brand_id = $request->get('brand');
        $model->description = $request->description;
        $model->price = $request->price;
        $model->stock = $request->stock;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('products', $filename);
            $model->photo = $filename;
        }
        $model->save();
        return redirect('/product')->with('success', 'Successfully Created Product');
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
        return view('pages.admin.product.detail', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        $brand = Brand::all();
        return view('pages.admin.product.edit', [
            'product' => $product,
            'category' => $category,
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $model = Product::find($id);
        $model->name = $request->product_name;
        $model->category_id = $request->get('category');
        $model->brand_id = $request->get('brand');
        $model->description = $request->description;
        $model->price = $request->price;
        $model->stock = $request->stock;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('products', $filename);

            File::delete('products', $model->photo);
            $model->photo = $filename;
        }
        $model->save();
        return redirect('/product')->with('success', 'Successfully Updated Product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product')->with('success', 'Successfully Deleted Product');
    }
}
