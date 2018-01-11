<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Inventory\Models\Inventory;
use Stevebauman\Inventory\Models\Metric;
use Stevebauman\Inventory\Models\Category;


class InventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
    
        $this->middleware('auth');

    }

    public function index()
    {

        $inventories = Inventory::with('category')->get();


        return view('inventory.inventories', compact('inventories'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate(request(),[

                'metric_id'     => 'required',
                'category_id'   => 'required',
                'name'          => 'required|string|max:200',
                'description'   => 'string'

            ]);

        Inventory::create([

                'metric_id'     => request('metric_id'),
                'category_id'   => request('category_id'),
                'name'          => request('name'),
                'description'   => request('description')

            ]);

        return redirect('inventories');

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
    public function edit(Inventory $inventory)
    {
        return view('inventories.edit', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        
        $inventory->update($request->all());

        return redirect('inventories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        
        $inventory->delete();

        return redirect('inventories');

    }
}
