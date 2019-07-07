<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shippings';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
