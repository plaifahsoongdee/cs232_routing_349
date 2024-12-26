<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'name' => "Nuigurumi Mascot Sukuna",
        'description' => 'Adorable plush mascot of Sukuna from Jujutsu Kaisen with high-quality stitching and details.',
        'price' => 445 ,'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/06/4549743873947.jpg'],
    ['id' => 2, 'name' => 'Nuigurumi Mascot Choso',
        'description' => 'Choso plush mascot from Jujutsu Kaisen, made with soft fabric and intricate design.',
        'price' => 445, 'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/06/4549743873930.jpg'],
    ['id' => 3, 'name' => 'Nuigurumi Mascot Nanami',
        'description' => 'Nanami plush mascot from Jujutsu Kaisen with fine embroidery and durable materials.',
        'price' => 423, 'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/06/4549743873916.jpg'],
    ['id' => 4, 'name' => 'Nuigurumi Mascot Megumi',
        'description' => 'Megumi plush mascot from Jujutsu Kaisen, designed with love for detailed craftsmanship.',
        'price' => 423, 'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/06/4549743873893.jpg'],
    ['id' => 5, 'name' => 'Nuigurumi Mascot Yuji',
        'description' => 'Yuji plush mascot from Jujutsu Kaisen, crafted for fans of the series with soft, high-quality fabric.',
        'price' => 450, 'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/06/4549743873886.jpg'],
    ['id' => 6, 'name' => 'Nuigurumi Mascot Gojo',
        'description' => 'Gojo plush mascot from Jujutsu Kaisen, featuring detailed stitching and a lovable design.',
        'price' => 600, 'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/06/4550621071836.jpg'],
    ['id' => 7, 'name' => 'Nuigurumi Mascot Inumaki',
        'description' => 'Inumaki plush mascot from Jujutsu Kaisen, perfect for collectors with its cuddly fabric and careful details.',
        'price' => 600, 'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/06/4550621071812.jpg'],
    ['id' => 8, 'name' => 'Nuigurumi Mascot Yuta',
        'description' => 'Yuta plush mascot from Jujutsu Kaisen, crafted with premium materials and high attention to detail.',
        'price' => 610, 'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/06/4550621071799.jpg'],
    ['id' => 9, 'name' => 'Nuigurumi Mascot Geto',
        'description' => 'Geto plush mascot from Jujutsu Kaisen, designed with precision to capture his iconic look.',
        'price' => 640, 'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/12/4550621238161-375x375.jpg'],
    ['id' => 10, 'name' => 'Nuigurumi Mascot Suit ver. Gojo',
        'description' => 'Gojo plush mascot in his iconic suit, a must-have for fans with intricate design and premium softness.',
        'price' => 650, 'image' => 'https://animatebkk-online.com/wp-content/uploads/2024/12/4550621238154.jpg'],
];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index',['products' => $this->products]);
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
    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id',$id);

        if (!$product){
            abort(404, 'Product not found');
        }
        return Inertia::render('Products/Show', ['product' => $product]);
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
