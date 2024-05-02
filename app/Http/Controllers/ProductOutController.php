<?php

namespace App\Http\Controllers;

use App\Models\Products_out;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;

class ProductOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products_out::orderBy('created_at', 'DESC')->get();
        return view('products_out.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil data kategori unik dari tabel products_out
        $categories = Products_out::select('category')->distinct()->get();
        
        // Buat array kosong untuk opsi kategori
        $categoryOptions = [];
    
        // Loop untuk mengisi array dengan data kategori
        foreach ($categories as $category) {
            $categoryOptions[$category->category] = $category->category;
        }
    
        return view('products_out.create', ['categories' => $categoryOptions]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Products_out::create($request->all());
 
        return redirect()->route('products_out')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Products_out::findOrFail($id);
  
        return view('products_out.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Products_out::findOrFail($id);
    
        // Ambil data kategori unik dari tabel products
        $categories = Products_out::distinct()->pluck('category');
        
        // Kirim data product dan categories ke view
        return view('products_out.edit', compact('product', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products_out::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products_out')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products_out::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products_out')->with('success', 'product deleted successfully');
    }

    public function productOutPrintPDF()
    {
        $user = Auth::user();
        $level = Auth::user();
        $products = Products_out::all();
    
        $pdf = new Dompdf();
        $pdf->loadHtml(view('products_out.productsOutPrint', [
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
        return $pdf->stream('products-outcome-list_' . date('Y-m-d_H-i-s') . '.pdf');
    }
    

    public function totalProductsOutPrintPDF()
    {   
        $user = Auth::user();
        $level = Auth::user();
        $totalElectronics = Products_out::where('category', 'Electronic')->count();
        $totalTools = Products_out::where('category', 'Tool')->count();
        $totalFurniture = Products_out::where('category', 'Furniture')->count();
    
        $pdf = new Dompdf();
        $pdf->loadHtml(view('products_out.totalProductsOutPrint', [
            'user' => $user,
            'level' => $level,
            'totalElectronics' => $totalElectronics,
            'totalTools' => $totalTools,
            'totalFurniture' => $totalFurniture,
            'date' => date('Y-m-d H:i:s'),
        ]));
    
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        return $pdf->stream('total_products_out_' . date('Y-m-d') . '.pdf');
    }
    
}
