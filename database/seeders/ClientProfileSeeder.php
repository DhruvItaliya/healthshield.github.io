<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use Faker\Factory as Faker;

class ClientProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = Faker::create();
            $client = new Profile();
            $client->fname = $faker->firstName('male');
            $client->mname = $faker->firstName('male');
            $client->lname = $faker->lastName;
            $client->gender = "male";
            $client->dob = $faker->date;
            $firstDigit = $faker->randomElement([6, 7, 8, 9]);
            $remainingDigits = $faker->numberBetween(100000000, 999999999);
            $client->mobile = $firstDigit . $remainingDigits;
            $client->address = $faker->address;
            $client->pincode = $faker->postcode;
            $client->marital_status = "single";
            $client->spouse_name = NULL;
            // $client->spouse_name = $faker->firstName('female');
            $client->children = "0";
            $client->family_member = "1";
            $client->save();
        }
    }
}
