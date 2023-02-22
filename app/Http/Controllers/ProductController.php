<?php

namespace App\Http\Controllers;
$output = new \Symfony\Component\Console\Output\ConsoleOutput(2);
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = \App\Models\Product::all();

    return view('shoppingCart', compact('products'));
        
    }

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $products = \App\Models\Product::all();

    return view('shoppingGrid', compact('products'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image'=>'required',
          
        ]);
        $product = new \App\Models\Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
        }
        //$product->image = $request->image;
        echo $product;
        $product->save();
        $value = session('success');
        //return "C'est bien enregistré !";
        //$car = Product::create($validatedData);
    //dd($car);
    //$output->writeln('hello');
        return redirect('/addProduct')->with('success', 'product créer avec succèss');
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
        $product = \App\Models\Product ::findOrFail($id);
        $product->delete();
    
        return redirect('shoppingCart')->with('success', 'product supprimer avec succèss');
    }
}
