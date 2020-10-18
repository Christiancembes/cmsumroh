<?php namespace Umroh\Partners\Models;

use Model;

/**
 * Model
 */
class PartnerDocument extends Model
{
    use \October\Rain\Database\Traits\SoftDelete;
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


    /**
     * @var string The database table used by the model.
     */
    public $table = 'partner_documents';

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
    public $hasMany = [];
    public $belongsTo = [
        'partner' => ['umroh\Partners\Models\Partner', 'key' => 'partner_id', 'otherKey' => 'id'],
        'partnerdocumenttype' => ['umroh\Partners\Models\PartnerDocumentType', 'key' => 'partner_document_type_id', 'otherKey' => 'id'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getVerifiedHelperAttribute()
    {
        if ($this->verified == 0)
            return 'Belum Verifikasi';
        else if ($this->verified == 1)
            return 'Sudah Verfikasi';
    }

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
