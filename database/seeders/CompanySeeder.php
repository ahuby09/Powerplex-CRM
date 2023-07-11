<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Green Home',
            'address' => 'The main office, Retford',
            'number' => '07480700938',
            'email' => 'info@green-home.co.uk',
        ]);
        Company::create([
            'name' => 'Zenith Eco Solutions',
            'address' => '21 Meridian Business Village, Hansby Drive, Liverpool',
            'number' => '08000548223',
            'email' => 'info@zenitheco.co.uk',
        ]);
        // Add more companies as needed

        // You can also use a factory to generate random companies
        // factory(Company::class, 10)->create();
    }
}
