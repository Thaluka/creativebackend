<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('websites')->insert([
            [
                'id' => '1',
                'name' => 'Wix',
                'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue nisl ligula, nec ullamcorper augue volutpat eget.',
                'image' => 'wix.png',
                'created_at'=> '2022-06-24 19:01:59',
                'updated_at'=>'2022-06-24 19:01:59',
            ],
            [
                'id' => '2',
                'name' => 'Github',
                'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue nisl ligula, nec ullamcorper augue volutpat eget.',
                'image' => 'git.png',
                'created_at'=> '2022-06-24 19:01:59',
                'updated_at'=>'2022-06-24 19:01:59',
            ],
            [
                'id' => '3',
                'name' => 'Wordpress',
                'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue nisl ligula, nec ullamcorper augue volutpat eget.',
                'image' => 'wordpress.png',
                'created_at'=> '2022-06-24 19:01:59',
                'updated_at'=>'2022-06-24 19:01:59',
            ],
            [
                'id' => '4',
                'name' => 'Techcrunch',
                'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue nisl ligula, nec ullamcorper augue volutpat eget.',
                'image' => 'techcrunch.png',
                'created_at'=> '2022-06-24 19:01:59',
                'updated_at'=>'2022-06-24 19:01:59',
            ],
            [
                'id' => '5',
                'name' => 'Weebly',
                'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue nisl ligula, nec ullamcorper augue volutpat eget.',
                'image' => 'weebly.png',
                'created_at'=> '2022-06-24 19:01:59',
                'updated_at'=>'2022-06-24 19:01:59',
            ],
            [
                'id' => '6',
                'name' => 'Linkedin',
                'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue nisl ligula, nec ullamcorper augue volutpat eget',
                'image' => 'linkedin.png',
                'created_at'=> '2022-06-24 19:01:59',
                'updated_at'=>'2022-06-24 19:01:59',
            ],
            [
                'id' => '7',
                'name' => 'Medium',
                'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue nisl ligula, nec ullamcorper augue volutpat eget.',
                'image' => 'medium.png',
                'created_at'=> '2022-06-24 19:01:59',
                'updated_at'=>'2022-06-24 19:01:59',
            ],
            [
                'id' => '8',
                'name' => 'Tumblr',
                'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue nisl ligula, nec ullamcorper augue volutpat eget.',
                'image' => 'Tumblr.png',
                'created_at'=> '2022-06-24 19:01:59',
                'updated_at'=>'2022-06-24 19:01:59',
            ],
            
        ]);
    }
}
