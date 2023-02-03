<?php

namespace App\Forms\CreateForm\AccountCreateForm\Elements;

use App\Forms\CreateForm\Common\Elements\CreateFormSubmitActionInterface;

class AccountCreateFormSubmitAction implements CreateFormSubmitActionInterface
{
    protected $actionUrl;

    public function __construct()
    {
        $this->actionUrl = '/create-account';
    }

    public function getActionUrl()
    {
        return $this->actionUrl;
    }
}
