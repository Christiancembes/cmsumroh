<?php namespace Umroh\Partners\Models;

use Model;

/**
 * Model
 */
class PartnerDocumentType extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Set Database Connection
     */
    protected $connection = 'mysql_package';

    /*
     * Slug field masking
     */
    protected $slugs = ['slug' => 'name'];

    /*
     * Field Rules
     */
    protected $rules = [
        'name' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'partner_document_types';

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
        'partnerdocument' => ['umroh\Partners\Models\PartnerDocument', 'key' => 'partner_document_type_id', 'otherKey' => 'id']
    ];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];


    public function getStatusRequiredAttribute()
    {
        
        if ($this->required == 0 || $this->required == NULL) {
            return 'Tidak Wajib';
        } else if ($this->required == 1) {
            return 'Wajib';
        }
    }
}
