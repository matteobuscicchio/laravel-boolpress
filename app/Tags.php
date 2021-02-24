<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    // se non vado errato anche i tag avranno una relazione uno a molti
    // return $this->hasMany('App\Articles');
}
