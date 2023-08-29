<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => 'required|max:100',
            'date'   => 'required',
            'description' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:250',
            'type_id'    => 'required|exists:types,id',
        ];
    }
    public function messages(){
        return[

            'title.required' => 'Il titolo è obbligatorio !',
            'title.max' =>  'Numero massimo di caratteri nel titolo è :max !',
            'date.required' => 'La data di creazione è obbligatoria !',
            'description.required' => 'La descrizione è obbligatoria !',
            'cover_image.image' =>'Il file deve essere un\'immagine!',
            'cover_image.max' => 'Il file immagine non deve superare :max KB!',
            'cover_image.mimes' => 'Il file immagine deve essere in uno dei seguenti formati: jpeg, png, gif',
            'type_id.required'  => 'Devi selezionare una categoria',
            'type_id.exists'    => 'Categoria non valida',
        ];
    }
}
