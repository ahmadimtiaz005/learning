<?php

namespace App\Http\Controllers;




use App\Http\Requests\ValidateProductRequest;
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

        $product_category = ProductCategory::all();
        return view('products.create', [
            'product_category' => $product_category,

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

        $getRules = Product::validRules();
        $getRules['photo'] = 'nullable';
        $data = $request->validate($getRules);

        if ($data['photo'] !== null) {
            $data['photo'] = $data['photo']->store('public/photos/');
        }
        $category = ProductCategory::find($request->input('product_category_id'));
//        dd($data);
        $product = $category->products()->create($data);

        return redirect()->route('products.index');

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
        $product_category = ProductCategory::all();
        return view('products.edit', compact('product', 'product_category'));
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
            'photo' => 'nullable|image',
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
