<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;
use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SoftDeletes;

class DataController extends Controller
{

    //
    public function select(){
        $user = User::all();
//        $user = \DB::select("select * from user ");
//        $user = \DB::table("user")->find(1);
        return $user;
    }

    public function product_all(){
//        $list = \DB::table("product")->get();
//        $list = DB::table("product")->first();
//        $list = DB::table("product")->value("name");
//        $list = DB::table("product")->find(1);
//        $list = DB::table("product")->pluck("id");
//        $list = DB::table("product")->pluck("id","name");
//        $list = DB::table("product")->count();
//        $list = DB::table("product")->max("price");
//        $list = DB::table("product")->avg("price");
//        $list = DB::table("product")->where("id","9")->exists();
//        $list = DB::table("product")->where("id","9")->doesntExist();
        $product = DB::table("product");
        $list = $product->get();
        return $list;
    }

    public function get_user_all(){
//        $product = \DB::table("product")->select("id","name")->get();
//        $product = \DB::table("product")->select("id","name");
//        $data = $product->addSelect("price")->get();
//        $product = \DB::table("product")->select(DB::raw("COUNT(*) as count,name"))->get();
//        $product = \DB::table("product")->selectRaw("COUNT(*) as count,create_time")
//            ->groupBy("create_time")
//            ->get();

//        $product = DB::table("product")->selectRaw("COUNT(*) as count,create_time")
//            ->groupBy("create_time")
//            ->havingRaw("count>1")
//            ->get();
//        $product = DB::table("product")->where("id","=","1")->get();
//        $product = DB::table("product")->where("id","1")->get();
//        $product = DB::table("product")->where("id",">","1")->get();
//        $product = DB::table("product")->where("id",">","2")->get();
//        $product = DB::table("product")->where("name","like","%钱%")->get();
//        $product = DB::table("product")->where(['id'=>1])->get();
//        $product = DB::table("product")->where([['id',"=",1],['name',"=","捷安特"]])->get();
//        $product = DB::table("product")
//            ->where("id","=",1)
//            ->orWhere("create_time",222)
//            ->toSql();
//        $product = DB::table("product")
//            ->where("price",">",1000)
//            ->orWhere(function($query){
//                $query->where("create_time","222")->where("name",'like',"%钱%");
//            })->toSql();
//        $product = DB::table("product")->whereBetween("price",[1000,30000])->toSql();
//        $product = DB::table("product")->whereNotBetween("price",[2000,30000])->toSql();
//        $product = DB::table("product")
//            ->where("id","=",2)
//            ->orWhereNotBetween("price",[2000,30000])->get();
//        $product = DB::table("product")->whereIn("id",[1,2])->get();
//        $product = DB::table("product")->whereNotIn("id",[1,2])->get();
//        $product = DB::table("product")->whereDate("create_time","")->get();
//        $product = DB::table("product")->whereColumn("create_time","remark")->get();
//        $product = DB::table("product")->orderBy("create_time","desc")->get();
//        $product = DB::table("product")->latest("create_time")->toSql();
//        $product = DB::table("product")->inRandomOrder()->get();
//        $product = DB::table("product")->skip(2)->take(2)->get();
//        $product = DB::table("prodict")->offset(2)->limit(3)->toSql();
//        # when 条件执行语句
//        $product = DB::table("product")->when(true,function($query){
//            $query->where("id",1);
//        },function($query){
//            $query->where("name",'钱江');
//        })->get();
//        $product = DB::table("product")
//            ->join("product_cate","product.cate_id","=","product_cate.id")
//            ->select("product.*","product_cate.name as cate_name")
//            ->get();
//        $product = DB::table("product")
//            ->leftJoin("product_cate","product.cate_id","=","product_cate.id")
//            ->select("product.*","product_cate.name as cate_name")
//            ->get();
//        $product = DB::table("product")
//            ->join("product_cate",function($join){
//                $join->where("product.id",'=',"1")->on("product.cate_id","=","product_cate.id");
//            })->where("product.id",'=',"1")->select("product.*","product_cate.name as cate_name")
//            ->toSql();
//        $query = DB::table("product_cate")->selectRaw("id,name,parent_id")->toSql();
//        $product = DB::table("product")->joinSub($query,"product_cate",function($join){
//            $join->on("product.cate_id","=","product_cate.id");
//        })->select("product.*","product_cate.name as cate_name")->get();
//        $query = DB::table("product");
//        $product = DB::table("product")
//            ->union($query)
//            ->get();
//        DB::table("product")->insert([
//            'name'=>'特斯拉',
//            'cate_id'=>3,
//            'price'=>'899999',
//            'create_time'=>"111",
//            'remark'=>'123'
//        ]);
//        $id = DB::table("product")->insertGetId([
//            'name'=>'比亚迪 秦',
//            'cate_id'=>3,
//            'price'=>'499999',
//            'create_time'=>"111",
//            'remark'=>'123'
//        ]);
//        DB::table("product")->where('id','1')->increment("price");

//        $product = new Product();
//        $data = $product->getall();
//        $data = $product->get_where();

//        $list = Product::maxPrice()->where("price",">",'2000')->get();
        $list = Product::get();
        return $list;
    }

    public function add(){
        $product = new Product();
        $product->add_data();
    }

    public function update(){
        $product = new Product();
        $product->update_data();
    }

    public function del(){
        $product = new Product();
        $product->del_data();
    }


}
