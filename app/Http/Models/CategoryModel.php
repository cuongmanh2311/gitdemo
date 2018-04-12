<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CategoryModel extends Model
{
	public static function get_cate() {
		return DB::table('category')->get()->toArray();
	}

	public static function get_cate_by_id($id) {
		$result = DB::table('category')->where('id',$id)->get();

		if(empty($result[0])) {
			return false;
		}
		return $result[0];
	}

	

	public static function search_product_by_name($name) {
		return DB::table('product')->where('name','like','%'.$name.'%')->get();
	}

	public static function insert_cate($data) {
		return DB::table('category')->insert($data);
	}

	public static function update_cate($id,$data) {
		return DB::table('category')->where('id',$id)->update($data);
	}

	public static function search_cate_by_name($name) {
		return DB::table('category')->where('name','like','%'.$name.'%')->get();
	}

}