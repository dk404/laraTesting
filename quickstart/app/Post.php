<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['name',
                            'body',
                            'is_published',
                            'slug'];


    public function showPublished($is_published)
    {

        return $is_published == 1 ? 'Published' : 'Draft';

    }

}