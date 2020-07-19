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
            'description' => 'Home page'
        ]);
        Pages::create([
             'name' => 'About Us',
             'description' => 'About Us page'
         ]);
         Pages::create([
             'name' => 'Contact Us',
             'description' => 'Contact Us page'
         ]);
    }
}
