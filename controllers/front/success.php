<?php

class activateaccountbyemailsuccessModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $this->setTemplate('module:activateaccountbyemail/views/templates/front/success.tpl');
    }
}
