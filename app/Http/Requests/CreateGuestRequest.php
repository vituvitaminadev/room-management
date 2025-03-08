<?php

namespace App\Http\Requests;

use App\Enum\GuestSex;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\ValidationException;

class CreateGuestRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'age' => ['required', 'integer'],
            'sex' => ['required', new Enum(GuestSex::class)],
        ];
    }
}
