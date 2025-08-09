<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\IndexController;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            UserSeeder::class,

        ]);
    }
}
