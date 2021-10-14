<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'product_category_id',
        'name',
        'slug',
        'price',
        'featured_image',
        'description',
    ];

    public static $getRules = [
        'name' => 'required',
        'slug'=>'required',
        'price' => 'required',
        'description' => 'required',
        'featured_image' => 'nullable|image',
//        'product_category_id' => 'required',
    ];

    public function productDeleteById()
    {
        if (Storage::exists($this->photo)){

            Storage::delete($this->photo);
        }
        $this->delete();
    }

    public function product_category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
}
