<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateVendorTbale extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'vendor_name' => [
                'type' => 'TEXT',
                'constraint' => '255',
            ],
           'status_of_applicant' => [
                'type' => 'TEXT',
                'constraint' => '255',
            ],
            'email_address' => [
                'type' => 'TEXT',
                'constraint' => 255,
            ],
            'address_for_communication' => [
                'type' => 'TEXT',
            ],
            'website' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'telephone_no' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'fax_number' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
            ],
            'authorised_person_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'authorised_person_designation' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'authorised_person_email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'authorised_person_mobile_no' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'authorised_person_telephone_no' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'alternate_person_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'alternate_person_designation' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'alternate_person_email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'alternate_person_mobile_no' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
            ],
            'alternate_person_telephone_no' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => true,
            ],
            'pan_no' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'gem_id' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'gst_regn_no_with_address' => [
                'type' => 'TEXT',
            ],
            'bank_account_no' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'ifsc_code' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'bank_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'bank_address' => [
                'type' => 'TEXT',
            ],
            'turnover_1' => [
                'type' => 'FLOAT',
                'null' => true,
            ],
            'turnover_2' => [
                'type' => 'FLOAT',
                'null' => true,
            ],
            'turnover_3' => [
                'type' => 'FLOAT',
                'null' => true,
            ],
            'sales_turnover_in_crores' => [
                'type' => 'FLOAT',
                'null' => true,
            ],
            'detail_person_filling_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'detail_person_filling_designation' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'msme_certificate' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'sc_st_women_owner' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'startup_certificate' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('vendor');
    }

    public function down()
    {
        //
        $this->forge->dropTable('vendor');
    }
}
