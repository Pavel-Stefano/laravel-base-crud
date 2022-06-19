<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'description', 'thumb', 'price',  'series', 'sale_date', 'type'];       // campi da riempire

    protected $guarded = [];        // campi da non riempire
}
