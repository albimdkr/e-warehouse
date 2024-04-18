<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Dompdf\Dompdf;
use Dompdf\Options;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil data kategori unik dari tabel products
        $categories = Product::select('category')->distinct()->get();
        
        // Buat array kosong untuk opsi kategori
        $categoryOptions = [];
    
        // Loop untuk mengisi array dengan data kategori
        foreach ($categories as $category) {
            $categoryOptions[$category->category] = $category->category;
        }
    
        return view('products.create', ['categories' => $categoryOptions]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
 
        return redirect()->route('products')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
    
        // Ambil data kategori unik dari tabel products
        $categories = Product::distinct()->pluck('category');
        
        // Kirim data product dan categories ke view
        return view('products.edit', compact('product', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'product deleted successfully');
    }

    public function pdf()
    {
        $products = Product::all();

        $pdf = new Dompdf();
        $pdf->loadHtml(view('products.pdf', compact('products')));

        // (Optional) Set paper size and orientation
        $pdf->setPaper('A4', 'landscape');

        // Render PDF (optional: save to file)
        $pdf->render();

        // Output PDF to browser
        return $pdf->stream('products.pdf');
    }
}
