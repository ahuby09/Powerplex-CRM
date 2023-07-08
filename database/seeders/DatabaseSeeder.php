<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CompanySeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    $this->call(CompanySeeder::class);

    $this->call(UserSeeder::class);

    // Create 5 dummy companies using the CompanyFactory
    Company::factory()->count(5)->create();

    // Create 10 dummy leads using the LeadFactory
      Lead::factory()->count(50)->create();

    // Create 10 dummy leads using the LeadFactory
    User::factory()->count(5)->create();



    // ...

    // Add other seeders using the same format
}

}
