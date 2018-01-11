<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Inventory\Models\InventoryStock;


class StocksController extends Controller
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

        $stocks = InventoryStock::oldest()->get();
        
        return view('inventory.stocks', compact('stocks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [

                'inventory_id'  => 'required|integer',
                'location_id'   => 'required|integer',
                'quantity'      => 'required',
                'cost'          => 'required',
                'reason'        => 'string'

            ]);

        InventoryStock::create([

                'inventory_id' => request('inventory_id'),
                'location_id'  => request('location_id'),
                'quantity'     => request('quantity'),
                'cost'         => request('cost'),
                'reason'       => request('reason')

            ]);

        return redirect('stocks');

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
    public function edit(InventoryStock $stock)
    {
        return view('stocks.edit', compact('stock'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryStock $stock)
    {
        
        $stock->update($request->all());

        return redirect('stocks');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventoryStock $stock)
    {
        
        $stock->delete();

        return redirect('stocks');

    }
}
