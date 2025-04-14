<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Models\Category;

class ContactController extends Controller
{
    // お問い合わせフォーム入力ページ
    public function contactForm()
    {
        $categories = Category::all();
        return view('contact.contactForm', compact('categories'));
    }

    // 確認画面
    public function confirm(ContactFormRequest $request)
    {
        $contact = $request->only([
            'last_name', 'first_name', 'gender', 'email',
            'tel1', 'tel2', 'tel3', 'address', 'building',
            'inquiry_type', 'inquiry'
        ]);
        return view('contact.confirm', compact('contact'));
    }

    // 完了画面
    public function thanks(Request $request)
    {
        $contact = $request->only([
            'last_name', 'first_name', 'gender', 'email',
            'tel1', 'tel2', 'tel3', 'address', 'building',
            'inquiry_type', 'inquiry'
        ]);
        // ここでDB保存も可能（例：Contact::create($contact)）
        return view('contact.thanks');
    }
}
