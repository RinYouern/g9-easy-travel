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
            'profile' => 'https://i.pinimg.com/474x/d7/6c/9b/d76c9b94fd9de3f349b1a3f0b6c97b54.jpg',
            'user_role' => 'admin',
        ]);

        $traveler = User::create([
            'name'=>'traveler',
            'email'=>'traveler@gmail.com',
            'password'=>bcrypt('password'),
            'profile' => 'https://i.pinimg.com/474x/b0/83/31/b0833156962d005d1ccbee648cba509b.jpg',
            'user_role' => 'traveler',
            'location' => 'Banteay Meancher',
        ]);

        $carOwner = User::create([
            'name'=>'carowner',
            'email'=>'carowner@gmail.com',
            'password'=>bcrypt('password'),
            'profile' => 'https://i.pinimg.com/474x/4a/62/a6/4a62a648cc346b33ff9fd4163b190941.jpg',
            'user_role' => 'carOwner',
            'location' => 'Banteay Meancher',
        ]);
        $hotelOwner = User::create([
            'name'=>'hoteolowner',
            'email'=>'hoteolowner@gmail.com',
            'password'=>bcrypt('password'),
            'profile' => 'https://i.pinimg.com/474x/53/4a/e6/534ae604480231838b643a6c98ed0c98.jpg',
            'user_role' => 'hotelOwner',
            'location' => 'Banteay Meancher',
        ]);
        $driver = User::create([
            'name'=>'driver',
            'email'=>'driver@gmail.com',
            'password'=>bcrypt('password'),
            'profile' => 'https://i.pinimg.com/474x/c6/58/26/c65826a93498e1bf18273f7e86eb79fa.jpg',
            'user_role' => 'driver',
            'location' => 'Banteay Meancher',
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
