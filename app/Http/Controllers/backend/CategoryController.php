<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view ('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'category_name' => 'required',

        ]);

        $logoName = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/category',
                $uniquename
            );
            $logoName = $uniquename;
        }

        $data = [
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'thumbnail' => $logoName
        ];

        Category::create($data);
        // Session::flash('create');
        return redirect()->route('category.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::firstWhere('id',$id);
        return view('backend.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::firstWhere('id',$id);
        return view ('backend.category.edit',compact('category'));
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
            'category_name' => 'required',

        ]);

        $logoName = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/category',
                $uniquename
            );
            $logoName = $uniquename;
        }


        if($logoName){
            $data = [
                'category_name' => $request->category_name,
                // 'user_id' => Auth::user()->id,
                'thumbnail' => $logoName
            ];

            $file = Category::firstwhere('id', $id)->thumbnail;
            if($file){
                Storage::disk('public')->delete('category/' . $file);
            }


            Category::firstwhere('id', $id)->update($data);
            // Session::flash('update');
            return redirect()->route('category.index');
        }else{
            $data = [
                'category_name' => $request->category_name,
                // 'user_id' => Auth::user()->id,
            ];
            Category::firstwhere('id', $id)->update($data);
            return redirect()->route('category.index');

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
        $file = Category::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('public')->delete('category/' . $file);
        }
        Category::firstwhere('id', $id)->delete();
        return redirect()->route('category.index');
    }
}
