<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Backupcodes extends Migration
{

    private $tableName = 'backupcodes';

    /**
     * CREATE TABLE IF NOT EXISTS backupcodes (
     *      id INTEGER PRIMARY KEY AUTOINCREMENT,
     *      cod_user INTEGER NOT NULL,
     *      backup_code TEXT NOT NULL,
     *      used INTEGER DEFAULT 0 NOT NULL
     *);
     */
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,

            ],
            'cod_user' => [
                'type'       => 'INT',
                'null'       => false,
            ],
            'backup_code' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => false,
            ],
            'used' => [
                'type' => 'BOOLEAN',
                'null' => true,
                'default' => 0,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable($this->tableName, true);
    }

    public function down()
    {
        $this->forge->dropTable($this->tableName, true);
    }
}
