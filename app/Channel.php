<?php

namespace App;
use Ramsey\Uuid\Uuid;


class Channel extends Model
{
    public $incrementing = false;
    //
    protected $fillable = [
        'tittle','description','image','channel_banner','user_id'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function editable(){

        if(! auth()->check()) return false ;
        else 
        return auth()->user()->id === $this->user_id ;
    }

}
