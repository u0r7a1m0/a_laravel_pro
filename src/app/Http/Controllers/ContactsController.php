<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Department;
class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $departments = Department::all();
        return view('contacts.index', ['contacts' => $contacts]);
    }
    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        // 新規登録の処理を行うコード
    }
}
