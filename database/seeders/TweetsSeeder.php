<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tweets')->insert([
            'name' => 'omid hajavi',
            'handle' => '@omidhajavi',
            'image' => 'https://randomuser.me/api/portraits/men/61.jpg',
            'tweet' => 'اگر شاکی در حضور قاضی به متهم حمله کند جرم آن چیست ؟',
            'file' => '/videos/attack.mp4',
            'is_video' => true,
            'comments' => '35',
            'retweets' => '54',
            'likes' => '88',
            'analytics' => '81',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('tweets')->insert([
            'name' => 'Homan razavi',
            'handle' => '@humanrazavi',
            'image' => 'https://randomuser.me/api/portraits/men/87.jpg',
            'tweet' => "اگر بعد از فوت پدر به او ارثی تعلق نگیرد آیا قانونا می توان آن را پس گرفت؟",
            'file' => '/videos/Sportsman.mp4',
            'is_video' => true,
            'comments' => '35',
            'retweets' => '54',
            'likes' => '88',
            'analytics' => '81',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tweets')->insert([
            'name' => 'javad mojabi',
            'handle' => '@javadmojabi',
            'image' => 'https://randomuser.me/api/portraits/men/58.jpg',
            'tweet' => "دیه امسال در ماه حرام چقدره ؟ ",
            'file' => '/pics/Code.png',
            'is_video' => false,
            'comments' => '83',
            'retweets' => '59',
            'likes' => '62',
            'analytics' => '66',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tweets')->insert([
            'name' => 'pedram batole',
            'handle' => '@pedrambatole',
            'image' => 'https://randomuser.me/api/portraits/men/77.jpg',
            'tweet' => "مجازات کسی که توی فضای مجازی فحش میده چیه ؟ ",
            'file' => '/videos/Seo.mp4',
            'is_video' => true,
            'comments' => '56',
            'retweets' => '54',
            'likes' => '78',
            'analytics' => '21',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tweets')->insert([
            'name' => 'ali nasiri',
            'image' => 'https://randomuser.me/api/portraits/men/47.jpg',
            'handle' => '@alinasiri',
            'tweet' => "می خوام هرطور شده مهاجرت کنم کانادا وکیل خوب سراغ دارید ؟",
            'file' => '/pics/PlayGuitar.png',
            'is_video' => false,
            'comments' => '94',
            'retweets' => '29',
            'likes' => '33',
            'analytics' => '89',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
