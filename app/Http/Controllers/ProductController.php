<?php

namespace App\Http\Controllers;

use App\Models\BandMaterial;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Image;
use App\Models\Material;
use App\Models\Product;
use App\Models\Style;
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
        $styles = Style::all();
        $genders = Gender::all();
        $materials = Material::all();
        $bands = BandMaterial::all();
        return view('admin.product.index', [
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories,
            'styles' => $styles,
            'genders' => $genders,
            'materials' => $materials,
            'bands' => $bands,
        ]);
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
        $product->material_id = $request->material_id;
        $product->band_material_id = $request->band_material_id;
        $product->style_id = $request->style_id;
        $product->waterproof = $request->waterproof;
        $product->warranty = $request->warranty;
        $product->gender_id = $request->gender_id;
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
