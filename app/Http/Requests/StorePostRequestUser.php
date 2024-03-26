<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;

class StorePostRequestUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'nama' => 'required',
        ];
    }

    public function store (StorePostRequest $request): RedirectResponse{
        //retrieve the validated input data
        $validated = $request->validate();

        $validated = $request->safe()->only(['username','nama']);
        $validated = $request->safe()->except(['username','nama']);

        return redirect('/user');
    }
}
