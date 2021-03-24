<?php

use Illuminate\Database\Seeder;
use App\AdminRole;
use App\AdminPermissions;
use App\AdminRolesPermissions;

class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {


        // create roles and assign existing permissions

        //create roles

        $role1 = AdminRole::create(['name' => 'super_admin','display_name' => 'Super admin']);
        $role2 = AdminRole::create(['name' => 'admin','display_name' => 'Admin']);
        $role3 = AdminRole::create(['name' => 'employee','display_name' => 'Employee']);
        //dd($role1->getKey());

        //create persmissions

        //articles permissions

        $edit_article = AdminPermissions::create(['name' => 'edit_articles','display_name' => 'edit articles']);

        $add_articles = AdminPermissions::create(['name' => 'add_articles','display_name' => 'add articles']);
        $delete_articles = AdminPermissions::create(['name' => 'delete_articles','display_name' => 'delete articles']);

        //events permissions

        $edit_events = AdminPermissions::create(['name' => 'edit_events','display_name' => 'edit events']);
        $add_events = AdminPermissions::create(['name' => 'add_events','display_name' => 'add events']);
        $delete_events = AdminPermissions::create(['name' => 'delete_events','display_name' => 'delete events']);

        //contact permissions
        $show_contacts = AdminPermissions::create(['name' => 'show_contacts','display_name' => 'show events']);

        //assign existing permissions

        $role_per = AdminRolesPermissions::create(['role_id' => $role1->getKey(),'permission_id' => $edit_article->getKey()]);


    // create demo Admins

    //roles:
    // 1 -> Super_admin
    // 2 -> Admin
    // 3 -> Employee

    $user = Factory(App\Admin::class)->create([
        'name' => 'Employee',
        'email' => 'employee@example.com',
        'role_id' => $role3->getKey(),
    ]);


    $user = Factory(App\Admin::class)->create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'role_id' => $role2->getKey(),

    ]);


    $admin = Factory(App\Admin::class)->create([
        'name' => 'Super-Admin',
        'email' => 'superadmin@example.com',
        'role_id' => $role1->getKey(),
    ]);


    // $user = Factory(App\User::class)->create([
    //     'name' => 'User',
    //     'email' => 'user@example.com',

    // ]);

    }
}
