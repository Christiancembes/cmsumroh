<?php namespace Umroh\Partners\Models;

use Model;
use Backend\Models\ExportModel;
use Umrohcom\Partners\Models\Partner;

/**
 * Model
 */
class PartnerExportModel extends Model
{
    public function exportData($columns, $sessionKey = null)
    {
        $partner = Partner::orderBy('partners.name', 'ASC')
                            ->get();

        $partner->each(function($partner) use ($columns) {
            $partner->addVisible($columns);
        });
        return $partner->toArray();
    }
}
