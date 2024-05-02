<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products_in;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;

class ProductInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products_in::orderBy('created_at', 'DESC')->get();
        return view('products_in.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil data kategori unik dari tabel products_in
        $categories = Products_in::select('category')->distinct()->get();
        
        // Buat array kosong untuk opsi kategori
        $categoryOptions = [];
    
        // Loop untuk mengisi array dengan data kategori
        foreach ($categories as $category) {
            $categoryOptions[$category->category] = $category->category;
        }
    
        return view('products_in.create', ['categories' => $categoryOptions]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Products_in::create($request->all());
 
        return redirect()->route('products_in')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Products_in::findOrFail($id);
  
        return view('products_in.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Products_in::findOrFail($id);
    
        // Ambil data kategori unik dari tabel products
        $categories = Products_in::distinct()->pluck('category');
        
        // Kirim data product dan categories ke view
        return view('products_in.edit', compact('product', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products_in::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products_in')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products_in::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products_in')->with('success', 'product deleted successfully');
    }

    public function productStockPrintPDF()
    {
        $user = Auth::user();
        $level = Auth::user();
        $products = Products_in::all();
    
        $pdf = new Dompdf();
        $pdf->loadHtml(view('products_in.productsStockPrint', [
            'user' => $user,
            'level' => $level,
            'products' => $products,
            'date' => date('Y-m-d H:i:s'),
        ]));
    
        // Set paper size and orientation
        $pdf->setPaper('A4', 'landscape');
    
        // Render PDF (optional: save to file)
        $pdf->render();
    
        // Output PDF to browser
        return $pdf->stream('products-stock-list_' . date('Y-m-d_H-i-s') . '.pdf');
    }
    

    public function totalProductsPrintPDF()
    {   
        $user = Auth::user();
        $level = Auth::user();
        $totalElectronics = Products_in::where('category', 'Electronic')->count();
        $totalTools = Products_in::where('category', 'Tool')->count();
        $totalFurniture = Products_in::where('category', 'Furniture')->count();
    
        $pdf = new Dompdf();
        $pdf->loadHtml(view('products_in.totalProductsPrint', [
            'user' => $user,
            'level' => $level,
            'totalElectronics' => $totalElectronics,
            'totalTools' => $totalTools,
            'totalFurniture' => $totalFurniture,
            'date' => date('Y-m-d H:i:s'),
        ]));
    
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        return $pdf->stream('total_products_in_' . date('Y-m-d') . '.pdf');
    }
    
}
