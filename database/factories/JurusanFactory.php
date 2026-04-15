<?php

namespace Database\Factories;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Jurusan>
 */
class JurusanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $jurusan = $this->faker->unique()->randomElement([
            ['jurusan' => 'Teknik Informatika', 'akreditasi' => 'A'],
            ['jurusan' => 'Sistem Informasi', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Elektro', 'akreditasi' => 'A'],
            ['jurusan' => 'Teknik Sipil', 'akreditasi' => 'A'],
            ['jurusan' => 'Teknik Mesin', 'akreditasi' => 'A'],
            ['jurusan' => 'Teknik Industri', 'akreditasi' => 'A'],
            ['jurusan' => 'Teknik Kimia', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Lingkungan', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Arsitektur', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Geologi', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Geodesi', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Perminyakan', 'akreditasi' => 'A'],
            ['jurusan' => 'Teknik Metalurgi', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Material', 'akreditasi' => 'A'],
            ['jurusan' => 'Teknik Nuklir', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Penerbangan', 'akreditasi' => 'A'],
            ['jurusan' => 'Teknik Perkapalan', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Kelautan', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Otomotif', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Telekomunikasi', 'akreditasi' => 'A'],
            ['jurusan' => 'Teknik Komputer', 'akreditasi' => 'A'],
            ['jurusan' => 'Teknik Biomedis', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Energi', 'akreditasi' => 'B'],
            ['jurusan' => 'Teknik Robotika', 'akreditasi' => 'A'],
        ]);

        return [
            'nama_jurusan' => $jurusan['jurusan'],
            'akreditasi' => $jurusan['akreditasi'],
        ];
    }
}
