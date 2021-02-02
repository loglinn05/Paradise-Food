<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class GoodsController extends Controller
{
	private function select_all_goods() {
		return DB::select('select * from goods');
	}
	public function show_all_goods()
	{
		$goods = $this->select_all_goods();
		return view('catalogue')->with('goods', $goods);
	}
}