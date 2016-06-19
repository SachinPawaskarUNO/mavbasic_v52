<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use App\Role;
use App\Permission;
use App\User;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create([  'name' => 'Administrator', 'password' => bcrypt('sachin12'), 'email' => 'baseadmin@unomaha.edu', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Sachin Pawaskar', 'password' => bcrypt('sachin12'), 'email' => 'spawaskar@unomaha.edu', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Franklin Damann', 'password' => bcrypt('secret'), 'email' => 'franklin.e.damann2.civ@mail.mil', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Jeffrey Lynch', 'password' => bcrypt('secret'), 'email' => 'jeffrey.j.lynch18.civ@mail.mil', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Andrea Palmiotto', 'password' => bcrypt('secret'), 'email' => 'andrea.palmiotto.civ@mail.mil', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Sarah Shankel', 'password' => bcrypt('secret'), 'email' => 'sarah.e.shankel.civ@mail.mil', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Sarah Kindschuh', 'password' => bcrypt('secret'), 'email' => 'sarah.c.kindschuh.civ@mail.mil', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        User::create([  'name' => 'Intern1 Lastname', 'password' => bcrypt('secret'), 'email' => 'intern1@unomaha.edu', 'active' => true,
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();
        Role::create([ 'name' => 'admin', 'display_name' => 'User Administrator', 'description' => 'User is allowed to manage and edit other users',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'manager', 'display_name' => 'Manager', 'description' => 'Manager is allowed to manage users, assignment of permissions to roles and full Read/Write access to skeletal elements and related data',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'anthropologist', 'display_name' => 'Anthropologist', 'description' => 'Anthropologist is allowed full Read/Write access to skeletal elements and related data',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'dna-analyst', 'display_name' => 'DNA Analyst', 'description' => 'DNA Analyst is allowed Read access to skeletal elements and Read/Write access to DNA data',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'historian', 'display_name' => 'Historian', 'description' => 'Historian is allowed Read access to skeletal elements and Read/Write access to Antemortem data',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'dentist', 'display_name' => 'Dentist', 'description' => 'Dentist is allowed Read access to skeletal elements and Read/Write access to Dental elements data',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Role::create([ 'name' => 'intern', 'display_name' => 'Intern', 'description' => 'Intern is allowed Read access to skeletal elements and related data',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();
        Permission::create([ 'name' => 'manage-users', 'display_name' => 'Manage Users', 'description' => 'User is allowed to add, edit and delete other users',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'manage-se-all', 'display_name' => 'Manage Skeletal Elements - All', 'description' => 'User is allowed to add, edit and delete skeletal elements and related data',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'manage-se-only', 'display_name' => 'Manage Skeletal Elements - Only', 'description' => 'User is allowed to add, edit and delete skeletal elements only',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
        Permission::create([ 'name' => 'readonly-se-all', 'display_name' => 'Readonly Skeletal Elements - All', 'description' => 'User is allowed to read only skeletal elements and related data',
            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
//        Permission::create([ 'name' => 'readonly-all', 'display_name' => 'Readonly Skeletal Elements - All', 'description' => 'User is allowed to read only skeletal elements and related data',
//            'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()]);
    }
}

class RoleUserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('role_user')->delete();

        $user = User::where('name', '=', 'Administrator')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Sachin Pawaskar')->first()->id;
        $role = Role::where('name', '=', 'admin')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Franklin Damann')->first()->id;
        $role = Role::where('name', '=', 'manager')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Jeffrey Lynch')->first()->id;
        $role = Role::where('name', '=', 'anthropologist')->first()->id;
        $role_user = [ 'role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create()  ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Andrea Palmiotto')->first()->id;
        $role = Role::where('name', '=', 'anthropologist')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);

        $user = User::where('name', '=', 'Intern1 Lastname')->first()->id;
        $role = Role::where('name', '=', 'intern')->first()->id;
        $role_user = [ ['role_id' => $role, 'user_id' => $user, 'created_by' => 'System', 'updated_by' => 'System', 'created_at' => date_create(), 'updated_at' => date_create() ] ];
        DB::table('role_user')->insert($role_user);
    }
}

class UsersRolesPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUsers = Permission::where('name', '=', 'manage-users')->first();
        $manageSEAll = Permission::where('name', '=', 'manage-se-all')->first();
        $readonlySEAll = Permission::where('name', '=', 'readonly-se-all')->first();

        $adminRole = Role::where('name', '=', 'admin')->first();
        $adminRole->attachPermissions(array($manageUsers, $manageSEAll));

        $managerRole = Role::where('name', '=', 'manager')->first();
        $managerRole->attachPermissions(array($manageUsers, $manageSEAll));

        $anthropologistRole = Role::where('name', '=', 'anthropologist')->first();
        $anthropologistRole->attachPermissions(array($manageSEAll));

        $internRole = Role::where('name', '=', 'intern')->first();
        $internRole->attachPermissions(array($readonlySEAll));
    }
}

