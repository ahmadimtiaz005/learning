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
        'photo',
        'description',
    ];

    public static function validRules()
    {
        return [
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required',
            'description' => 'required',
            'product_category_id' => 'required',
        ];
    }

    public function productDeleteById()
    {
        if (Storage::exists($this->photo)) {

            Storage::delete($this->photo);
        }
        $this->delete();
    }

    public function product_category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
