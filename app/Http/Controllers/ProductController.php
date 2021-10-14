<?php

namespace App\Http\Controllers;


use App\Http\Request\ValidateProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */

    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('products.create', [
            'categories' => $categories,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
//        $this->authorize('create',Customer::class);
//        $this->authorize('create',Product::class);

//        $getRules = Product::validationRules();
//        $getRules['photo'] = 'required';
//        $data = $request->validate($getRules);
//dd($request);
        $data = $request->validate([

            'name' => 'required',
            'slug'=>'required',
            'price' => 'required',
            'description' => 'required',
            'featured_image' => 'nullable',
//            'product_category_id' => 'nullable',
        ]);

        if ($data['photo'] !== null) {
            $data['photo'] = $data['photo']->store('public/photos/');
        }

//        $tags = $request->input('tags');
//        $category = ProductCategory::query()->findOrFail($request->input('category_id'));
//        $product = $category->products()->create($data);

        Product::query()->create($data);
//        $product->tags()->attach($tags);
        return redirect()->route('products.index');
dd('yes');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
//    public function show($id)
//    {
//        $product = Product::find($id);
//        return view('products.show', [
//            'product' => $product,
//
//        ]);
//    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $product = Product::findorfail($id);
        $category = ProductCategory::all();
        return view('products.edit', compact('product', $category));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ValidateProductRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required',
            'slug'=>'required',
            'price' => 'required',
            'description' => 'required',
            'featured_image' => 'nullable|image',
            'product_category_id' => 'required',
        ]);

        if (Storage::exists($product->photo) && $request->file('photo')) {
            Storage::delete($product->photo);
            $validatedData['photo'] = $request->file('photo')->store('public/photos/');
        }
        $product->update($validatedData);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $product = Product::findorfail($id);
        $product->productDeleteById();
        return redirect()->route('products.index');

    }


}
