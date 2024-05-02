<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products_in;
use App\Models\Products_out;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalProductsIn = Products_in::count();
        $totalElectronicIn = Products_in::where('category', 'Electronic')->count();
        $totalToolIn = Products_in::where('category', 'Tool')->count();
        $totalFurnitureIn = Products_in::where('category', 'Furniture')->count();

        $totalProductsOut = Products_out::count();
        $totalElectronicOut = Products_out::where('category', 'Electronic')->count();
        $totalToolOut = Products_out::where('category', 'Tool')->count();
        $totalFurnitureOut = Products_out::where('category', 'Furniture')->count();
    
        return view('dashboard', compact('totalProductsIn', 'totalElectronicIn', 'totalToolIn', 'totalFurnitureIn', 'totalProductsOut', 'totalElectronicOut', 'totalToolOut', 'totalFurnitureOut'));
    }
    

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
