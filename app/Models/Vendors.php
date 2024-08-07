<?php

namespace App\Models;

use CodeIgniter\Model;

class Vendors extends Model
{
    protected $table            = 'vendors';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['vendor_name','status_of_applicant','email_address','address_for_communication','website','telephone_no','fax_number','authorised_person_name','authorised_person_designation','authorised_person_email','authorised_person_mobile_no','authorised_person_telephone_no','alternate_person_name','alternate_person_designation','alternate_person_email','alternate_person_mobile_no','alternate_person_telephone_no','pan_no','gem_id','gst_regn_no_with_address','bank_account_no','ifsc_code','bank_name','bank_address','turnover_1','turnover_2','turnover_3','sales_turnover_in_crores','detail_person_filling_name','detail_person_filling_designation'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
