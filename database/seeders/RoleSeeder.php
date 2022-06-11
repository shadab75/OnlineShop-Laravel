<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin=Role::query()->create([
            'title'=>'Admin'
        ]);
        $admin->permissions()->attach(Permission::all());

        $user=Role::query()->insert([
           'title'=>'user'
        ]);
    }
}
