<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 
    //
    protected $table ='posts';
    //primarykey     
    protected $primarykey = 'id';   
    //timestamps
    public $timestamps= true; 
}
