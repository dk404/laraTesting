<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{

    protected $fillable = ['name', 'widget_id'];

    public function widget()
   {

       return $this->belongsTo('App\Widget');

   }
}