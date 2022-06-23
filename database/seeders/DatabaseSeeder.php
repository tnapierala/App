<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Photo;
use App\Models\Ringtone;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Category seed
        Category::create(['name' => 'Instruments']);
        Category::create(['name' => 'Funny']);
        Category::create(['name' => 'SMS']);
        Category::create(['name' => 'Alarms']);
        Category::create(['name' => 'Bells']);
        Category::create(['name' => 'Nature']);
        //Users seed
        User::create([

            'name' => 'Jan',
            'email' => 'jan@email.com',
            'role' => 'admin',
            'password' => bcrypt('qweasdzxc'),
            'email_verified_at' => NOW(),

        ]);
        User::create([
            'name' => 'Tomek',
            'email' => 'Tomek@email.com',
            'role' => 'admin',
            'password' => bcrypt('qweasdzxc'),
            'email_verified_at' => NOW(),
        ]);
        User::create([
            'name' => 'User',
            'email' => 'user@email.com',
            'password' => bcrypt('qweasdzxc'),
            'email_verified_at' => NOW(),
        ]);
        // Photos and Ringtones seed - according to filenames.

        Photo::create([

            'title' => 'House by lake',
            'description' => 'Landscape of House by lake',
            'file' => 'housebylake.jpg',
            'format' => 'jpg',
            'size' => '500',
        ]);
        Photo::create([

            'title' => 'House and mountains',
            'description' => 'Landscape of House and mountains',
            'file' => 'houseandmountains.jpg',
            'format' => 'jpg',
            'size' => '500',
        ]);
        Photo::create([

            'title' => 'Town by lake',
            'description' => 'Landscape of Town by lake',
            'file' => 'townbylake.jpg',
            'format' => 'jpg',
            'size' => '500',
        ]);
        Photo::create([

            'title' => 'Cross on cliff',
            'description' => 'Landscape of Cross on cliff',
            'file' => 'crossoncliff.jpg',
            'format' => 'jpg',
            'size' => '500',
        ]);
        Photo::create([

            'title' => 'Boats on river',
            'description' => 'Landscape of Boats on river',
            'file' => 'boatsonriver.jpg',
            'format' => 'jpg',
            'size' => '500',
        ]);
        Photo::create([

            'title' => 'Bridge on lake',
            'description' => 'Landscape of Bridge on lake',
            'file' => 'bridgeonlake.jpg',
            'format' => 'jpg',
            'size' => '500',
        ]);

        Ringtone::create([

            'title' => 'Asian Bells',
            'description' => 'Sound of small bells',
            'slug' => 'Asian Bells',
            'file' => 'asianbells.wav',
            'category_id' => '1',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Acoustic Guitar',
            'description' => 'Sound of Acoustic Guitar',
            'slug' => 'Acoustic Guitar',
            'file' => 'guitar.wav',
            'category_id' => '1',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Acoustic Guitar 2',
            'description' => 'Sound of Acoustic Guitar',
            'slug' => 'Acoustic Guitar 2',
            'file' => 'guitar2.wav',
            'category_id' => '1',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Cartoon Doing',
            'description' => 'Sound of Cartoon Doing',
            'slug' => 'Cartoon Doing',
            'file' => 'doing.wav',
            'category_id' => '2',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Scream of pain',
            'description' => 'Scream of pain',
            'slug' => 'Scream of pain',
            'file' => 'pain.wav',
            'category_id' => '2',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Rooster',
            'description' => 'Sound of Rooster',
            'slug' => 'Rooster',
            'file' => 'rooster.wav',
            'category_id' => '2',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Doorbell',
            'description' => 'Sound of Doorbell',
            'slug' => 'Doorbell',
            'file' => 'doorbell.wav',
            'category_id' => '3',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Cartoon Woop',
            'description' => 'Sound of Cartoon Woop',
            'slug' => 'Cartoon Woop',
            'file' => 'woop.wav',
            'category_id' => '3',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Cartoon Woop 2',
            'description' => 'Sound of Cartoon Woop 2',
            'slug' => 'Cartoon Woop 2',
            'file' => 'woop2.wav',
            'category_id' => '3',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Alarm Sound',
            'description' => 'Sound of Alarm',
            'slug' => 'Alarm Sound',
            'file' => 'alarm.wav',
            'category_id' => '4',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Old Phone',
            'description' => 'Sound of Old Phone',
            'slug' => 'Old Phone',
            'file' => 'oldphone.wav',
            'category_id' => '4',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Sonar Sound',
            'description' => 'Sound of Sonar',
            'slug' => 'Sonar Sound',
            'file' => 'sonar.wav',
            'category_id' => '4',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Bells',
            'description' => 'Sound of Bells',
            'slug' => 'Bells',
            'file' => 'bells.wav',
            'category_id' => '5',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Bells 2',
            'description' => 'Sound of Bells',
            'slug' => 'Bells 2',
            'file' => 'bells2.wav',
            'category_id' => '5',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Birds',
            'description' => 'Sound of Birds',
            'slug' => 'Birds',
            'file' => 'birds.wav',
            'category_id' => '6',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Sound of Forest',
            'description' => 'Sound of Forest',
            'slug' => 'Forest',
            'file' => 'forest.wav',
            'category_id' => '6',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
        Ringtone::create([

            'title' => 'Sheep',
            'description' => 'Sound of Sheep',
            'slug' => 'Sheep',
            'file' => 'sheep.wav',
            'category_id' => '6',
            'format' => 'wav',
            'size' => '200',
            'download' => '0',
        ]);
    }
}
