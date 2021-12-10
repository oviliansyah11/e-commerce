<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HandleSelect extends Controller
{

    public function index()
    {
        $data = Category::all();
        return view('pages.admin.product.create', [
            'data' => $data
        ]);
    }

    public function getSelected($id)
    {
        $data = DB::table('brands')->where('category_id', $id)->get();
        return response()->json($data);
    }
}
