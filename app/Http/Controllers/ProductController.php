<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'description' => 'Product 1',
            'price' => 19.99,
            'quantity' => 10,
        ], [

            'id' => 2,
            'name' => 'Product 2',
            'description' => 'Product 2',
            'price' => 29.99,
            'quantity' => 5,
        ], [
            'id' => 3,
            'name' => 'Product 3',
            'description' => 'Product 3',
            'price' => 39.99,
            'quantity' => 8,
        ]
        ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return response()->json($this->products);

        return response()->json([
            "message" => "Display all products"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully."
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with ID:" . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id ." updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id ." deleted successfully"
        ]);
    }
}