<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Product;

class HelloWorldController extends Controller
{

    use ValidatesRequests;

    public function All_product() {
        $product = Product::all();
        return view ('index', ['Product' => $product]);
    }

    public function store_Product(Request $request) {
        
        $validated = $request->validate([
            'NamaProduct' => 'required|string|max:225',
            'Jenis' =>'required|string|max:255',
            'Kadaluarsa' => 'required|string|date_format:m/y',
            'Jumlah' => 'required|integer|min:0|max:1000'
        ]);

        Product::create($validated);

        return redirect('/'); 
    }

    public function get_product_by_id($id) {
        $product = Product::findOrFail($id);
        return view('editProduct', ['product' => $product]);
    }

    public function update_product(Request $request, $id) 
    {
        $validated = $request->validate ([
            'NamaProduct' => 'required|string|max:255',
            'Jenis' =>'required|string|max:255',
            'Kadaluarsa' => 'required|date_format:m/y',
            'Jumlah' => 'required|integer|min:0|max:1000'
        ]);


        $product = Product::FindOrFail($id);
        $product->update($validated);

        return redirect('/'); 
    }

    public function delete_product($id) {
        Product::where('id', $id)->delete();
        return redirect('/');
    }
}
