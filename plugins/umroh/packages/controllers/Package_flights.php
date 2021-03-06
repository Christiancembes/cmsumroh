<?php namespace Umroh\Packages\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Package_flights extends Controller
{
    public $implement = [        
    'Backend\Behaviors\ListController',        
    'Backend\Behaviors\FormController'   
];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Umroh.Packages', 'package','package_flights');
    }
}
