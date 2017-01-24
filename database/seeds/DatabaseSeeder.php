<?php

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
        if ($this->needSeed()) {
            $this->call(UserTableSeeder::class);
            factory('App\Models\Post', 100)->create();
        }
    }

    /**
     * Check app need data used for test or not.
     *
     * @return bool
     */
    private function needSeed()
    {
        if (env('APP_DEBUG')) {
            return true;
        }
        return false;
    }
}
