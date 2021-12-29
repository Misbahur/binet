<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::insert([
            [
                'Kategori' => 'lokal',
            ],
            [
                'Kategori' => 'nasional',
            ],
            [
                'Kategori' => 'internasional',
            ],
            [
                'Kategori' => 'ekonomi',
            ],
            [
                'Kategori' => 'sebud',
            ],
            [
                'Kategori' => 'hiburan',
            ],
            [
                'Kategori' => 'gayahidup',
            ],
        ]);
    }
}
