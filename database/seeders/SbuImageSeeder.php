<?php

namespace Database\Seeders;

use App\Models\Backend\Home\SbuImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SbuImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'image_path' => 'assets/img/sbu/sbu-2OiJA.jpg',
                'alt_text' => 'Sertifikat Badan Usaha 1',
                'sort_order' => 1,
                'status' => true,
            ],
            [
                'image_path' => 'assets/img/sbu/sbu-DSvZG.jpg',
                'alt_text' => 'Sertifikat Badan Usaha 2',
                'sort_order' => 2,
                'status' => true,
            ],
            [
                'image_path' => 'assets/img/sbu/sbu-Hqia5.jpg',
                'alt_text' => 'Sertifikat Badan Usaha 3',
                'sort_order' => 3,
                'status' => true,
            ],
            [
                'image_path' => 'assets/img/sbu/sbu-k02lR.jpg',
                'alt_text' => 'Sertifikat Badan Usaha 4',
                'sort_order' => 4,
                'status' => true,
            ],
            [
                'image_path' => 'assets/img/sbu/sbu-l0tIO.jpg',
                'alt_text' => 'Sertifikat Badan Usaha 5',
                'sort_order' => 5,
                'status' => true,
            ],
        ];

        foreach ($images as $image) {
            SbuImage::create($image);
        }
    }
}
