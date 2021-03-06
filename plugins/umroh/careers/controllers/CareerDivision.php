<?php namespace Umrohcom\Careers\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Reward Claim Back-end Controller
 */
class CareerDivision extends Controller
{
    
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Umrohcom.Careers', 'careers', 'careerdivision');
    }
}
