<?php

namespace App\Http\Models;

use App\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $primaryKey = "id";
    protected $fillable = ['cate_id','name','price'];
    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    public function getall(){
        $list = Product::all();
        return $list;
    }

    public function add_data(){
//        $product = new Product();
//        $product->cate_id = "1";
//        $product->name = "喜德盛";
//        $product->price = "800";
//        $product->save();
        Product::create([
            'cate_id'=>'1',
            'name'=>'钱江极',
            'price'=>49999,
        ]);
    }

    public function update_data(){
//        $product = Product::find(1);
//        $product->price="1299";
//        $product->save();

        Product::where("id",1)->update(['price'=>1200]);
    }

    public function get_where(){
//        $list = Product::where([
//            ['price','>',2000]
//        ])->limit(2)->get();
        Product::withTrashed();
        $list = Product::withTrashed()->get();
        return $list;
    }
    //
    public function del_data(){
        $product = Product::find(3);
        $product->delete();
    }

    protected static function booted(){
        parent::booted();
        static::addGlobalScope(new StatusScope());
    }

    public function scopeMaxPrice($query){
        return $query->where('cate_id','2');
    }

}

