<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PartnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => ['required'],
            'address' => ['required'],
            'phone' => ['required', 'numeric'],
            'map' => ['required'],
            'status' => ['required', 'in:active,inactive'],
        ];

        if ($this->image) {
            $rules['image'] = ['image', 'max:2048'];
        }

        if ($this->isMethod('post')) {
            $rules['username'] = ['required', 'unique:partners'];
            $rules['password'] = ['required', 'min:8'];
        } else if ($this->isMethod('put')) {
            $rules['username'] = ['required', Rule::unique('partners')->ignore($this->partner, 'id')];
        }

        return $rules;
    }
}
