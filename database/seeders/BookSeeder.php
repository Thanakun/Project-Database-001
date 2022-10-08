<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $books = [
            [
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 1',
                'description' => 'description text',
                'image' => 'https://cdn-local.mebmarket.com/meb/server1/157947/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '10-01-2015',
                'publisher_name' => 198,
                'publisher_name' => 198,
                'publisher_name' => 198,
                'stock' => 999
            ],
            [
                'name' => 'Apple iPhone 12',
                'description' => 'Apple Brand',
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                'stock' => 999,
                'price' => 500
            ]
            
        ];
        
        foreach ($books as $key => $value) {
            Book::create($value);
        }
    }
}