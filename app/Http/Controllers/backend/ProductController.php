<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
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

        $products = Product::get();
        return view ('backend.product.index',compact('products'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $subcategories = SubCategory::get();
        $companies = Company::get();
        return view ('backend.product.create',compact('categories','subcategories','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  return $request->all();
         $request->validate([
            'product_name' => 'required',

        ]);

        $logoName = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/product',
                $uniquename
            );
            $logoName = $uniquename;
        }

        $data = [
            'product_name' => $request->product_name,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'expire_date' => $request->expire_date,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'company' => $request->company,
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'thumbnail' => $logoName
        ];

        Product::create($data);
        // Session::flash('create');
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::firstWhere('id',$id);
        return view('backend.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::firstWhere('id',$id);
        $categories = Category::get();
        $subcategories = SubCategory::get();
        $companies = Company::get();
        return view ('backend.product.edit',compact('product','categories','subcategories','companies'));
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
       // return $request->all();
       $request->validate([
        'product_name' => 'required',

    ]);

    $logoName = null;
    if ($request->file('thumbnail')) {
        $extention = $request->file('thumbnail')->getClientOriginalExtension();
        $uniquename = uniqid().'.'.$extention;

        $request->file('thumbnail')->storeAs(
            'public/product',
            $uniquename
        );
        $logoName = $uniquename;
    }


    if($logoName){
        $data = [
            'product_name' => $request->product_name,
            'description' => $request->description,
            // 'user_id' => Auth::user()->id,
            'expire_date' => $request->expire_date,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'company' => $request->company,
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'thumbnail' => $logoName
        ];

        $file = Product::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('public')->delete('product/' . $file);
        }


        Product::firstwhere('id', $id)->update($data);
        // Session::flash('update');
        return redirect()->route('product.index');
    }else{
        $data = [
            'product_name' => $request->product_name,
            'description' => $request->description,
            // 'user_id' => Auth::user()->id,
            'expire_date' => $request->expire_date,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'company' => $request->company,
            'category' => $request->category,
            'subcategory' => $request->subcategory,
        ];
        Product::firstwhere('id', $id)->update($data);
        return redirect()->route('product.index');

    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Product::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('public')->delete('product/' . $file);
        }
        Product::firstwhere('id', $id)->delete();
        return redirect()->route('product.index');
    }
}
