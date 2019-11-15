<?php

use Illuminate\Database\Seeder;
use App\Discussion;
class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Implementing Auth';
        $t2 = 'Implementing css3';
        $t3 = 'passport is working';
        $t4 = 'Oath is not working';

        $d1 = [
            'title' => $t1,
            'content' => 'edrwerwerwerwe',
            'channel_id' => 1,
            'user_id' => 1,
            'slug' => str_slug($t1)


        ];
        
        $d2 = [
            'title' => $t2,
            'content' => 'rvrvrvv',
            'channel_id' => 3,
            'user_id' => 2,
            'slug' => str_slug($t2)


        ];
        
        $d3 = [
            'title' => $t3,
            'content' => 'rtrewre',
            'channel_id' => 4,
            'user_id' => 1,
            'slug' => str_slug($t3)


        ];
        
        $d4 = [
            'title' => $t4,
            'content' => 'efefef',
            'channel_id' => 3,
            'user_id' => 2,
            'slug' => str_slug($t4)


        ];

        Discussion::create($d1);
        Discussion::create($d2);
        Discussion::create($d3);
        Discussion::create($d4);
    }
}
