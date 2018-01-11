<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Inventory\Models\Supplier;

class SuppliersController extends Controller
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
        $suppliers = Supplier::oldest()->get();

        return view('setup.suppliers', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
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

                'name'          => 'required|string|min:8|max:35',
                'address'       => 'required|string|max:40',
                'region'        => 'required|string|min:3',
                'city'          => 'required|string|min:3',
                'state'         => 'required|string|min:3',
                'country'       => 'required|string|min:3',
                'contact_title' => 'required',
                'contact_name'  => 'required|string|min:6',
                'contact_phone' => 'required|max:15',
                'contact_fax'   => 'required|max:15',
                'contact_email' => 'required|string|max:50|unique:suppliers'

            ]);

        Supplier::create($request->all());

        return redirect('suppliers');

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
    public function edit(Supplier $supplier)
    {

        return view('suppliers.edit', compact('supplier'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {

        $supplier->update($request->all());

        return redirect('suppliers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        
        $supplier->delete();

        return redirect('suppliers');

    }
}
