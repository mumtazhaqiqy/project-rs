<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT', 
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ], 
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '50'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '15'
            ], 
            'address' => [
                'type' => 'TEXT',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
