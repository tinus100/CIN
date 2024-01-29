<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'voornaam' => $this->faker->firstName(),
            'geslacht' => $this->faker->randomElement(['Mevr.', 'Dhr.']),
            'adres' => $this->faker->city(),
            'postcode' => $this->faker->bothify('#### ??'),
            'gemeente' => $this->faker->randomElement(['Borsele', 'Goes', 'Hulst', 'Kapelle', 'Middelburg', 'Noord-Beveland', 'Reimerswaald', 'Schouwen-Duiveland', 'Sluis', 'Terneuzen', 'Tholen', 'Veere', 'Vlissingen']),
            'regio' => $this->faker->randomElement(['Tholen', 'Sint Philipsland', 'Schouwen-Duiveland', 'Noord-Beveland', 'Zuid-Beveland', 'Walcheren', 'Zeeuws-Vlaanderen']),
            'verwijzer' => $this->faker->randomElement(['Emergis', 'Vluchtelingen werk', 'Zorgstroom', 'Voedselbank', 'MWW', 'Aan-Z', 'Juvent', 'Huisarts', 'Leger des Heils', 'Kledingbank', 'FinaSol', 'Diaconie', 'Vispoort']),
            'volwassen' => $this->faker->boolean,
            'kind' => $this->faker->numberBetween(0, 3),
            'linnen' => $this->faker->boolean,
            'speelgoed' => $this->faker->boolean,
        ];
    }
}
