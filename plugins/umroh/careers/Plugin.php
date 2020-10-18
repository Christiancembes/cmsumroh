<?php namespace Umrohcom\Careers;

use Backend;
use System\Classes\PluginBase;

/**
 * rewards Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'careers',
            'description' => 'No description provided yet...',
            'author'      => 'umrohcom',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Umrohcom\Careers\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'umrohcom.careers.some_permission' => [
                'tab' => 'Karir',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [];
        return [
            'careers' => [
                'label'       => 'Karir',
                'url'         => Backend::url('umrohcom/careers/careerdivision'),
                'icon'        => 'icon-leaf',
                'permissions' => ['umrohcom.careers.*'],
                'order'       => 500,
                'sideMenu'    => [
                    'careerdivision' => [
                        'label'       => 'Divisi Karir',
                        'url'         => Backend::url('umrohcom/careers/careerdivision'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['umrohcom.careers.*'],
                    ],
                    'careerposition' => [
                        'label'       => 'Posisi Karir',
                        'url'         => Backend::url('umrohcom/careers/careerposition'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['umrohcom.careers.*'],
                    ],
                    'careerlevel' => [
                        'label'       => 'Level Kandidat',
                        'url'         => Backend::url('umrohcom/careers/careerlevel'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['umrohcom.careers.*'],
                    ],
                    'careerstatus' => [
                        'label'       => 'Status Kandidat',
                        'url'         => Backend::url('umrohcom/careers/careerstatus'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['umrohcom.careers.*'],
                    ]
                ]
            ],
        ];
    }
}
