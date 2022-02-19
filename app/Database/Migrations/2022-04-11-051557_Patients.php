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
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'alias' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'namaLengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'tempatLahir' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'tanggalLahir' => [
                'type' => 'DATE',
            ],
            'jenisKelamin' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'statusMenikah' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'pendidikanTerakhir' => [
                'type' => 'INT',
                'constraint' => 15
            ],
            'golonganDarah' => [
                'type' => 'VARCHAR',
                'constraint' => 10
            ],
            'pekerjaanSekarang' => [
                'type' => 'INT',
                'constraint' => 10
            ],
            'alamatTinggal' => [
                'type' => 'TEXT',
                'null' => true
            ], 
            'noHandphone' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'ktp' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'bpjs' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
            'uploadFile' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]); 

        $this->forge->addKey('id', true);
        $this->forge->createTable('patients');
    }

    public function down()
    {
        $this->forge->dropTable('patients');
    }
}
