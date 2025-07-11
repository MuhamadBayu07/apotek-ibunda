<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\anggota as ModelsAnggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void 
    { 
    ModelsAnggota::create([ 
    'nama' => 'Sopian Aji', 
    'hp' => '085123456781', 
    ]); 
    ModelsAnggota::create([ 
    'nama' => 'Husni Faqih', 
    'hp' => '085123456782', 
    ]); 
    ModelsAnggota::create([ 
    'nama' => 'Rousyati', 
    'hp' => '085123456783', 
    ]); 
    } 
}
