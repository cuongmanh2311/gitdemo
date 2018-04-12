<?php

namespace App\Http\Controllers;
use App\Http\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $cates = CategoryModel::get_cate();
        return response()->json($cates);
    }


    public function store(Request $request) {
        $data = [
            'name' => $request->name
        ];

        CategoryModel::insert_cate($data);

        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function show(Request $request) {
        $id = $request->id;

        $cate = CategoryModel::get_cate_by_id($id);

        return response()->json($cate);
    }

    public function update(Request $request) {

        $id = $request->id;
        $data = [
            'name' => $request->name
        ];
        CategoryModel::update_cate($id,$data);
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function search(Request $request) {
        $name = $request->name;

        $cate = CategoryModel::search_cate_by_name($name);

        return response()->json($cate); 

    }
}