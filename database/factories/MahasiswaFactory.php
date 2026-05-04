<?php

namespace Database\Factories;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $angkatan = $this->faker->randomElement([21, 22, 23, 24, 25]);

        return [
            'nim' => $angkatan . $this->faker->unique()->numerify('##########'),
            'nama' => $this->faker->unique()->name(),
            'jurusan_id' => Jurusan::inRandomOrder()->first()->id ?? Jurusan::factory()
        ];
    }
}
