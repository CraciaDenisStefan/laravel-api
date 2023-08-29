<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'image_type' => 'image|mimes:jpeg,png,jpg,gif,svg|max:250',
        ];
    }

       public function messages(){
        return[

            'name.required' => 'Il nome è obbligatorio !',
            'name.max' =>  'Numero massimo di caratteri nel titolo è :max !',
            'image_type.image' =>'Il file deve essere un\'immagine!',
            'image_type.mimes' => 'Il file immagine deve essere in uno dei seguenti formati: jpeg, jpg, png, gif',
            'image_type.max' => 'Il file immagine non deve superare :max KB!',
        ];
    }
}
