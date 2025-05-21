<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Comments extends Migration
{
    /**
     * Name of the table to be created
     *
     * @var string
     */
    private $tableName = 'comments';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'comment' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'object' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => false,
                'comment'    => 'a tabela principal que o comentário se refere',
            ],
            'object_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
                'comment'    => 'o ID do objeto na tabela principal que o comentário se refere',
            ],
            'parent_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false
            ],
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false
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

        $this->forge->addPrimaryKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addKey('title');
        $this->forge->addKey('object');
        $this->forge->createTable($this->tableName, true);
    }

    public function down()
    {
        $this->forge->dropTable($this->tableName, true);
    }
}
