<?php

use Illuminate\Database\Seeder;
use App\Special;
class SpecialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 6; $i++) { 
            Special::create([
            "name" => "PS4",
            "description" => "10% of all PS4s. Lasting til the end of the month.",
            "was_priced" => 300.00,
            "current_price" => 270.00
        ]);
        Special::create([
            "name" => "X-BOX 1",
            "description" => "10% of all X-BOX 1s. Lasting til the end of the month.",
            "was_priced" => 300.00,
            "current_price" => 270.00
        ]);
        Special::create([
            "name" => "PS5",
            "description" => "10% of all PS5s. Lasting til the end of the month.",
            "was_priced" => 300.00,
            "current_price" => 270.00
        ]);
        }
        

    }
}
