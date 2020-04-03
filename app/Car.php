<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cars';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['car_model', 'body_car', 'rg_number', 'car_color', 'offtion', 'vg_number', 'user_id'];

    public function services(){
        return $this->hasMany('App\Service','car_id');
    }
    public function profile(){
        return $this->belongTo('App\Profile','user_id');
    }
    
}
