<?php namespace Umroh\Packages\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Package_accomodation extends Controller
{
    public $implement = [        
    'Backend\Behaviors\ListController',        
    'Backend\Behaviors\FormController',        
    'Backend\Behaviors\ReorderController'    
];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Umroh.Packages', 'package','package_accomodation');
    }

    public function onGetPackage() {
        $this->vars['foo'] = 'bar';
    }
}
