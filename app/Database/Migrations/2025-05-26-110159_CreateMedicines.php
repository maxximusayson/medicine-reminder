<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMedicines extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'dosage'     => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'schedule'   => [
                'type'       => 'VARCHAR',
                'constraint' => 50
            ],
            'taken'      => [
                'type'       => 'BOOLEAN',
                'default'    => false
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('medicines');
    }

    public function down()
    {
        $this->forge->dropTable('medicines');
    }
}
