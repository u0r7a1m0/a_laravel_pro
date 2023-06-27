<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        // return view('index');
            // $contacts = Contact::all();
            // 'contact' => new Contact()

        
    }
    public function create()
    {
        // return view('contacts.create');
    }

    public function store(Request $request)
    {
        // 新規登録の処理を行うコード
    }
}
