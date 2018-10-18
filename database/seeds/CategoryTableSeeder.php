<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();
        DB::table('users')->insert([
        'name' => "Đệm lò xo",
        'parent_id' => 0
        ],
        [
        'name' => "Đệm bông ép & cao su",
        'parent_id' => 0
        ],
        [
        'name' => "Khác",
        'parent_id' => 0
        ],
        [
        'name' => "Chăn ga gối",
        'parent_id' => 3
        ],
        [
        'name' => "Ruột gối",
        'parent_id' => 3
        ],
        [
        'name' => "Chăn",
        'parent_id' => 3
        ]);
    }

}
