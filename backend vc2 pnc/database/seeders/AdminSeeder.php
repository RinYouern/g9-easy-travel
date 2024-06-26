<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'profile' => 'https://i.pinimg.com/564x/b0/3d/d5/b03dd59816d5f52d8b8ebf080c0f52c5.jpg',
            'user_role' => 'admin',
        ]);

        $traveler = User::create([
            'name'=>'traveler',
            'email'=>'traveler@gmail.com',
            'password'=>bcrypt('password'),
            'profile' => 'https://i.pinimg.com/564x/b0/3d/d5/b03dd59816d5f52d8b8ebf080c0f52c5.jpg',
            'user_role' => 'traveler',
        ]);

        $carOwner = User::create([
            'name'=>'carowner',
            'email'=>'carowner@gmail.com',
            'password'=>bcrypt('password'),
            'profile' => 'https://i.pinimg.com/564x/b0/3d/d5/b03dd59816d5f52d8b8ebf080c0f52c5.jpg',
            'user_role' => 'carOwner',
        ]);
        $hotelOwner = User::create([
            'name'=>'hoteolowner',
            'email'=>'hoteolowner@gmail.com',
            'password'=>bcrypt('password'),
            'profile' => 'https://i.pinimg.com/564x/b0/3d/d5/b03dd59816d5f52d8b8ebf080c0f52c5.jpg',
            'user_role' => 'hotelOwner',
        ]);
        $hotelOwner = User::create([
            'name'=>'driver',
            'email'=>'driver@gmail.com',
            'password'=>bcrypt('password'),
            'profile' => 'https://i.pinimg.com/564x/b0/3d/d5/b03dd59816d5f52d8b8ebf080c0f52c5.jpg',
            'user_role' => 'driver',
        ]);
        


        $admin_role = Role::create(['name' => 'admin']);
        $writer_role = Role::create(['name' => 'user']);

        $permission = Permission::create(['name' => 'Post access']);
        $permission = Permission::create(['name' => 'Post edit']);
        $permission = Permission::create(['name' => 'Post create']);
        $permission = Permission::create(['name' => 'Post delete']);

        $permission = Permission::create(['name' => 'Role access']);
        $permission = Permission::create(['name' => 'Role edit']);
        $permission = Permission::create(['name' => 'Role create']);
        $permission = Permission::create(['name' => 'Role delete']);

        $permission = Permission::create(['name' => 'User access']);
        $permission = Permission::create(['name' => 'User edit']);
        $permission = Permission::create(['name' => 'User create']);
        $permission = Permission::create(['name' => 'User delete']);

        $permission = Permission::create(['name' => 'Permission access']);
        $permission = Permission::create(['name' => 'Permission edit']);
        $permission = Permission::create(['name' => 'Permission create']);
        $permission = Permission::create(['name' => 'Permission delete']);

        $permission = Permission::create(['name' => 'Mail access']);
        $permission = Permission::create(['name' => 'Mail edit']);



        // $admin->assignRole($admin_role);
        // $writer->assignRole($writer_role);


        $admin_role->givePermissionTo(Permission::all());
    }
}
