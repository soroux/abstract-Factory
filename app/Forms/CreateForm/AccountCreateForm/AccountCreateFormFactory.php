<?php

namespace App\Forms\CreateForm\AccountCreateForm;

use App\Forms\CreateForm\Common\Factories\CreateFormFactoryInterface;
use App\Forms\CreateForm\AccountCreateForm\Elements;

class AccountCreateFormFactory implements CreateFormFactoryInterface
{
    public function getTitle()
    {
        $title = new Elements\AccountCreateFormTitle();
        return $title->getTitle();
    }

    public function getBodyElements()
    {
        $formBody = new Elements\AccountCreateFormBody();
        return $formBody->getBodyElements();
    }

    public function getSubmitAction()
    {
        $submitAction = new Elements\AccountCreateFormSubmitAction();
        return $submitAction->getActionUrl();
    }
}
