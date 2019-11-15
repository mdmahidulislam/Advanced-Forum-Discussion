<?php

use Illuminate\Database\Seeder;

use App\Reply;
class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $r1 = [
            'discussion_id' => 1,
            'user_id' => 1,
            'content' => 'ttyty'

        ];
        
        $r2 = [
            'content' => 'rvrvrvv',
            'discussion_id' => 3,
            'user_id' => 2
           


        ];
        
        $r3 = [
            
            'content' => 'rtrewre',
            'discussion_id' => 2,
            'user_id' => 1,
            

        ];
        
        $r4 = [
           
            'content' => 'efefef',
            'discussion_id' => 3,
            'user_id' => 1,
           


        ];

        Reply::create($r1);
        Reply::create($r2);
        Reply::create($r3);
        Reply::create($r4);
    }
}
