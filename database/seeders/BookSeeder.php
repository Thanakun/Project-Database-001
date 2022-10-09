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
                'ISBN' => '9786163375056',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 9',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/158866/Thumbnail/book_detail_large.gif?2',
                'price' => 216,
                'pages_num' => 446,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2018-8-11 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163376183',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 10',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/158867/Thumbnail/book_detail_large.gif?2',
                'price' => 216,
                'pages_num' => 429,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2019-10-19 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163376855',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 11',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/160792/Thumbnail/book_detail_large.gif?2',
                'price' => 216,
                'pages_num' => 461,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2020-7-29 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163377531',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 12',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/160793/Thumbnail/book_detail_large.gif?2',
                'price' => 216,
                'pages_num' => 457,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2021-05-22 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163377722',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 13',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/175129/Thumbnail/book_detail_large.gif?2',
                'price' => 216,
                'pages_num' => 429,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2021-12-03 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163378088',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 14',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/184356/Thumbnail/book_detail_large.gif?2',
                'price' => 216,
                'pages_num' => 432,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2022-02-07 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163378569',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 15',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/196197/Thumbnail/book_detail_large.gif?2',
                'price' => 216,
                'pages_num' => 453,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2022-05-27 00:00:00',
                'description' => 'description text',
                'author_name' => 'Nagatsuki Tappei',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163376602',
                'name' => 'Re:Zero - Restarting Life from Zero in Another World Volume 16',
                'cover' => 'https://fs.lnwfile.com/_/fs/_raw/pr/6j/nj.jpg',
                'price' => 216,
                'pages_num' => 432,
                'publisher_name' => 'A Plus',
                'publisher_date' => '2022-08-24 00:00:00',
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
            ],
            [
                'ISBN' => '9786164475892',
                'name' => 'Fly Me to The Moon Volume 2',
                'cover' => 'https://cdn1.mangaqube.com/KFAOU330EJ61FP70_l',
                'price' => 80,
                'pages_num' => 200,
                'publisher_name' => 'LuckPim',
                'publisher_date' => '2019-08-16 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kenjiro Hata',
                'stock' => 100,
                'manga_flag' => true,
                'novel_flag' => false
            ],
            [
                'ISBN' => '9786164477100',
                'name' => 'Fly Me to The Moon Volume 3',
                'cover' => 'https://cdn1.mangaqube.com/NXENQCDPC8WP658Q_l',
                'price' => 80,
                'pages_num' => 200,
                'publisher_name' => 'LuckPim',
                'publisher_date' => '2019-10-30 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kenjiro Hata',
                'stock' => 100,
                'manga_flag' => true,
                'novel_flag' => false
            ],
            [
                'ISBN' => '9786164478305',
                'name' => 'Fly Me to The Moon Volume 4',
                'cover' => 'https://cdn1.mangaqube.com/60ZSET5ZVKBIGNL6_l',
                'price' => 80,
                'pages_num' => 196,
                'publisher_name' => 'LuckPim',
                'publisher_date' => '2020-04-29 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kenjiro Hata',
                'stock' => 100,
                'manga_flag' => true,
                'novel_flag' => false
            ],
            [
                'ISBN' => '9786164474093',
                'name' => 'Fly Me to The Moon Volume 5',
                'cover' => 'https://cdn1.mangaqube.com/yaXGGoWRrPkKmGrM_l',
                'price' => 80,
                'pages_num' => 196,
                'publisher_name' => 'LuckPim',
                'publisher_date' => '2021-03-10 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kenjiro Hata',
                'stock' => 100,
                'manga_flag' => true,
                'novel_flag' => false
            ],
            [
                'ISBN' => '9786164473091',
                'name' => 'Fly Me to The Moon Volume 6',
                'cover' => 'https://cdn1.mangaqube.com/2ZTg7cmgDKbUqzop_l',
                'price' => 80,
                'pages_num' => 192,
                'publisher_name' => 'LuckPim',
                'publisher_date' => '2021-04-21 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kenjiro Hata',
                'stock' => 100,
                'manga_flag' => true,
                'novel_flag' => false
            ],
            [
                'ISBN' => '9786164474596',
                'name' => 'Fly Me to The Moon Volume 7',
                'cover' => 'https://cdn1.mangaqube.com/2dEihr20QwQTiwmb_l',
                'price' => 80,
                'pages_num' => 200,
                'publisher_name' => 'LuckPim',
                'publisher_date' => '2021-07-19 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kenjiro Hata',
                'stock' => 100,
                'manga_flag' => true,
                'novel_flag' => false
            ],
            [
                'ISBN' => '9786165744461',
                'name' => 'Fly Me to The Moon Volume 8',
                'cover' => 'https://cdn1.mangaqube.com/fiUWQoW9gHtAKw9N_l',
                'price' => 80,
                'pages_num' => 192,
                'publisher_name' => 'LuckPim',
                'publisher_date' => '2022-04-22 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kenjiro Hata',
                'stock' => 100,
                'manga_flag' => true,
                'novel_flag' => false
            ],
            [
                'ISBN' => '9786168105443',
                'name' => 'Welcome to the Classroom of the Elite Volume 1',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/95067/Thumbnail/book_detail_large.gif?11',
                'price' => 247,
                'pages_num' => 347,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2017-10-27 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786168105764',
                'name' => 'Welcome to the Classroom of the Elite Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/95068/Thumbnail/book_detail_large.gif?11',
                'price' => 243,
                'pages_num' => 330,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2018-3-20 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164640337',
                'name' => 'Welcome to the Classroom of the Elite Volume 3',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/95069/Thumbnail/book_detail_large.gif?11',
                'price' => 277,
                'pages_num' => 356,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2018-07-20 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164640696',
                'name' => 'Welcome to the Classroom of the Elite Volume 4',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/95072/Thumbnail/book_detail_large.gif?14',
                'price' => 293,
                'pages_num' => 364,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2018-10-22 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164641068',
                'name' => 'Welcome to the Classroom of the Elite Volume 4.5',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/95074/Thumbnail/book_detail_large.gif?12',
                'price' => 275,
                'pages_num' => 332,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2019-01-12 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164641525',
                'name' => 'Welcome to the Classroom of the Elite Volume 5',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/95076/Thumbnail/book_detail_large.gif?12',
                'price' => 284,
                'pages_num' => 347,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2019-04-30 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164641686',
                'name' => 'Welcome to the Classroom of the Elite Volume 6',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/97068/Thumbnail/book_detail_large.gif?10',
                'price' => 228,
                'pages_num' => 340,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2019-06-18 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164641983',
                'name' => 'Welcome to the Classroom of the Elite Volume 7',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/104880/Thumbnail/book_detail_large.gif?2',
                'price' => 279,
                'pages_num' => 326,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2019-10-08 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164642867',
                'name' => 'Welcome to the Classroom of the Elite Volume 7.5',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/116093/Thumbnail/book_detail_large.gif?5',
                'price' => 266,
                'pages_num' => 312,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2020-04-01 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164643116',
                'name' => 'Welcome to the Classroom of the Elite Volume 8',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/118456/Thumbnail/book_detail_large.gif?2',
                'price' => 275,
                'pages_num' => 260,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2020-04-25 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164643512',
                'name' => 'Welcome to the Classroom of the Elite Volume 9',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/126575/Thumbnail/book_detail_large.gif?2',
                'price' => 248,
                'pages_num' => 320,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2020-07-25 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164643789',
                'name' => 'Welcome to the Classroom of the Elite Volume 10',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/131941/Thumbnail/book_detail_large.gif?2',
                'price' => 275,
                'pages_num' => 320,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2020-10-02 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164644274',
                'name' => 'Welcome to the Classroom of the Elite Volume 11',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/139838/Thumbnail/book_detail_large.gif?4',
                'price' => 284,
                'pages_num' => 340,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2021-01-08 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786164644786',
                'name' => 'Welcome to the Classroom of the Elite Volume 11.5',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/148639/Thumbnail/book_detail_large.gif?2',
                'price' => 284,
                'pages_num' => 336,
                'publisher_name' => ' Phoenix',
                'publisher_date' => '2021-04-21 00:00:00',
                'description' => 'description text',
                'author_name' => 'Kinugasa Syougo',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163375391',
                'name' => 'How a Realist Hero Rebuilt The Kingdom Volume 1',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/169958/Thumbnail/book_detail_large.gif?2',
                'price' => 288,
                'pages_num' => 374,
                'publisher_name' => ' A Plus',
                'publisher_date' => '2018-11-16 00:00:00',
                'description' => 'description text',
                'author_name' => 'Dojyomaru',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163375681',
                'name' => 'How a Realist Hero Rebuilt The Kingdom Volume 2',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/169959/Thumbnail/book_detail_large.gif?6',
                'price' => 288,
                'pages_num' => 358,
                'publisher_name' => ' A Plus',
                'publisher_date' => '2019-04-27 00:00:00',
                'description' => 'description text',
                'author_name' => 'Dojyomaru',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163376367',
                'name' => 'How a Realist Hero Rebuilt The Kingdom Volume 3',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/169960/Thumbnail/book_detail_large.gif?2',
                'price' => 288,
                'pages_num' => 365,
                'publisher_name' => ' A Plus',
                'publisher_date' => '2019-10-26 00:00:00',
                'description' => 'description text',
                'author_name' => 'Dojyomaru',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163376558',
                'name' => 'How a Realist Hero Rebuilt The Kingdom Volume 4',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/169962/Thumbnail/book_detail_large.gif?2',
                'price' => 288,
                'pages_num' => 359,
                'publisher_name' => ' A Plus',
                'publisher_date' => '2020-04-29 00:00:00',
                'description' => 'description text',
                'author_name' => 'Dojyomaru',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163377081',
                'name' => 'How a Realist Hero Rebuilt The Kingdom Volume 5',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/169963/Thumbnail/book_detail_large.gif?2',
                'price' => 288,
                'pages_num' => 367,
                'publisher_name' => ' A Plus',
                'publisher_date' => '2020-11-02 00:00:00',
                'description' => 'description text',
                'author_name' => 'Dojyomaru',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163377425',
                'name' => 'How a Realist Hero Rebuilt The Kingdom Volume 6',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/169964/Thumbnail/book_detail_large.gif?5',
                'price' => 288,
                'pages_num' => 355,
                'publisher_name' => ' A Plus',
                'publisher_date' => '2021-05-15 00:00:00',
                'description' => 'description text',
                'author_name' => 'Dojyomaru',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163378019',
                'name' => 'How a Realist Hero Rebuilt The Kingdom Volume 7',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/175108/Thumbnail/book_detail_large.gif?2',
                'price' => 288,
                'pages_num' => 365,
                'publisher_name' => ' A Plus',
                'publisher_date' => '2021-12-11 00:00:00',
                'description' => 'description text',
                'author_name' => 'Dojyomaru',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163378118',
                'name' => 'How a Realist Hero Rebuilt The Kingdom Volume 8',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/184357/Thumbnail/book_detail_large.gif?4',
                'price' => 315,
                'pages_num' => 366,
                'publisher_name' => ' A Plus',
                'publisher_date' => '2022-02-07 00:00:00',
                'description' => 'description text',
                'author_name' => 'Dojyomaru',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
            ],
            [
                'ISBN' => '9786163378613',
                'name' => 'How a Realist Hero Rebuilt The Kingdom Volume 9',
                'cover' => 'https://cdn-local.mebmarket.com/meb/server1/204905/Thumbnail/book_detail_large.gif?2',
                'price' => 315,
                'pages_num' => 367,
                'publisher_name' => ' A Plus',
                'publisher_date' => '2022-07-22 00:00:00',
                'description' => 'description text',
                'author_name' => 'Dojyomaru',
                'stock' => 100,
                'manga_flag' => false,
                'novel_flag' => true
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