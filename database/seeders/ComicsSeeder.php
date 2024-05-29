<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('comics')->truncate();

        $comics = config('comics');

        foreach($comics as $item){
            $new_comic = new Comic();
            $new_comic->title = $item['title'];
            $new_comic->description = $item['description'];
            $new_comic->thumb = $item['thumb'];
            $new_comic->price = $item['price'];
            $new_comic->series = $item['series'];
            $new_comic->sale_date = $item['sale_date'];
            $new_comic->type = $item['type'];

            $new_comic->save();

        }
    }
}
