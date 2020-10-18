<?php namespace Umroh\Crm\Models;

use Model;

/**
 * Model
 */
class Pushnotification extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'umroh_crm_table';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
