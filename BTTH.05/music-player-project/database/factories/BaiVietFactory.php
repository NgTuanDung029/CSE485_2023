<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BaiViet>
 */
class BaiVietFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ma_tloai' => $this->faker->numberBetween(1, 10),
            'ma_tgia' => $this->faker->numberBetween(1, 10),
            'tieude' => $this->faker->text(10),
            'tomtat' => $this->faker->text(10),
            'noidung' => $this->faker->text(10),
            'hinhanh' => $this->faker->imageUrl(),
            'ten_bhat' => $this->faker->name(),
            'ngayviet' => $this->faker->date(),
        ];
    }
}
