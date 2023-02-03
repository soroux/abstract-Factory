<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Forms\CreateForm\StoreCreateForm\StoreCreateFormFactory;
use App\Forms\CreateForm\CreateForm;

class StoreController extends Controller
{
    public function create()
    {
        $createForm = CreateForm::getInstance(new StoreCreateFormFactory());

        return view('create', ['form' => $createForm]);
    }
}
