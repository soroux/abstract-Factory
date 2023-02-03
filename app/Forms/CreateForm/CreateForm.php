<?php

namespace App\Forms\CreateForm;

use App\Forms\CreateForm\Common\Factories\CreateFormFactoryInterface;

class CreateForm
{
    private static $instance;
    protected $createFormFactory;

    private function __construct(CreateFormFactoryInterface $createFormFactory)
    {
        $this->createFormFactory = $createFormFactory;
    }

    public static function getInstance(CreateFormFactoryInterface $createFormFactory)
    {
        if(empty(self::$instance)){
            self::$instance = new CreateForm($createFormFactory);
        }

        return self::$instance;
    }

    public function getTitle()
    {
        return $this->createFormFactory->getTitle();
    }

    public function getBodyElements()
    {
        return $this->createFormFactory->getBodyElements();
    }

    public function getSubmitAction()
    {
        return $this->createFormFactory->getSubmitAction();
    }
}
