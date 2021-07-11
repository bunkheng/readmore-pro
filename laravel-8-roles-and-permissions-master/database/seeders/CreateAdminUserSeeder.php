<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::create([
        //     'isAdmin' => 'Admin',
        // 	'name' => 'Hardik Savani', 
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);
  
        // $role = User::create(['isAdmin' => 'Admin']);

        // $role = User::create(['isAdmin' => 'User']);
   
        // $permissions = Permission::pluck('id','id')->all();
  
        // $role->syncPermissions($permissions);
   
        // $user->assignRole([$role->id]);

        User::truncate();

        $users = [
            [
                'isAdmin' => 'Admin',
                'name' => 'Admin',
                'email_verified_at' => '2021-06-21 03:59:08',
                'email' => 'admin@paragone.com',
            ],
            [
                'isAdmin' => 'User',
                'name' => 'User',
                'email_verified_at' => '2021-06-21 04:00:25',
                'email' => 'user@paragone.com',
            ]
        ];

        User::insert($users);
    }
}
