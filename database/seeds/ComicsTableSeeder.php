<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetti = config('comics');

        foreach($fumetti as $fumetto){
            $newComic = new Comic();

            $newComic->title =$fumetto['title'];
            $newComic->description =$fumetto['description'];
            $newComic->thumb =$fumetto['thumb'];
            $newComic->price =$fumetto['price'];
            $newComic->series =$fumetto['series'];
            $newComic->sale_date =$fumetto['sale_date'];
            $newComic->type =$fumetto['type'];

            $newComic->save();
        }

    }
}
