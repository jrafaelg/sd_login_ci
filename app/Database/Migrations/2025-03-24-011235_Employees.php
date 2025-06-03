<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Employees extends Migration
{

    private $tableName = 'employees';

    /**
     * CREATE TABLE IF NOT EXISTS employees (
     *         id INTEGER PRIMARY KEY AUTOINCREMENT,
     *         name TEXT NOT NULL,
     *         address TEXT NOT NULL,
     *         salary INTEGER NOT NULL,
     *         cod_user INTEGER NOT NULL,
     *         digital_sign TEXT NOT NULL
     * );
     */
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'salary' => [
                'type' => 'INT',
                'null' => false,
            ],
            'cod_user' => [
                'type' => 'INT',
                'null' => false,
            ],
            'digital_sign' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
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
