<?php

use App\Company;

use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

use Laracasts\TestDummy\Factory as TestDummy;

// composer require laracasts/testdummy
class CompaniesTableSeeder extends Seeder
{
    public function run()
    {
        $numberOfEntries    = 3;
        $faker              = Faker::create();

        $faker->addProvider(new \Faker\Provider\en_US\Company($faker));

        for ($i=0; $i < $numberOfEntries; $i++) {
            do {
                $companyName    = $faker->company;
                $companySlug    = str_slug($companyName);
            } while (Company::where('slug', $companySlug)->exists());

            Company::create([
                'name'  => $companyName,
                'slug'  => $companySlug,
            ]);
        }
    }
}
