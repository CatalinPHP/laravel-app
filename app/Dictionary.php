<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'word', 'translated_word',
    ];


}
