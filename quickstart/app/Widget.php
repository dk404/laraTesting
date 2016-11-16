<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{

    protected $fillable = ['name'];

    // Begin Gadget Relationship

    public function gadgets()
    {

       return $this->hasMany('App\Gadget');

    }

    // End Gadget Relationship

}