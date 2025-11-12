<?php

namespace Modules\OpenAI\Http\Requests\v2;

use Illuminate\Foundation\Http\FormRequest;

class CodeRequest extends FormRequest
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
     * Modify incoming data before validation map with config file.
     */
    protected function prepareForValidation()
    {
        $map = config('models.mapping.code');
        $this->merge([
            'model' => $map[$this->input('model')] ?? $this->input('model'),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'prompt' => 'required',
            'provider' => 'required',
            'language' => 'sometimes|nullable',
            'codeLevel' => 'sometimes|nullable',
            'model' => 'sometimes|nullable'
        ];
    }

    
    /**
     * Custom validation messages
     */
    public function messages(): array
    {
        return [
            'provider' => __('Provider is not available. Please contact with Admin')
        ];
    }

}
