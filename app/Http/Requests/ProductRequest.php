<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'                 => 'required|min:2|max:99',
            'image'                 => 'image|max:5120|mimes:jpg,jpeg,png,gif',
            'gallery.*'             => 'image|max:5120|mimes:jpg,jpeg,png,gif',
        ];
    }

    public function messages()
    {
        return [
            'title.required'            => 'Ürün başlığını giriniz',
            'title.max'                 => 'Ürün başlığı en fazla 99 karakter olabilir',
            'title.min'                 => 'Ürün başlığı en az 2 karakter olabilir',

            'image.max'                 => 'Resim boyutu en yüksek 5120kb(5mb) olmalıdır',
            'image.mimes'               => 'Resim formatı jpg,jpeg,png,gif olmalıdır',
            'image.image'               => 'Resim formatı uygun değildir.',

            'gallery.*.max'             => 'Resim boyutu en yüksek 5120kb(5mb) olmalıdır',
            'gallery.*.mimes'           => 'Resim formatı jpg,jpeg,png,gif olmalıdır',
            'gallery.*.image'           => 'Resim formatı uygun değildir.',

        ];
    }
}
