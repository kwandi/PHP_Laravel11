<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();

        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        toastr()->addSuccess('Sản phẩm đã được thêm vào database');

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data  = Category::find($id);

        $data->delete();

        toastr()->addSuccess('Xoá sản phẩm thành công');

        return redirect()->back();
    }
}
