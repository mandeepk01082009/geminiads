<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contactus';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','phone','subject','message',];
}   
