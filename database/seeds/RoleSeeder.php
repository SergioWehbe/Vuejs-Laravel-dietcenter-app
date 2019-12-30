<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Role')->insert(array(
            array(
                'name' => 'admin',
            ),
            array(
                'name' => 'manager',
            ),
            array(
                'name' => 'dietitian',
            ),
            array(
                'name' => 'user',
            ),

        ));
    }
}
