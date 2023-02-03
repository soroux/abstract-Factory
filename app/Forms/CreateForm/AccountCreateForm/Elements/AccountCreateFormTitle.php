<?php

namespace App\Forms\CreateForm\AccountCreateForm\Elements;

use App\Forms\CreateForm\Common\Elements\CreateFormTitleInterface;

class AccountCreateFormTitle implements CreateFormTitleInterface
{
    protected $title;

    public function __construct()
    {
        $this->title = 'Create an account';
    }

    public function getTitle()
    {
        return $this->title;
    }
}
