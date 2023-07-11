<?php

namespace Database\Factories;

use App\Models\Lead;
use App\Models\User;
use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LeadFactory extends Factory
{
    protected $model = Lead::class;

    public function definition()
    {
        $userIds = User::pluck('id')->toArray();
        $companyIds = Company::pluck('id')->toArray();
        $lastWeekStartDate = Carbon::now()->subWeek()->startOfDay();
        $lastWeekEndDate = Carbon::now()->subWeek()->endOfDay();

        return [
            'name' => $this->faker->name,
            'fullAddress' => $this->faker->address,
            'postcode' => $this->faker->postcode,
            'email' => $this->faker->unique()->safeEmail,
            'Phone' => $this->faker->phoneNumber,
            'landline' => $this->faker->phoneNumber,

            'created_at' => $this->faker->dateTimeBetween($lastWeekStartDate, $lastWeekEndDate),
            'dob' => $this->faker->date,
            'gasSupply' => $this->faker->randomElement(['Yes', 'No']),
            'employedBenefits' => $this->faker->randomElement(['Employed', 'Benefits', 'Both', 'None']),
            'earnings' => $this->faker->numberBetween(0, 100000),
            'benefit' => $this->faker->randomElement(['Yes', 'No']),
            'energyRating' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G']),
            'updatesSinceEpc' => $this->faker->randomElement(['Yes', 'No']),
            'belowthreshold' => $this->faker->randomElement(['Yes', 'No']),
            'housingSitu' => $this->faker->randomElement(['Homeowner', 'Private Rented', 'Social Rented', 'Other']),
            'typeOfProperty' => $this->faker->randomElement(['Detached', 'Semi-Detached', 'Terraced', 'Flat', 'Bungalow']),
            'wallType' => $this->faker->randomElement(['Cavity', 'Solid', 'Other']),
            'wallinsulation' => $this->faker->randomElement(['Yes', 'No']),
            'chosenHeatingOption' => $this->faker->randomElement(['Gas', 'Oil', 'Electric', 'LPG', 'Solid Fuel', 'Renewable']),
            'currentHeating' => $this->faker->randomElement(['Gas', 'Oil', 'Electric', 'LPG', 'Solid Fuel', 'Renewable']),
            'secondaryHeating' => $this->faker->randomElement(['Gas', 'Oil', 'Electric', 'LPG', 'Solid Fuel', 'Renewable', 'None']),
            'userID' => $this->faker->randomElement($userIds),
            'leadApproval' => $this->faker->randomElement(['1', '2']),
            'companyID' => $this->faker->randomElement($companyIds),
        ];
    }
}
