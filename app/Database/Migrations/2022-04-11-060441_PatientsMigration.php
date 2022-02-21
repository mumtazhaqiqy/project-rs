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
                'constraint' => 50,
                'null' => false
            ],
            'alias' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'namaLengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => false
            ],
            'tempatLahir' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'tanggalLahir' => [
                'type' => 'DATE',
                'null' => false
            ],
            'jenisKelamin' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'agama' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'statusMenikah' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => false
            ],
            'pendidikanTerakhir' => [
                'type' => 'INT',
                'constraint' => 15,
                'null' => true
            ],
            'golonganDarah' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true
            ],
            'pekerjaanSekarang' => [
                'type' => 'INT',
                'constraint' => 10,
                'null' => true
            ],
            'alamatTinggal' => [
                'type' => 'TEXT',
                'null' => true
            ], 
            'noHandphone' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false
            ],
            'ktp' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => false
            ],
            'bpjs' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            ],
            'ayah' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true
            ],
            'ibu' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true
            ],
            'pasangan' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => true
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
