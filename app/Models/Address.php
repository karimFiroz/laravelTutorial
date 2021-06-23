<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
  protected $fillable=['user_id','state','city','country'];



  public function user(){
        return $this->belongsTo(User::class);
    }
}
