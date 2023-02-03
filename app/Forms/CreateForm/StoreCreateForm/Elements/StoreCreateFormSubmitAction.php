<?php

namespace App\Forms\CreateForm\StoreCreateForm\Elements;

use App\Forms\CreateForm\Common\Elements\CreateFormSubmitActionInterface;

class StoreCreateFormSubmitAction implements CreateFormSubmitActionInterface
{
    protected $actionUrl;

    public function __construct()
    {
        $this->actionUrl = '/create-store';
    }

    public function getActionUrl()
    {
        return $this->actionUrl;
    }
}
