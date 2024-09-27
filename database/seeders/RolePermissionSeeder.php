<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat role admin
            $adminRole = Role::create(['name' => 'admin']);
    
            // Buat role pegawai
            $user1Role = Role::create(['name' => 'user1']);
    
            // Buat user admin
            $admin = User::create([
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('12345678'),
            ]);
            $admin->roles()->attach($adminRole);

            // $adminRole->assignRole('admin');
            // $user1Role->assignRole('user1');
            $permissions = [
                'read role',
                'create role',
                'update role',
                'delete role'
            ];
    
            foreach ($permissions as $permissionName) {
                $permission = Permission::create(['name' => $permissionName]);
    
                // Memberikan semua izin kepada peran 'admin'
                $adminRole->givePermissionTo($permission);
            }
    
            // Memberikan beberapa izin kepada peran 'user1'
            $user1Role->givePermissionTo('read role');
            $user1Role->givePermissionTo('create role');
    }
}
