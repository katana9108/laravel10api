<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_number'=>fake()->number(),
            'total_price'=>fake()->price(),
            'total_price_excluding_vat'=>fake()->price(),
            'total_vat'=>fake()->price(),
        ];
    }
}
