<?php namespace Umroh\Packages\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PackageVideo extends Controller
{
    public $implement = [        
        'Backend\Behaviors\ListController',        
        'Backend\Behaviors\FormController',        
        'Backend\Behaviors\RelationController'    
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Umroh.Packages', 'package','package_video');
    }
}
