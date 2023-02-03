<?php

namespace App\Forms\CreateForm\StoreCreateForm;

use App\Forms\CreateForm\Common\Factories\CreateFormFactoryInterface;
use App\Forms\CreateForm\StoreCreateForm\Elements;

class StoreCreateFormFactory implements CreateFormFactoryInterface
{
    public function getTitle()
    {
        $title = new Elements\StoreCreateFormTitle();
        return $title->getTitle();
    }

    public function getBodyElements()
    {
        $formBody = new Elements\StoreCreateFormBody();
        return $formBody->getBodyElements();
    }

    public function getSubmitAction()
    {
        $submitAction = new Elements\StoreCreateFormSubmitAction();
        return $submitAction->getActionUrl();
    }
}
