<?php

namespace App;

use App\Scopes\ProductScope;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected static function boot()
    {
        parent::boot();
        //static::addGlobalScope(new ProductScope);
    }

    //protected $fillable= ['name','category_id','price','short_description','currency_code','supplier_id','discount','details'];
    protected $guarded = [];


    public function scopeStars($query){
        return $query->where('stars','>=',4);
    }

}
