<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show() //これパラメーターらしい
    {

        //$current_admin_name = Contact::where('name', $admin_name)->latest()->first(); //where()で条件を指定して取得する

        $contacts = Contact::first()->get(); //find()が唯一のものを取得表示、逆に複数ならall(), where()を使う

        if (!$contacts) {
            return redirect()->route('admin.index')->with('error', 'Contact not found.');
        }

        return view('admin', compact('contacts'));
    }
}
