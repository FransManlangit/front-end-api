<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $primaryKey = 'customer_id';

    protected $guarded = ['customer_id'];
    protected $fillable =['title','fname','lname','addressline','town','zipcode','phone','creditlimit','level'];

     public function orders(){

        return $this->hasMany('App\Models\Order','customer_id');
    }
}