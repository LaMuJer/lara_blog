<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Info;
use App\Models\Photo;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Auth;
use Psy\Util\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
//        $request->validate([
//            "title" => "required|min:3|max:100",
//            "price" => "required|integer|min:10",
//            "stock" => "required|integer|min:1",
//            "description" => "required",
//            "category" => "required",
//            "category.*" => "exists:categories,id",
//            "feature_image" => "required|mimes:jpg,png",
//            "photo" => "required",
//            "photo.*" => "mimes:jpg,png"
//        ]);
//

//        featured image
        $featureImg = $request->file('featured_image');
        $newFeatureImgName = uniqid().'_featured_image.'.$featureImg->extension();
        $featureImg->storeAs("public/feature_image",$newFeatureImgName);


        $product = new Product();
        $product->title = $request->title;
        $product->slug = \Illuminate\Support\Str::slug($request->title);
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->feature_image = $newFeatureImgName;
        $product->description = $request->description;
        $product->excerpt = \Illuminate\Support\Str::words(50,$request->description);
        $product->user_id = Auth::id();

        $product->save();

        foreach ($request->category as $category) {
            $cp  = new CategoryProduct();
            $cp->category_id = $category;
            $cp->product_id = $product->id;
            $cp->save();
        }

        foreach ($request->file('photo') as $photo) {
            $newName = uniqid().'_photo.'.$photo->extension();
            $photo->storeAs("public/product_photo",$newName);
            $photo = new Photo();
            $photo->name = $newName;
            $photo->product_id = $product->id;
            $photo->user_id = Auth::id();

            $photo->save();
        }

        return redirect()->route('product.index')->with("toast",Info::showToast("success","New Product Added"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
