<?php

use Illuminate\Database\Seeder;
use App\Page;

class PagesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $page = new Page();
            $page->title = $faker->company;
            $page->content = $faker->text(200);
            $page->save();
        }
    }

}
