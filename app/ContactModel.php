<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
   public $fillable = [
     'uname',
     'fullname',
     'email',
     'phone',
     'address'
   ];
}
