<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::create([
            'name' => 'iPhone 15',
            'description' => '6.1 Super Retina XDR display.
            Dynamic Island, a magical way to interact with iPhone.
            A16 Bionic chip with 5-core GPU.
            Up to 20 hours video playback.
            USB-C, supports USB 2.
            FaceTime service depends on network restrictions and is not available when on UAE networks.
            ',
            'price' => 294.990,
        ]);
        Product::create([
            'name' => 'samsung s23 ultra',
            'description' => 'Samsung Galaxy S23 Ultra 5G 256GB 12GB Green Dual Sim Smartphone  Middle East Version',
            'price' => 314.900,
        ]);
        Product::create([
            'name' => 'huawei p30 pro',
            'description' => 'Huawei P30 Pro 256GB Aurora 4G Dual Sim Smartphone VOG-L29',
            'price' => 257.609,
        ]);
    }
}
