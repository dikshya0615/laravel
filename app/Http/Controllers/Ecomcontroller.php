<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ecom;

class Ecomcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ecoms=Ecom::all();
        return view('admin.pages.product.index',compact('ecoms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ecom= new Ecom();
        $ecom->name=$request->name;
        $ecom->price=$request->price;
        $ecom->description=$request->description;
        $ecom->code=$request->code;
        $ecom->phone=$request->phone;
        $image =$request->img;
        $imageextension= $image->getClientOriginalExtension();
        $imgfilename= time().".".$imageextension;
        $image->move(('images'),$imgfilename);
        $ecom->image_filename=$imgfilename;
        $ecom->save();
        return redirect('/admin/dashboard');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ecom = Ecom::find($id);
        return view('admin.pages.product.edit',compact('ecom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ecom= Ecom::find($id);
        if($request->img){
            $request->validate([
                'img'=>'image|mimes:jpg,png,jpeg,webp,gif|max:500000000'
           ]);
           $image =$request->img;
        $imageextension= $image->getClientOriginalExtension();
        $imgfilename= time().".".$imageextension;
        $image->move(('images'),$imgfilename);
        $ecom->image_filename=$imgfilename;
        }
        $ecom->name=$request->name;
        $ecom->price=$request->price;
        $ecom->description=$request->description;
        $ecom->code=$request->code;
        $ecom->phone=$request->phone;
        $ecom->save();
        return redirect('/admin/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productdeletegar = Ecom::find($id);
        $productdeletegar->destroy($id);
        return redirect('/admin/dashboard');
    }
}
