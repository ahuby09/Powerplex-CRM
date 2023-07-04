<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /* Lead section */
        Permission::create(['name' => 'admin-lead']);
        Permission::create(['name' => 'mod-lead'] );
        Permission::create(['name' => 'telesales-lead']);
        Permission::create(['name' => 'company-lead']);
        /* User section */
        Permission::create(['name' => 'admin-users']);


        $adminRole = Role::create(['name' => 'Admin']);
        $telesalesRole = Role::create(['name' => 'Editor']);
        $companyRole = Role::create(['name' => 'company']);
        $bellerRole = Role::create(['name' => 'beller']);

        $adminRole->givePermissionTo([
            'admin-lead',
            'admin-users'
        ]);

        $telesalesRole->givePermissionTo([
            'telesales-lead'
        ]);
        $companyRole->givePermissionTo([
            'company-lead'
        ]);
    }
}
