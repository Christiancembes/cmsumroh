<?php namespace Umroh\Packages\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Package extends Controller
{
    public $implement = [        
    'Backend\Behaviors\ListController',        
    'Backend\Behaviors\FormController',        
    'Backend\Behaviors\RelationController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Umroh.Packages', 'packages');
    }

    public function onDuplicate() {
        $checked_items_ids = input('checked');

        $package = New \umroh\Packages\Models\package;

        foreach ($checked_items_ids as $id) {
        $original = $package::where('id',$id)->first();

        $clone = $original->replicate();
        $clone->name = $clone->name;
        $clone->id = $package::withTrashed()->max('id') + 1;
        
        $clone->save();
        }

        \Flash::success('Package Cloned');
        return $this->listRefresh();
    }
}
