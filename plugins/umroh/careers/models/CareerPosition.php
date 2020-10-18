<?php namespace Umrohcom\Careers\Models;

use Model;
use Umrohcom\Provinces\Models\Province;
use Umrohcom\PackageFacility\Models\PackageFacility;
use Umrohcom\PackageType\Models\PackageType;

/**
 * Reward Setting Model
 */
class CareerPosition extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Set Database Connection
     */
    protected $connection = 'mysql_core';

     /*
     * Slug field masking
     */
    protected $slugs = ['slug' => 'name'];

    /*
     * Field Rules
     */
    protected $rules = [
        'name'                  => 'required',
        'tagline'               => 'required',
        'description_work'      => 'required',
        'qualification_minimun' => 'required',
        'province'              => 'required',
        'careerDivision'        => 'required',
        'careerLevel'           => 'required',
        'careerStatus'         => 'required'
    ];
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'career_positions';

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
    public $hasOne = [
    ];
    public $hasMany = [
        'careerFacilities' => ['Umrohcom\Careers\Models\CareerFacilities', 'key' => 'career_position_id', 'otherKey' => 'id']
    ];
    public $belongsTo = [
        'province' => ['Umrohcom\Provinces\Models\Province', 'key' => 'province_id', 'otherKey' => 'id'],
        'careerDivision' => ['Umrohcom\Careers\Models\CareerDivision', 'key' => 'career_divisions_id', 'otherKey' => 'id'],
        'careerLevel' => ['Umrohcom\Careers\Models\CareerLevel', 'key' => 'career_level_id', 'otherKey' => 'id'],
        'careerStatus' => ['Umrohcom\Careers\Models\CareerStatus', 'key' => 'career_status_id', 'otherKey' => 'id'],
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

    public function getCareerDivisionOptions()
    {
        $careerDivision = CareerDivision::lists('name', 'id');
        
        return $careerDivision;
    }

    public function getCareerLevelOptions()
    {
        $careerLevel = CareerLevel::lists('name', 'id');
        
        return $careerLevel;
    }

    public function getCareerStatusOptions()
    {
        $careerStatus = CareerStatus::lists('name', 'id');
        
        return $careerStatus;
    }
}
