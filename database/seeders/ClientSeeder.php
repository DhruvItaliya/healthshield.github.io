<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Client;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Profiles = Profile::all();
        foreach($Profiles as $Profile) {
            $faker = Faker::create();
            $client = new Client();
            $client->fname = $Profile->fname;
            $client->lname = $Profile->lname;
            $client->mobile = $Profile->mobile;
            $client->password = $faker->regexify('[A-Za-z0-9@#%&*/=]{8,12}');
            $client->save();
        }
    }
}
