<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return view('pages.admin.brand.index', ['brand' => $brand]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('pages.admin.brand.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $model = new Brand;
        $model->name = $request->brand_name;
        $model->category_id = $request->get('category');
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('brands', $filename);
            $model->photo = $filename;
        }
        $model->save();
        return redirect('/brand')->with('success', 'Successfully Created Brand');
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
        $brand = Brand::find($id);
        $category = Category::all();
        return view('pages.admin.brand.edit', [
            'brand' => $brand,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, $id)
    {
        $model = Brand::find($id);
        $model->name = $request->brand_name;
        $model->category_id = $request->get('category');
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = time() . str_replace(" ", "", $file->getClientOriginalName());
            $file->move('brands', $filename);

            File::delete('brands', $model->photo);
            $model->photo = $filename;
        }
        $model->save();
        return redirect('/brand')->with('success', 'Successfully Updated Brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/brand')->with('success', 'Successfully Deleted Brand');
    }
}
