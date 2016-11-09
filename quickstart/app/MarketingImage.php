<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class MarketingImage extends SuperModel
{
    protected $fillable = [
        'is_active',
        'is_featured',
        'image_name',
        'image_extension'];
}
