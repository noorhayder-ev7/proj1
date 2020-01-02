<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table='user';
    protected $fillable=['name','type','secret_word','phone'];
    /**
     * @var array|string
     */
    private $name;
    /**
     * @var array|string
     */
    private $type;
    private $secret_word;
    private $phone;



//
//    protected $table='user';
//protected $primaryKey='id';
//public $timestamps=false;
}
