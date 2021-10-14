<?php

namespace App\Http\Controllers;


use App\Models\ProductCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::query()->latest()->get();
        return view('product_categories.index', compact('product_categories'));
    }

    public function create()
    {
        return view('product_categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validations
        $data = $request->validate([
            'name' => ['required', 'string', 'min:3']
        ]);
        ProductCategory::query()->create($data);
        return redirect('product-categories');
    }


    public function show($id)
    {
//        $product_category = ProductCategory::find($id);// check only table id and it returns single record
//        $product_category = ProductCategory::where('name' , 'Ahmed')->first();// check all column in table it return collection
////        return redirect()//
    }


    public function edit(int $id)
    {
        $product_category = ProductCategory::query()->find($id);
        return view('product_categories.edit', compact('product_category'));
    }


    public function update(Request $request, int $id): RedirectResponse
    {
        $product_category = ProductCategory::query()->findorfail($id);
        $product_category->update([
            'name' => $request->name
        ]);
        return redirect()->route('product-categories.index');
    }


    public function destroy(int $id): RedirectResponse
    {
        $product_category = ProductCategory::query()->find($id);
        $product_category->delete();
        return redirect()->route('product-categories.index');
    }

}
