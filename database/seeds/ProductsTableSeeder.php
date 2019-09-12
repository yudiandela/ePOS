<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('products')->insert([
            [
                'name'        => 'Notebook Basic 15',
                'slug'        => time() . '-' . Str::slug('Notebook Basic 15'),
                'description' => 'Notebook Basic 15 with 2,80 GHz quad core, 15" LCD, 4 GB DDR3 RAM, 500 GB Hard Disc, Windows 8 Pro',
                'stock'       => 30,
                'price'       => 95600,
            ],
            [
                'name'        => 'Notebook Basic 17',
                'slug'        => time() . '-' . Str::slug('Notebook Basic 17'),
                'description' => 'Notebook Basic 17 with 2,80 GHz quad core, 17" LCD, 4 GB DDR3 RAM, 500 GB Hard Disc, Windows 8 Pro',
                'stock'       => 29,
                'price'       => 124900,
            ],
            [
                'name'        => 'Notebook Basic 18',
                'slug'        => time() . '-' . Str::slug('Notebook Basic 18'),
                'description' => 'Notebook Basic 18 with 2,80 GHz quad core, 18" LCD, 8 GB DDR3 RAM, 1000 GB Hard Disc, Windows 8 Pro',
                'stock'       => 28,
                'price'       => 157000,
            ],
            [
                'name'        => 'Notebook Basic 19',
                'slug'        => time() . '-' . Str::slug('Notebook Basic 19'),
                'description' => 'Notebook Basic 19 with 2,80 GHz quad core, 19" LCD, 8 GB DDR3 RAM, 1000 GB Hard Disc, Windows 8 Pro',
                'stock'       => 32,
                'price'       => 165000,
            ],
            [
                'name'        => 'ITelO Vault',
                'slug'        => time() . '-' . Str::slug('ITelO Vault'),
                'description' => 'Digital Organizer with State-of-the-Art Storage Encryption',
                'stock'       => 32,
                'price'       => 29900,
            ],
            [
                'name'        => 'Notebook Professional 15',
                'slug'        => time() . '-' . Str::slug('Notebook Professional 15'),
                'description' => 'Notebook Professional 15 with 2,80 GHz quad core, 15" Multitouch LCD, 8 GB DDR3 RAM, 500 GB SSD - DVD-Writer (DVD-R/+R/-RW/-RAM),Windows 8 Pro',
                'stock'       => 33,
                'price'       => 199900,
            ],
            [
                'name'        => 'Notebook Professional 17',
                'slug'        => time() . '-' . Str::slug('Notebook Professional 17'),
                'description' => 'Notebook Professional 17 with 2,80 GHz quad core, 17" Multitouch LCD, 8 GB DDR3 RAM, 500 GB SSD - DVD-Writer (DVD-R/+R/-RW/-RAM),Windows 8 Pro',
                'stock'       => 33,
                'price'       => 229900,
            ],
            [
                'name'        => 'ITelO Vault Net',
                'slug'        => time() . '-' . Str::slug('ITelO Vault Net'),
                'description' => 'Digital Organizer with State-of-the-Art Encryption for Storage and Network Communications',
                'stock'       => 10,
                'price'       => 45900,
            ],
            [
                'name'        => 'ITelO Vault SAT',
                'slug'        => time() . '-' . Str::slug('ITelO Vault SAT'),
                'description' => 'Digital Organizer with State-of-the-Art Encryption for Storage and Secure Stellite Link',
                'stock'       => 11,
                'price'       => 14900,
            ],
            [
                'name'        => 'Comfort Easy',
                'slug'        => time() . '-' . Str::slug('Comfort Easy'),
                'description' => '32 GB Digital Assistant with high-resolution color screen',
                'stock'       => 84,
                'price'       => 167900,
            ],
            [
                'name'        => 'Comfort Senior',
                'slug'        => time() . '-' . Str::slug('Comfort Senior'),
                'description' => '64 GB Digital Assistant with high-resolution color screen and synthesized voice output',
                'stock'       => 80,
                'price'       => 51200,
            ],
            [
                'name'        => 'e-Book Reader ReadMe',
                'slug'        => time() . '-' . Str::slug('e-Book Reader ReadMe'),
                'description' => '6-Inch E Ink Screen, Access To e-book Store, Adjustable Font Styles and Sizes, Stores Up To 1,000 Books',
                'width'       => 48,
                'price'       => 33000,
            ],
            [
                'name'        => 'Tablet Pouch',
                'slug'        => time() . '-' . Str::slug('Tablet Pouch'),
                'description' => 'Stylish tablet pouch, protects from scratches, color               : black',
                'width'       => 25,
                'price'       => 20000,
            ],
            [
                'name'        => 'Smartphone Cover',
                'slug'        => time() . '-' . Str::slug('Smartphone Cover'),
                'description' => 'Durable high quality plastic bump-sleeve, lightweight, protects from scratches, rubber coating, multiple colors available, Accurate design and cut-outs for your device, snap-on design',
                'width'       => 48,
                'price'       => 15000,
            ],
            [
                'name'        => 'Camcorder View',
                'slug'        => time() . '-' . Str::slug('Camcorder View'),
                'description' => '1920x1080 Full HD, image stabilization reduces blur, 27x Optical / 32x Extended Zoom, wide angle Lens, 2.7\' wide LCD display',
                'width'       => 48,
                'price'       => 1388000,
            ],
            [
                'name'        => 'Mini Tablet',
                'slug'        => time() . '-' . Str::slug('Mini Tablet'),
                'description' => '7 inch 1280x800 HD display (216 ppi), Quad-core processor, 16 GB internal storage, 4325 mAh battery (Up to 8 hours of active use)',
                'width'       => 48,
                'price'       => 833000,
            ],
            [
                'name'        => 'Smartphone Alpha',
                'slug'        => time() . '-' . Str::slug('Smartphone Alpha'),
                'description' => '7 inch 1280x800 HD display (216 ppi), Quad-core processor, 16 GB internal storage (actual formatted capacity will be less), 4325 mAh battery (Up to 8 hours of active use), white or black',
                'width'       => 48,
                'price'       => 599000,
            ],
            [
                'name'        => 'Smartphone Leather Case',
                'slug'        => time() . '-' . Str::slug('Smartphone Leather Case'),
                'description' => 'Button Clasp, Quality Material, 100% Leather, compatible with many smartphone models',
                'width'       => 48,
                'price'       => 25000,
            ],
            [
                'name'        => 'Astro Laptop 1516',
                'slug'        => time() . '-' . Str::slug('Astro Laptop 1516'),
                'description' => 'Flexible Laptop with 2,5 GHz Quad Core, 15\' HD TN, 16 GB DDR SDRAM, 256 GB SSD, Windows 10 Pro',
                'width'       => 30,
                'price'       => 989000,
            ],
            [
                'name'        => 'Astro Phone 6',
                'slug'        => time() . '-' . Str::slug('Astro Phone 6'),
                'description' => '6 inch 1280x800 HD display (216 ppi), Quad-core processor, 8 GB internal storage (actual formatted capacity will be less), 3050 mAh battery (Up to 8 hours of active use), grey or black',
                'width'       => 8,
                'price'       => 649000,
            ],
            [
                'name'        => 'Benda Laptop 1408',
                'slug'        => time() . '-' . Str::slug('Benda Laptop 1408'),
                'description' => 'Flexible Laptop with 2,5 GHz Dual Core, 14\' HD+ TN, 8 GB DDR SDRAM, 324 GB SSD, Windows 10 Pro',
                'width'       => 30,
                'price'       => 976000,
            ],
            [
                'name'        => 'Bending Screen 21HD',
                'slug'        => time() . '-' . Str::slug('Bending Screen 21HD'),
                'description' => 'Optimum Hi-Resolution Widescreen max. 1920 x 1080 @ 85Hz, Dot Pitch: 0.27mm, HDMI, Discontinued-Sub',
                'width'       => 37,
                'price'       => 250000,
            ],
            [
                'name'        => 'Broad Screen 22HD',
                'slug'        => time() . '-' . Str::slug('Broad Screen 22HD'),
                'description' => 'Optimum Hi-Resolution Widescreen max. 2048 x 1080 @ 85Hz, Dot Pitch: 0.27mm, HDMI, Discontinued-Sub',
                'width'       => 39,
                'price'       => 270000,
            ],
            [
                'name'        => 'Cerdik Phone 7',
                'slug'        => time() . '-' . Str::slug('Cerdik Phone 7'),
                'description' => '7 inch 1280x800 HD display (216 ppi), Quad-core processor, 16 GB internal storage (actual formatted capacity will be less), 4325 mAh battery (Up to 8 hours of active use), white or black',
                'width'       => 9,
                'price'       => 549000,
            ],
            [
                'name'        => 'Cepat Tablet 10.5',
                'slug'        => time() . '-' . Str::slug('Cepat Tablet 10.5'),
                'description' => '10.5-inch Multitouch HD Screen (1280 x 800), 16GB Internal Memory, Wireless N Wi-Fi; Bluetooth, GPS Enabled, 1GHz Dual-Core Processor',
                'width'       => 48,
                'price'       => 549000,
            ],
            [
                'name'        => 'Cepat Tablet 8',
                'slug'        => time() . '-' . Str::slug('Cepat Tablet 8'),
                'description' => '8-inch Multitouch HD Screen (2000 x 1500) 32GB Internal Memory, Wireless N Wi-Fi, Bluetooth, GPS Enabled, 1.5 GHz Quad-Core Processor',
                'width'       => 38,
                'price'       => 529000,
            ]
        ]);
    }
}
