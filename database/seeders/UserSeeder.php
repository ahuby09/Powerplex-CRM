<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Wayne-Scott Fox',
            'email' => 'wayne@allied-home.co.uk',
            'password' => Hash::make('Wayne123'),
        ]);
        User::create([
            'name' => 'Andrew Jack Huby',
            'email' => 'jack@allied-home.co.uk',
            'password' => Hash::make('Jack123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Lilly Porter',
            'email' => 'lilly@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Aby Bingham',
            'email' => 'aby@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Emily Bearder',
            'email' => 'emilyb@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Ella Hill',
            'email' => 'ella@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Ellie Bownes',
            'email' => 'ellie@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Tom Oldroyd',
            'email' => 'tom@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Emily Reason',
            'email' => 'emilyr@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Saskia Wyld',
            'email' => 'saskia@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Carol Reid',
            'email' => 'carol@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Katie Keel',
            'email' => 'katie@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Callum Amendola',
            'email' => 'callum@allied-home.co.uk',
            'password' => Hash::make('123'),
            'companyID' => '1',
        ]);
    }
}
