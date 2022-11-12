<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::get();
        return view ('backend.sub-category.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.sub-category.create');
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
            'subcategory_name' => 'required',

        ]);

        $logoName = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/subcategory',
                $uniquename
            );
            $logoName = $uniquename;
        }

        $data = [
            'subcategory_name' => $request->subcategory_name,
            'user_id' => Auth::user()->id,
            'thumbnail' => $logoName
        ];

        SubCategory::create($data);
        // Session::flash('create');
        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = SubCategory::firstWhere('id',$id);
        return view('backend.sub-category.show', compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = SubCategory::firstWhere('id',$id);
        return view ('backend.sub-category.edit',compact('subcategory'));
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
            'subcategory_name' => 'required',

        ]);

        $logoName = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/subcategory',
                $uniquename
            );
            $logoName = $uniquename;
        }


        if($logoName){
            $data = [
                'subcategory_name' => $request->subcategory_name,
                // 'user_id' => Auth::user()->id,
                'thumbnail' => $logoName
            ];

            $file = SubCategory::firstwhere('id', $id)->thumbnail;
            if($file){
                Storage::disk('public')->delete('subcategory/' . $file);
            }


            SubCategory::firstwhere('id', $id)->update($data);
            // Session::flash('update');
            return redirect()->route('subcategory.index');
        }else{
            $data = [
                'subcategory_name' => $request->subcategory_name,
                // 'user_id' => Auth::user()->id,
            ];
            SubCategory::firstwhere('id', $id)->update($data);
            return redirect()->route('subcategory.index');

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
        $file = SubCategory::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('public')->delete('subcategory/' . $file);
        }
        SubCategory::firstwhere('id', $id)->delete();
        return redirect()->route('subcategory.index');
    }
}
