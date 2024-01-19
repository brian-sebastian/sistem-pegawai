<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => fake()->name(),
            'jenis_kelamin' => 'laki_laki',
            'tanggal_lahir' => fake()->date(),
            'alamat' => fake()->address(),
            'no_telpon' => fake()->phoneNumber(),
            'foto' => fake()->imageUrl(),
            'email' => fake()->email(),
            'jabatan' => fake()->title(),
            'gaji' => fake()->numerify('#####'),
            'tanggal_masuk' => fake()->date(),
        ];
    }
}
