<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dealers';

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
    protected $fillable = ['name_dealers', 'province', 'dealers', 'isuzu_all', 'pickup_and_multipurpose', 'paint_and_body', 'location', 'latitude', 'longitude', 'image'];

    
}
