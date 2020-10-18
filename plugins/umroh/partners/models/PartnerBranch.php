<?php namespace Umroh\Partners\Models;

use Model;
use Umrohcom\Provinces\Models\Province;
use Umrohcom\Cities\Models\City;

/**
 * Model
 */
class PartnerBranch extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * Set Database Connection
     */
    protected $connection = 'mysql_package';

    /**
     * Field Rules
     */
    protected $rules = [
        'partner'      => 'required',
        'province'      => 'required',
        'city'          => 'required',
        'address'       => 'required',
        'zip'           => 'required',
        'phone'         => 'required',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'partner_branches';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'partner' => ['umroh\Partners\Models\Partner', 'key' => 'partner_id', 'otherKey' => 'id'],
        'province' => ['umroh\Provinces\Models\Province', 'key' => 'province_id', 'otherKey' => 'id'],
        'city' => ['umroh\Cities\Models\City', 'key' => 'city_id', 'otherKey' => 'id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getProvinceOptions()
    {
        $provinces = Province::lists('name', 'id');

        return $provinces;
    }

    public function getCityOptions()
    {
        if (isset($this->province->id))
        {
            $cities = City::where('province_id', '=', $this->province->id)->lists('name', 'id');
        }
        else
        {
            $cities = City::lists('name', 'id');
        }

        return $cities;
    }
    
}
