<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProductsModel extends Model
{
	public static function get_products() {
		return DB::table('product')->get()->toArray();
	}

	public static function get_product_by_id($id) {
		$result = DB::table('product')->where('id',$id)->get();

		if(empty($result[0])) {
			return false;
		}
		return $result[0];
	}

	public static function get_products_by_cateid($cate_id) {
		return DB::table('product')->where('cate_id','=',$cate_id)->get();
	}

	public static function search_product_by_name($name) {
		return DB::table('product')->where('name','like','%'.$name.'%')->get();
	}

	public static function insert_product($data) {
		return DB::table('product')->insert($data);
	}

}