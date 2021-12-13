<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table='posts';
    public $primaryKey='id';
    public $incrementing=true;
    protected $keyType='int';
    public  $timestamps=true;
    use HasFactory;
  



}
