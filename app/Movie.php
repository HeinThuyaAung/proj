<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Movie extends Model implements HasMedia
{
    use HasMediaTrait;
    //
    protected $primaryKey = 'movieid';
    protected $fillable = ["moviename", "movietype","description" ,"startdate" , "enddate"];
    public static $rules = [
        "moviename"  => 'required|min:4',
        'movietype'   => 'required|min:4',
        "description" => 'required|min:10',
        "startdate" => 'required',
        "enddate" => 'required'
    ];
}
