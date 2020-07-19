<?php

use Illuminate\Database\Seeder;
use App\Pages; 
class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pages::create([
            'name' => 'Home',
            "slug" => 'home',
            'description' => 'Home page'
        ]);
        Pages::create([
             'name' => 'About Us',
             "slug" => 'aboutus',
             'description' => 'About Us page'
         ]);
         Pages::create([
             'name' => 'Contact Us',
             "slug" => 'contact-us',
             'description' => 'Contact Us page'
         ]);
         Pages::create([
            'name' => 'Admin Specials',
            "slug" => 'admin/specials',
            'description' => 'Admin Specials page'
        ]);
    }
}
