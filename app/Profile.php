<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

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
    protected $fillable = ['name', 'lastname', 'card_number', 'address', 'contact', 'user_id','role'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id'); 
    }

    public function cars(){
        return $this->hasMany('App\Car','user_id');
    }
}
