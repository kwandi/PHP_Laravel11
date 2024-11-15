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

        toastr()->addSuccess('Đã Thêm Sản Phẩm '.$category->category_name);

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data  = Category::find($id);

        $data->delete();

        toastr()->addSuccess('Đã Xoá Sản Phẩm '.$data->category_name);

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('admin.edit_category',compact('data'));

    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);

        $data->category_name = $request->category;

        $data->save();

        toastr()->addSuccess('Đã cập nhật thông tin sản phẩm '.$data->category_name);

        return redirect('/view_category');
    }
}
