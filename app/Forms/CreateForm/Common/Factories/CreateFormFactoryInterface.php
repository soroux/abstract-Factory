<?php

namespace App\Forms\CreateForm\Common\Factories;

interface CreateFormFactoryInterface
{
    public function getTitle();
    public function getBodyElements();
    public function getSubmitAction();

}
