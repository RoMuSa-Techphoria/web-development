<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'username' => 'marcel',
            'password' => 'password',
            'name' => 'Marcel',
        ]);

        Admin::create([
            'username' => 'thingki',
            'password' => 'password',
            'name' => 'Thingki',
        ]);

        Admin::create([
            'username' => 'refaldy',
            'password' => 'password',
            'name' => 'Refaldy',
        ]);
    }
}
