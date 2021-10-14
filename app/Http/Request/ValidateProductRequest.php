<?php

namespace App\Http\Request;

use App\Models\Product;

class ValidateProductRequest
{
 public function rules()
{
    return Product::$getRules;

}
}
