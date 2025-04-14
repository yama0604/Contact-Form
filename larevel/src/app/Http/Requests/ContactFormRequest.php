<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
  public function authorize()
  {
      return true;
  }

  public function rules()
  {
      return [
          'last_name' => 'required|string|max:255',
          'first_name' => 'required|string|max:255',
          'gender' => 'required',
          'email' => 'required|email',
          'tel1' => 'nullable',
          'tel2' => 'nullable',
          'tel3' => 'nullable',
          'address' => 'required|string|max:255',
          'inquiry_type' => 'required',
          'inquiry' => 'required|max:120',
      ];
  }

  public function withValidator($validator)
  {
    $validator->after(function ($validator) {
      $tel1 = $this->input('tel1');
      $tel2 = $this->input('tel2');
      $tel3 = $this->input('tel3');
      if (empty($tel1) || empty($tel2) || empty($tel3)) {
          $validator->errors()->add('tel1', '電話番号を入力してください');
      } elseif (!ctype_digit($tel1) || !ctype_digit($tel2) || !ctype_digit($tel3)) {
          $validator->errors()->add('tel1', '電話番号は5桁までの数字で入力してください');
      } elseif (strlen($tel1) > 5 || strlen($tel2) > 5 || strlen($tel3) > 5) {
          $validator->errors()->add('tel1', '電話番号は5桁までの数字で入力してください');
      }
        });
  }

  public function messages()
  {
    return [
      'last_name.required' => '姓を入力してください',
      'first_name.required' => '名を入力してください',
      'gender.required' => '性別を選択してください',
      'email.required' => 'メールアドレスを入力してください',
      'email.email' => 'メールアドレスはメール形式で入力してください',
      'tel1.required' => '電話番号を入力してください',
      'tel1.numeric' => '電話番号は5桁までの数字で入力してください',
      'tel1.digits_between' => '電話番号は5桁までの数字で入力してください',
      'address.required' => '住所を入力してください',
      'inquiry_type.required' => 'お問い合わせの種類を選択してください',
      'inquiry.required' => 'お問い合わせ内容を入力してください',
      'inquiry.max' => 'お問合せ内容は120文字以内で入力してください',
    ];
  }
}