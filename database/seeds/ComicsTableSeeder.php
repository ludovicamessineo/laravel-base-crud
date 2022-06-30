<?php

use Illuminate\Database\Seeder;

class ComicsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comic_list = config($comics);
    }
}
