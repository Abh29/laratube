<?php

namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model as BassModel ;

class Model extends BassModel
{
    //
    public $incrementing = false;

    protected static function boot(){

        parent::boot();
        static::creating(function($model){
            
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
 


}
