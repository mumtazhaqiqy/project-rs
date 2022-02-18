<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Patients extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'noRekamMedis' => [
                'type' => 'INT',
                'constraint' => 50
            ],
            'namaLengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            
        ])
    }

    public function down()
    {
        //
    }
}
