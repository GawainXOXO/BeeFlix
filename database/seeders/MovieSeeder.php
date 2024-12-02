<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'genre_id' => '3',
                'title' => 'Akira',
                'photo' => 'images/Akira.jpg',
                'publish_date' => '1988-07-16',
                'description' => 'Biker Kaneda is confronted by many anti-social elements while trying to help his friend Tetsuo who is involved in a secret government project. Tetsuo supernatural persona adds the final twist.'
            ],
            [
                'genre_id' => '2',
                'title' => 'The Batman',
                'photo' => 'images/Batman.jpg',
                'publish_date' => '2022-03-02',
                'description' => 'Batman is called to intervene when the mayor of Gotham City is murdered. Soon, his investigation leads him to uncover a web of corruption, linked to his own dark past.'
            ],
            [
                'genre_id' => '1',
                'title' => 'Atonement',
                'photo' => 'images/Atonement.jpg',
                'publish_date' => '2007-09-07',
                'description' => 'Briony, an aspiring writer, catches her elder sister in a passionate embrace with her lover, Robbie. Jealous, she accuses Robbie of raping her cousin, a lie that changes the course of three lives.'
            ],
            [
                'genre_id' => '1',
                'title' => '500 days of summer',
                'photo' => 'images/Summer.jpg',
                'publish_date' => '2009-07-17',
                'description' => 'Tom revisits the approximate one year he shared with Summer, the girl he thought he could spend the rest of his life with. She, on the other hand, does not believe in relationships or boyfriends.'
            ],
            [
                'genre_id' => '3',
                'title' => 'Gundam Seed',
                'photo' => 'images/Gundam.jpeg',
                'publish_date' => '2002-10-05',
                'description' => 'Kira Yamato, a genetically enhanced superhuman, becomes the pilot of an advanced mobile suit when tensions between naturally born humans and their engineered counterparts boil over into a war fought across Earth and its space colonies.'
            ],
            [
                'genre_id' => '2',
                'title' => 'The Raid',
                'photo' => 'images/Raid.jpg',
                'publish_date' => '2012-03-23',
                'description' => 'After getting trapped in a 30-storey safe house belonging to a drug lord, Tama, a group of police officers must do everything to survive and take him down.'
            ]
        ];
        
        DB::table('movies')->insert($movies);
    }
}
