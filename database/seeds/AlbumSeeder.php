<?php

use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Album::class, 10)->create()->each(function ($album){
            $gallery = factory(App\albumPicture::class, 5)->make();
            $album->pictures()->saveMany($gallery);


        } );
    }
}
