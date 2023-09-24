<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Category;

class Portfolio extends Model
{
    use HasFactory;  
    protected $table = 'portfolios';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id','sort_col','image'];  
    
    // public function category()
    //     {
    //         return $this->belongsTo(Category::class, 'id', 'category_id');
    //     }
    
    public function category()
     {
          return $this->hasOne(Category::class,'id','category_id');
     }
     
}
