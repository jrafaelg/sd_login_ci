<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Posts extends Migration
{

    private $tableName = 'posts';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,

            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'contend' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'user_id' => [
                'type'      => 'INT',
                'unsigned'  => true,
                'null'      => false
            ],
            'digital_sign' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['publish', 'pending', 'draft'],
                'default'    => 'pending',
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
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addKey('title');
        $this->forge->createTable($this->tableName, true);
    }

    public function down()
    {
        $this->forge->dropTable($this->tableName, true);
    }
}
