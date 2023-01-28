<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Isset_;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',  
    ];

    protected $with = [
        'category'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function transcation_details(){
        return $this->hasMany(TransactionDetail::class);
    }

    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false) {
           return $query->where('name', 'like', '%'. $filters['search'].'%')
            ->orWhere('short_description', 'like', '%'. $filters['search'].'%')
            ->orWhere('full_description', 'like', '%'. $filters['search'].'%');
          }

          $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%'. $search.'%')
            ->orWhere('short_description', 'like', '%'. $search.'%')
            ->orWhere('full_description', 'like', '%'. $search.'%');
          });

          $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
          });
    }
}
