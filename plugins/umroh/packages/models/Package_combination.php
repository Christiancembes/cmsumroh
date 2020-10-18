<?php namespace Umroh\Packages\Models;

use Model;

/**
 * Model
 */
class Package_combination extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Validation;

    /**
     * Set Database Connection
     */
    protected $connection = 'mysql_package';

    /**
     * Field Rules
     */
    protected $rules = [
        'room_capacity' => 'required',
        'price' => 'required',
        'discount' => 'required'
    ];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'umroh_packages_package_combinations';

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
        'package' => ['umroh\Packages\Models\Packages', 'key' => 'package_id', 'otherKey' => 'id'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $morphOne = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getDiscountRuleOptions()
    {
        return ['nominal' => 'Nominal','percentage' => 'Percentage'];
    }

    public function filterFields($fields, $context = null)
    {
        if($this->discount == 0) {
            $fields->discount_rule_value = 0;
            $fields->discount_rule->disabled = true;
            $fields->final_price->value = $this->price - $this->discount;
        } else {
            $fields->discount_rule->value = 'nominal';
            $fields->final_price->value = $this->price - $this->discount;
        }

        if($this->discount_rule == 'nominal') {
            $fields->final_price->value = $this->price - $this->discount;
        } else if($this->discount_rule == 'percentage') {
            $price = $this->price;
            $discount = $this->discount;
            $price_discount = ($price / 100) * $discount;

            $fields->final_price->value = $price - $price_discount;
        } else {
            $fields->final_price->value = $this->price - $this->discount;
        }

    }
}
