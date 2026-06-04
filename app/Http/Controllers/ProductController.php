<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $products = [
        [
            'id' => 1,
            'nama_layanan' => 'Website Development',
            'deskripsi' => 'Pembuatan website company profile dan landing page.',
            'harga' => 5000000,
            'kategori' => 'Web Development'
        ],
        [
            'id' => 2,
            'nama_layanan' => 'Mobile App Development',
            'deskripsi' => 'Pengembangan aplikasi Android dan iOS.',
            'harga' => 15000000,
            'kategori' => 'Mobile Development'
        ],
        [
            'id' => 3,
            'nama_layanan' => 'UI/UX Design',
            'deskripsi' => 'Desain antarmuka dan pengalaman pengguna aplikasi.',
            'harga' => 3000000,
            'kategori' => 'Design'
        ]
    ];

    public function index() {
        // return $this->products;
        return view('products.index', ['products' => $this->products]);
    }

    public function create() {
        return view('products.store');
    }

    public function store(Request $request) {
        $newProduct = [
            'id' => count($this->products) + 1,
            'nama_layanan' => $request->nama_layanan,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'kategori' => $request->kategori
        ];

        // INSERT NEW PRODUCT TO ARRAY
        $this->products[] = $newProduct;

        return response()->json([
            'status' => 'success',
            'message' => 'Product created successfully',
            'data' => $newProduct,
            'completeData' => $this->products
        ], 201);
    }

    public function show($id) {
        foreach($this->products as $product) {
            if ($product['id'] == $id) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Product Ditemukan',
                    'data' => $product
                ]);
            }
        }
    }

    public function edit($id) {
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                return view('products.edit', ['product' => $product]);
            }
        }
    }

    public function update(Request $request, $id)
    {
        $updatedProduct = [
            'id' => $id,
            'nama_layanan' => $request->nama_layanan,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
        ];

        return response()->json([
            'status' => 'success',
            'message' => 'Product updated successfully',
            'data' => $updatedProduct
        ], 201);
    }
}
