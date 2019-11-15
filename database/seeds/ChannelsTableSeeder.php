<?php

use Illuminate\Database\Seeder;
use App\Channel;
class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1=['title'=>'Laravel'];
        $channel2=['title'=>'Css3'];
        $channel3=['title'=>'Vue.Js'];
        $channel4=['title'=>'CakePhp'];
        $channel5=['title'=>'Node.js'];
        $channel6=['title'=>'Javascript'];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        Channel::create($channel6);
        

    }
}
