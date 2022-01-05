<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\QuestionChoice;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'text' => 'Deskripsi Target Produk Akhir (2024). Target Prototipe Produk',
                'options' => [
                    [
                        'text' => 'Rinci',
                        'value' => 10,
                    ],
                    [
                        'text' => 'Kurang Rinci',
                        'value' => 5,
                    ],
                    [
                        'text' => 'Tidak Rinci',
                        'value' => 0,
                    ],
                ],
            ],
            [
                'text' => 'Deskripsi Target Produk Akhir (2024). Size Produk',
                'options' => [
                    [
                        'text' => 'Rinci',
                        'value' => 10,
                    ],
                    [
                        'text' => 'Kurang Rinci',
                        'value' => 5,
                    ],
                    [
                        'text' => 'Tidak Rinci',
                        'value' => 0,
                    ],
                ],
            ],
            [
                'text' => 'Deskripsi Target Produk Akhir (2024). Standar / Spesifikasi / Produk Acuan / 
                Kondisi yang menjadi pembangding',
                'options' => [
                    [
                        'text' => 'Rinci',
                        'value' => 10,
                    ],
                    [
                        'text' => 'Kurang Rinci',
                        'value' => 5,
                    ],
                    [
                        'text' => 'Tidak Rinci',
                        'value' => 0,
                    ],
                ],
            ],
            [
                'text' => 'WBS/ WP. Deskripsi WBS / WP (2020)',
                'options' => [
                    [
                        'text' => 'Jelas/Sesuai',
                        'value' => 10,
                    ],
                    [
                        'text' => 'Kurang Jelas/Sesuai',
                        'value' => 5,
                    ],
                    [
                        'text' => 'Tidak Jelas/Sesuai',
                        'value' => 0,
                    ],
                ],
            ],
            [
                'text' => 'WBS/ WP. Kontribusi capaian kegiatan
                yang sudah dilaksanakan
                terhadap produk akhir (presentase)',
                'options' => [
                    [
                        'text' => 'Jelas/Sesuai',
                        'value' => 10,
                    ],
                    [
                        'text' => 'Kurang Jelas/Sesuai',
                        'value' => 5,
                    ],
                    [
                        'text' => 'Tidak Jelas/Sesuai',
                        'value' => 0,
                    ],
                ],
            ],
            [
                'text' => 'Luaran yang dicapai (kesesuaian dengan indikator kinerja) *',
                'options' => [
                    [
                        'text' => 'Sesuai',
                        'value' => 10,
                    ],
                    [
                        'text' => 'Kurang Sesuai',
                        'value' => 5,
                    ],
                    [
                        'text' => 'Tidak Sesuai',
                        'value' => 0,
                    ],
                ],
            ],
            [
                'text' => 'Data Dukung capaian (jurnal, prototipe yang sudah terbentuk) *',
                'options' => [
                    [
                        'text' => 'Sesuai',
                        'value' => 10,
                    ],
                    [
                        'text' => 'Kurang Sesuai',
                        'value' => 5,
                    ],
                    [
                        'text' => 'Tidak Sesuai',
                        'value' => 0,
                    ],
                ],
            ],
            [
                'text' => 'Realisasi Anggaran',
                'options' => [
                    [
                        'text' => 'Terserap 100%',
                        'value' => 10,
                    ],
                    [
                        'text' => 'Akan Terserap 100%',
                        'value' => 5,
                    ],
                    [
                        'text' => 'Tidak Terserap 100%',
                        'value' => 0,
                    ],
                ],
            ],
            [
                'text' => 'presentase capaian kinerja menurut reviewer. masukkan presentase dari capaian kinerja penelitian 
                (capaian kinerja saat ini dibandingkan dengan target
                tahunan) menurut anda rentang (0-100%)'
            ],
            [
                'text' => 'Catatan reviewer. Mohon masukkan catatan untuk poin - poin penilaian
                terlampir di atas (deskripsi target produk akhir (2024)
                , wBS / WP, Luaran, dan realisasi anggaran)'
            ],
            [
                'text' => 'Rekomendasi',
                'options' => [
                    [
                        'text' => 'Diterima',
                        'value' => 10,
                    ],
                    [
                        'text' => 'Diterima Dengan Perbaikan',
                        'value' => 5,
                    ],
                    [
                        'text' => 'Diperbaiki',
                        'value' => 0,
                    ],
                ],
            ],
        ];


        foreach( $questions as $data) {
            $question = Question::create([
                'text' => $data['text'],
            ]);

            if(isset($data['options'])) {
                foreach ($data['options'] as $item) {
                    $item['question_id'] = $question->id;
                    QuestionChoice::create($item);
                }
            }
        } 
    }
}
