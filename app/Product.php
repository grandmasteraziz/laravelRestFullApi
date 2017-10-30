<?php

namespace App;

use App\Seller;
use App\Category;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	const AVAIBLE_PRODUCT = 'avaible';
	const UNAVAIBLE_PRODUCT = 'unavaible';


    protected $fillable = [
    	'name',
    	'description',
    	'quantity',
    	'status',
    	'image',
    	'seller_id',
    ];

    public function isAvaible()
    {
    	return $this->status == Product::AVAIBLE_PRODUCT;
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
