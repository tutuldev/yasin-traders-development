<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::get();
        return view ('backend.company.index',compact('companies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.company.create');
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
            'company_name' => 'required',

        ]);

        $logoName = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/company',
                $uniquename
            );
            $logoName = $uniquename;
        }

        $data = [
            'company_name' => $request->company_name,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'thumbnail' => $logoName
        ];

        Company::create($data);
        // Session::flash('create');
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::firstWhere('id',$id);
        return view('backend.company.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::firstWhere('id',$id);
        return view ('backend.company.edit',compact('company'));
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
            'company_name' => 'required',

        ]);

        $logoName = null;
        if ($request->file('thumbnail')) {
            $extention = $request->file('thumbnail')->getClientOriginalExtension();
            $uniquename = uniqid().'.'.$extention;

            $request->file('thumbnail')->storeAs(
                'public/company',
                $uniquename
            );
            $logoName = $uniquename;
        }


        if($logoName){
            $data = [
                'company_name' => $request->company_name,
                'description' => $request->description,
                // 'user_id' => Auth::user()->id,
                'thumbnail' => $logoName
            ];

            $file = Company::firstwhere('id', $id)->thumbnail;
            if($file){
                Storage::disk('public')->delete('company/' . $file);
            }


            Company::firstwhere('id', $id)->update($data);
            // Session::flash('update');
            return redirect()->route('company.index');
        }else{
            $data = [
                'company_name' => $request->company_name,
                'description' => $request->description,
                // 'user_id' => Auth::user()->id,
            ];
            Company::firstwhere('id', $id)->update($data);
            return redirect()->route('company.index');

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
        $file = Company::firstwhere('id', $id)->thumbnail;
        if($file){
            Storage::disk('public')->delete('company/' . $file);
        }
        Company::firstwhere('id', $id)->delete();
        return redirect()->route('company.index');
    }
}
