<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\People;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(PeopleSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(AdvertisementsSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
//         \App\Models\User::factory(10)->create();
    }
}
