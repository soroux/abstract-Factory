<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Forms\CreateForm\CreateForm;
use App\Forms\CreateForm\AccountCreateForm\AccountCreateFormFactory;

class AccountController extends Controller
{
    public function create()
    {
        $createForm = CreateForm::getInstance(new AccountCreateFormFactory());

        return view('create', ['form' => $createForm]);
    }
}
