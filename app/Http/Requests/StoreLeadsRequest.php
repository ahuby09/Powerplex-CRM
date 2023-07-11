<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'fullAddress' => 'required',
            'postcode' => 'required',
            'email' => 'required|email',
            'Phone' => 'required|numeric',
            'landline' => 'nullable|numeric',
            'dob' => 'required|date',
            'gasSupply' => 'required|in:yes,no',
            'employedBenefits' => 'required|in:Benefits,Working',
            'benefit' => 'required|in:none,UC,JSA,IS,PCG,WTC,CTC,HB,PCSC,CB',
            'energyRating' => 'required|in:E,F,G',
            'updatesSinceEpc' => 'nullable|string',
            'belowthreshold' => 'required|in:yes,no,notApp',
            'customerincome' => 'nullable|string',
            'housingSitu' => 'required|in:Owner,Private Tenant,Social Housing',
            'typeOfProperty' => 'required|in:Detached,Semi Detached,Mid-Terrace,Bungalow,Flat,Maisonette',
            'wallType' => 'required|in:Brick,Wood,Cavity Wall,Stone',
            'wallinsulation' => 'required|in:Yes,No',
            'chosenHeatingOption' => 'required|in:Solar Pv,First Tiem central heating,Air Source Heat Pump,High heat electric storage heaters',
            'currentHeating' => 'required|in:Solar Pv,Boiler,Air Source Heat Pump,storage heaters,solid fuel',
            'secondaryHeating' => 'required|in:Solar Pv,Boiler,Air Source Heat Pump,storage heaters,solid fuel,none',
            'medicalCondtions' => 'nullable|string',
            'notes' => 'nullable|string',

            // other validation rules
        ];
    }
}
