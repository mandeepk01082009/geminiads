<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;

class Category extends Model
{
    use HasFactory;  
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name','heading','content','sort_col','banner','image'];

    // public function profile()
    // {
    //     return $this->hasOne(Portfolio::class);
    // }

    
}
