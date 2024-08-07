<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Vendors;
use CodeIgniter\HTTP\ResponseInterface;

class Vendor extends BaseController
{
    public function index()
    {

$vendores =new Vendors();

// Handle file uploads

 $msme=$this->request->getPost('msmeUnit');
if($msme=='Yes'){
    $fileMSME = $this->request->getFile('msmeCertificate');
}


// $scst=$this->request->getPost('scStWomen');
// if($scst=='Yes'){
//     $fileMSME = $this->request->getFile('scStWomenCertificate');
// }


// $startup=$this->request->getPost('startup');
// if($startup=='Yes'){
//     $fileMSME = $this->request->getFile('startupCertificate');
// }
 

$fileSCST = $this->request->getFile('sc_st_women_owner');
$fileStartup = $this->request->getFile('startup_certificate');

$data = [
    'vendor_name' => $this->request->getPost('vendorName'),
    'status_of_applicant' => $this->request->getPost('status'),
    'email_address' => $this->request->getPost('email'),
    'address_for_communication' => $this->request->getPost('address'),
    'website' => $this->request->getPost('website'),
    'telephone_no' => $this->request->getPost('telephone'),
    'fax_number' => $this->request->getPost('fax'),
    'authorised_person_name' => $this->request->getPost('authPersonName'),
    'authorised_person_designation' => $this->request->getPost('authPersonDesignation'),
    'authorised_person_email' => $this->request->getPost('authPersonEmail'),
    'authorised_person_mobile_no' => $this->request->getPost('authPersonMobile'),
    'authorised_person_telephone_no' => $this->request->getPost('authPersonTelephone'),
    'alternate_person_name' => $this->request->getPost('altPersonName'),
    'alternate_person_designation' => $this->request->getPost('altPersonDesignation'),
    'alternate_person_email' => $this->request->getPost('altPersonEmail'),
    'alternate_person_mobile_no' => $this->request->getPost('altPersonMobile'),
    'alternate_person_telephone_no' => $this->request->getPost('altPersonTelephone'),
    'pan_no' => $this->request->getPost('panNo'),
    'gem_id' => $this->request->getPost('gemId'),
    'gst_regn_no_with_address' => $this->request->getPost('gstNo'),
    'bank_account_no' => $this->request->getPost('bankAccountNo'),
    'ifsc_code' => $this->request->getPost('ifscCode'),
    'bank_name' => $this->request->getPost('bankName'),
    'bank_address' => $this->request->getPost('bankAddress'),
    'turnover_1' => $this->request->getPost('turnover2023'),
    'turnover_2' => $this->request->getPost('turnover2022'),
    'turnover_3' => $this->request->getPost('turnover2021'),
    'sales_turnover_in_crores' => $this->request->getPost('salesTurnover'),
    'detail_person_filling_name' => $this->request->getPost('fillerName'),
    'detail_person_filling_designation' => $this->request->getPost('fillerDesignation'),


];



// if ($fileMSME->isValid()) {
//     $fileMSME->move(WRITEPATH . 'uploads', 'msme_certificate_' . $fileMSME->getRandomName());
//     $data['msme_certificate'] = 'uploads/' . 'msme_certificate_' . $fileMSME->getRandomName();
// }

// if ($fileSCST->isValid()) {
//     $fileSCST->move(WRITEPATH . 'uploads', 'sc_st_women_owner_' . $fileSCST->getRandomName());
//     $data['sc_st_women_owner'] = 'uploads/' . 'sc_st_women_owner_' . $fileSCST->getRandomName();
// }

// if ($fileStartup->isValid()) {
//     $fileStartup->move(WRITEPATH . 'uploads', 'startup_certificate_' . $fileStartup->getRandomName());
//     $data['startup_certificate'] = 'uploads/' . 'startup_certificate_' . $fileStartup->getRandomName();
// }


if($vendores->save($data)){
    return 'ok';
}else{
    return "0";
}



    }
}
