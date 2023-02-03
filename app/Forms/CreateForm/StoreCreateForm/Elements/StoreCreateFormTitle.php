<?php

namespace App\Forms\CreateForm\StoreCreateForm\Elements;

use App\Forms\CreateForm\Common\Elements\CreateFormTitleInterface;

class StoreCreateFormTitle implements CreateFormTitleInterface
{
    protected $title;

    public function __construct()
    {
        $this->title = 'Create a store';
    }

    public function getTitle()
    {
        return $this->title;
    }
}
