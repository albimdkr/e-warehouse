<?php

namespace Database\Seeders;

use App\Models\Products_out;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyProductsOut extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $dataProductsOut = [
            [
                'title' => 'WebCam',
                'price' => '150.0000',
                'product_code' => '001',
                'description' => 'This is Webcam 720px',
                'category' => 'Electronic',
            ],
            [
                'title' => 'Soldier',
                'price' => '50.0000',
                'product_code' => '002',
                'description' => 'This is Soldier 300Wat',
                'category' => 'Tool',
            ],
            [
                'title' => 'Plant',
                'price' => '30.0000',
                'product_code' => '003',
                'description' => 'This is Plant Nature',
                'category' => 'Furniture',
            ]
        ];

        foreach ($dataProductsOut as $key => $val) {
            Products_out::create($val);
        }
    }
}
