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
            'email' => 'wayne@green-home.co.uk',
            'password' => Hash::make('Wayne123'),
        ]);
        User::create([
            'name' => 'Andrew Jack Huby',
            'email' => 'jack@green-home.co.uk',
            'password' => Hash::make('Jack123'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Lily Porter',
            'email' => 'lily@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Aby Bingham',
            'email' => 'aby@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Emily Bearder',
            'email' => 'emilyb@green-home.co.uk',
            'password' => Hash::make('@Ebearder1234'),
            'companyID' => '0',
        ]);

        User::create([
            'name' => 'Ella Hill',
            'email' => 'ella@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Ellie Bownes',
            'email' => 'ellie@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Tom Oldroyd',
            'email' => 'tom@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Emily Reason',
            'email' => 'emilyr@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Saskia Wyld',
            'email' => 'saskia@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Carol Reid',
            'email' => 'carol@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Katie Keel',
            'email' => 'katie@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);

        User::create([
            'name' => 'Callum Amendola',
            'email' => 'callum@green-home.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '1',
        ]);
        User::create([
            'name' => 'Test User',
            'email' => 'test@zenith-eco.co.uk',
            'password' => Hash::make('Wayne1234'),
            'companyID' => '2',
        ]);
    }
}
