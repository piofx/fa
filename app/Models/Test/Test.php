<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Test extends Model
{
    use Sortable;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'description',
        'instructions',
        'file',
        'marks',
        'test_time',
        'status',
        'group_id',
        'price',
        'details',
        'image',
        'type_id',
        'validity',
        'level',
        // add all other fields
    ];

    public function testtype()
    {
        return $this->belongsTo('App\Models\Test\Type','type_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Test\Category');
    }

    public function sections()
    {
        return $this->hasMany('App\Models\Test\Section');
    }

    public function group()
    {
        return $this->belongsTo('App\Models\Test\Group');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product\Product');
    }

    public function fillup()
    {
        return $this->hasMany('App\Models\Test\Fillup');
    }

    public function mcq()
    {
        return $this->hasMany('App\Models\Test\Mcq');
    }

    public function order($user=null)
    {

        if(!$user)
            return null;

        $orders = $user->orders()->whereIn('product_id',$this->products->pluck('id')->toArray())->orderBy('id','desc')->get();

        if($orders)
        foreach($orders as $order){
            if($order->status){
             
                return $order;
            }
        }
        $order = $user->orders()->where('test_id',$this->id)->orderBy('id','desc')->first();

        if($order){
            return $order;
        }

        return null;
    }

    public function fillup_order() {
        return $this->fillup()->orderBy('sno','asc');
    }

    public function mcq_order() {
        return $this->mcq()->orderBy('qno','asc');
    }

    public function fillup_q1() {
        return $this->fillup()->where('qno',1)->first();
    }

    public function mcq_q1() {
        return $this->mcq()->where('qno',1)->first();
    }

    public function quescount(){
        return $this->fillup()->count() + $this->mcq()->count(); 
    }
    
}
