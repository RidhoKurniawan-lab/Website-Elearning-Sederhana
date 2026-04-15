<?php

namespace Database\Factories;

use App\Models\Jurusan;
use App\Models\MataKuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MataKuliah>
 */
class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $matkul = [
            'Pemrograman Dasar',
            'Struktur Data',
            'Algoritma dan Pemrograman',
            'Basis Data',
            'Jaringan Komputer',
            'Sistem Operasi',
            'Kecerdasan Buatan',
            'Pemrograman Web',
            'Mobile Development',
            'Rekayasa Perangkat Lunak',
            'Analisis dan Perancangan Sistem',
            'Keamanan Informasi',
            'Cloud Computing',
            'Big Data',
            'Internet of Things',
            'Sistem Tertanam',
            'Arsitektur Komputer',
            'Pengolahan Citra Digital',
            'Machine Learning',
            'Deep Learning',
            'Pemrograman Berorientasi Objek',
            'Komputasi Paralel',
            'Grafika Komputer',
            'Interaksi Manusia dan Komputer',
            'Matematika Teknik',
            'Aljabar Linear',
            'Kalkulus',
            'Fisika Dasar',
            'Statistika dan Probabilitas',
            'Metode Numerik',
            'Rangkaian Listrik',
            'Elektronika Dasar',
            'Sistem Digital',
            'Mikroprosesor',
            'Sistem Kendali',
            'Teknik Telekomunikasi',
            'Pengolahan Sinyal Digital',
            'Sistem Tenaga Listrik',
            'Konversi Energi',
            'Termodinamika',
            'Mekanika Teknik',
            'Kekuatan Material',
            'Dinamika Teknik',
            'Perpindahan Panas',
            'Proses Manufaktur',
            'Menggambar Teknik',
            'Perancangan Mesin',
            'Teknik Produksi',
            'Manajemen Proyek',
            'Manajemen Konstruksi',
            'Teknik Pondasi',
            'Struktur Beton',
            'Struktur Baja',
            'Hidrolika',
            'Teknik Transportasi',
            'Teknik Lingkungan',
            'Pengolahan Limbah',
            'Geoteknik',
            'Geologi Teknik',
            'Eksplorasi Sumber Daya Alam',
            'Teknik Perminyakan',
            'Teknik Reservoir',
            'Keselamatan dan Kesehatan Kerja',
            'Manajemen Industri',
            'Ergonomi',
            'Sistem Produksi',
            'Optimasi Industri',
            'Robotika',
            'Otomasi Industri',
            'Sistem Cerdas',
            'Etika Profesi',
        ];

        return [
            'nama_matakuliah' => $this->faker->randomElement($matkul),
            'sks' => $this->faker->randomElement([2,3,4]),
            'jurusan_id' => Jurusan::inRandomOrder()->first()->id ?? Jurusan::factory()
        ];
    }
}
