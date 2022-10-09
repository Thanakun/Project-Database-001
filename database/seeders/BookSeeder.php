<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
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
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157947/Thumbnail/book_detail_large.gif?2',
                'price' => 171,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100
            ],
            [
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157948/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100
            ]
            
        ];
        

        foreach ($books as $key => $value) {

            if(!DB::table('authors')->where('name',$value['author_name'])->exists())
                Author::create(['name' => $value['author_name']]);

            if(!DB::table('books')->where('name',$value['name'])->exists()){
                $value['author_id'] = DB::table('authors')->where('name',$value['author_name'])->pluck('id')[0];
                Book::create($value);
            }
            
        }
    }
}