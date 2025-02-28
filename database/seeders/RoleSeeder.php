<?php

namespace Database\Seeders;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
  
    public function run(): void
    {
        //Here I'm creating a variable $useRole to create and set the name "user" in the Roles table, for that, need to take the value User in the RolesEnum and set a the name there.

        //Example without Enum
        // $userRole = Role::create(['name' => 'user']);
        $userRole = Role::create(['name' => RolesEnum::User->value]);

        //Here I'm doing the same thing but with the vendor role
        $vendorRole = Role::create(['name' => RolesEnum::Vendor->value]);

        //Here I'm doing the same thing but with the admin role
        $adminRole = Role::create(['name' => RolesEnum::Admin->value]);


        //Now I'm doing the same but with the permissions.

        $approveVendors = Permission::create (['name' => PermissionsEnum::ApproveVendors->value]); 

        $buyProducts = Permission::create(['name' => 
        PermissionsEnum::BuyProducts->value]);

        $sellProducts = Permission::create(['name' => PermissionsEnum::SellProducts->value]);

        //Now I'm gonna synchronize the permissions for the different Roles. I'm associating the permissions that each role has.
        $userRole->syncPermissions([
            $buyProducts]);

        $vendorRole->syncPermissions([
            $sellProducts, 
            $buyProducts]);

        $adminRole->syncPermissions([
            $approveVendors, 
            $sellProducts, 
            $buyProducts]);

    }
}
