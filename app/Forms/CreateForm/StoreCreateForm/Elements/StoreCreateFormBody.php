<?php

namespace App\Forms\CreateForm\StoreCreateForm\Elements;

use App\Forms\CreateForm\Common\Elements\CreateFormBodyInterface;

class StoreCreateFormBody implements CreateFormBodyInterface
{
    protected $elements;

    public function __construct()
    {
        $this->elements = [
            ['type' => 'text', 'name' => 'name', 'placeholder' => 'Name'],
            ['type' => 'email', 'name' => 'email', 'placeholder' => 'Email'],
            ['type' => 'text', 'name' => 'country', 'placeholder' => 'Country'],
            ['type' => 'text', 'name' => 'city', 'placeholder' => 'City'],
        ];
    }

    public function getBodyElements()
    {
        return $this->elements;
    }
}
