<?php

namespace App\Forms\CreateForm\AccountCreateForm\Elements;

use App\Forms\CreateForm\Common\Elements\CreateFormBodyInterface;

class AccountCreateFormBody implements CreateFormBodyInterface
{
    protected $elements;

    public function __construct()
    {
        $this->elements = [
            ['type' => 'text', 'name' => 'name', 'placeholder' => 'Name'],
            ['type' => 'email', 'name' => 'email', 'placeholder' => 'Email'],
            ['type' => 'text', 'name' => 'phone', 'placeholder' => 'Phone number'],
        ];
    }

    public function getBodyElements()
    {
        return $this->elements;
    }
}
