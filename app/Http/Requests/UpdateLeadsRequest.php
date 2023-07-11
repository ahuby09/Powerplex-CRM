<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLeadsRequest extends FormRequest
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
            'dob' => 'required|date',
            'medicalCondtions' => 'nullable|string',
            'fullAddress' => 'required|string',
            'postcode' => 'required|string',
            'Phone' => 'required|string',
            'landline' => 'nullable|string',
            'email' => 'required|email',
            'gasSupply' => 'required|string',
            'employedBenefits' => 'required|string',
            'benefit' => 'required|string',
            'companyID' => 'nullable|exists:companies,id',
            'belowthreshold' => 'nullable|string',
            'earnings' => 'nullable|string',
            'energyRating' => 'nullable|string',
            'updatesSinceEpc' => 'nullable|string',
            'condensingBoiler' => 'nullable|string',
            'housingSitu' => 'nullable|string',
            'typeOfProperty' => 'nullable|string',
            'wallType' => 'nullable|string',
            'wallinsulation' => 'nullable|string',
            'chosenHeatingOption' => 'nullable|string',
            'currentHeating' => 'nullable|string',
            'secondaryHeating' => 'nullable|string',
            'leadApproval' => 'required',
        ];
    }
}
