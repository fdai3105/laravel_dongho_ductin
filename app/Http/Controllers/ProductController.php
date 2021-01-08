<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.product.index', ['products' => $products, 'brands' => $brands, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->size = $request->size;
        $product->price = $request->price;
        $product->material = $request->material;
        $product->band_material = $request->band_material;
        $product->style = $request->style;
        $product->waterproof = $request->waterproof;
        $product->warranty = $request->warranty;
        $product->gender = $request->gender;
        $product->discount = $request->discount;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $image = new Image();
                $fileName = preg_replace("/\s+/", "", $product->name . '_' . $file->getClientOriginalName());
                $fileAddress = $file->move('upload', $fileName);

                $image->image = $fileAddress;
                $image->product_id = $product->id;
                $image->save();
            }
        }

        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
