<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Call of Duty' . $i,
                'slug' => 'call-of-duty-' . $i,
                'details' => 'A fast paced first person shooter game',
                'price' => rand(1000, 5000),
                'category_id' => 1,
                'image' => 'products/dummy/image0.jpg',
                'images' => '["products/dummy/image1.jpg", "products/dummy/image1.jpg", "products/dummy/image1.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Assassin\'s Creed' . $i,
                'slug' => 'assassins-creed-' . $i,
                'details' => 'A stealth action adventure game',
                'price' => rand(1000, 5000),
                'category_id' => 2,
                'image' => 'products/dummy/image0.jpg',
                'images' => '["products/dummy/image0.jpg", "products/dummy/image0.jpg", "products/dummy/image0.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'FIFA 19' . $i,
                'slug' => 'fifa-19-' . $i,
                'details' => 'The best football game in the world',
                'price' => rand(1000, 3000),
                'category_id' => 3,
                'image' => 'products/dummy/image2.jpg',
                'images' => '["products/dummy/image2.jpg", "products/dummy/image2.jpg", "products/dummy/image2.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Mario Bros' . $i,
                'slug' => 'mario-bros-' . $i,
                'details' => 'A fun adventure game for kids',
                'price' => rand(1000, 3999),
                'category_id' => 4,
                'image' => 'products/dummy/image3.jpg',
                'images' => '["products/dummy/image3.jpg", "products/dummy/image3.jpg", "products/dummy/image3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Civilization' . $i,
                'slug' => 'civilization-' . $i,
                'details' => 'Build an empire to stand the test of time',
                'price' => rand(1000, 2999),
                'category_id' => 5,
                'image' => 'products/dummy/image4.jpg',
                'images' => '["products/dummy/image4.jpg", "products/dummy/image4.jpg", "products/dummy/image4.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'The Witcher' . $i,
                'slug' => 'the-witcher-' . $i,
                'details' => 'Hunt monsters in a medieval world',
                'price' => rand(1000, 3999),
                'category_id' => 6,
                'image' => 'products/dummy/image5.jpg',
                'images' => '["products/dummy/image5.jpg", "products/dummy/image5.jpg", "products/dummy/image5.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        $products = Product::all();
        foreach ($products as $product) {
            if($product->id % 3 == 0) {
                $product->featured = true;
                $product->save();
            }
        }
    }
}
