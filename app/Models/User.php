<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Post;
use App\Models\Address;
use App\Models\Tag;
use App\Models\User;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

protected $fillable=['group_id','name','phone','email','address'];
public function group(){
	return $this->belongsTo(Group::class);
}

}
