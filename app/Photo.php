<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $upload ='/images/';
    protected $fillable = ['file'];
    public function getFileAttribute($photo){
        return $this->upload .$photo;
    }
}
