<?php

use App\User;
use App\Company;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('password_resets')->truncate();
        DB::table((new User)->getTable())->truncate();
        DB::table((new Company)->getTable())->truncate();

        $this->call(CompaniesTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
