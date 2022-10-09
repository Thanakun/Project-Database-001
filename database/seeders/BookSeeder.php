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
                'ISBN' => '9786163371140',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 1',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157947/Thumbnail/book_detail_large.gif?2',
                'price' => 171,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163371539',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157948/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163372079',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 3',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157949/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 438,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-12-22 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163372888',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 4',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157950/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 441,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2016-07-30 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163373229',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 5',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157951/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 409,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2016-12-07 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163373601',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 6',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/158862/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 409,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2017-5-20 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163374059',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 7',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/158863/Thumbnail/book_detail_large.gif?2',
                'price' => 216,
                'pages_num' => 397,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2017-09-09 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163374929',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 8',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/158864/Thumbnail/book_detail_large.gif?2',
                'price' => 216,
                'pages_num' => 413,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2018-05-14 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163371539',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157948/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163371539',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157948/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163371539',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157948/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163371539',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157948/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163371539',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157948/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163371539',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/157948/Thumbnail/book_detail_large.gif?2',
                'price' => 198,
                'pages_num' => 449,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2015-10-1 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164474093',
                'name' => 'Fly Me to The Moon Volume 1',
                'cover' => 'https://cdn1.mangaqube.com/O47BADSHBM9JDA58_l',
                'price' => 80,
                'pages_num' => 198,
                'publisher_name' => 'LuckPim',
                'publisher_date' => '2019-03-30 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kenjiro Hata',
                'stock' => 100,
                'manga_flag' => true,
                'novel_flag' => false
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