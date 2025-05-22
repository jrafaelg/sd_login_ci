<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class CommentsSeeder extends Seeder
{



    public function run()
    {
        $rows = array();
        for ($i = 0; $i < 10000; $i++) {
            $rows[$i] = $this->generateFake();
        }

        $this->db->table('comments')->insertBatch($rows);
    }

    /**
     * gerador de fakes
     */
    private function generateFake()
    {

        /**
         * CREATE TABLE "comments" (
         * 	"id" INTEGER NOT NULL,
         * 	"comment" TEXT NOT NULL,
         * 	"object" VARCHAR NOT NULL,
         * 	"object_id" INTEGER NOT NULL,
         * 	"parent_id" INTEGER NOT NULL,
         * 	"user_id" INTEGER NOT NULL,
         * 	"created_at" DATETIME NOT NULL,
         * 	"updated_at" DATETIME NULL,
         * 	"deleted_at" DATETIME NULL,
         * 	PRIMARY KEY ("id"),
         * 	CONSTRAINT "0" FOREIGN KEY ("user_id") REFERENCES "users" ("id") ON UPDATE CASCADE ON DELETE CASCADE
         * )
         */
        $fakerObject = Factory::create();

        return array(
            "comment" => $fakerObject->text('1000'),
            "object" => 'posts',
            "object_id" => random_int(1, 100),
            "user_id" => random_int(1, 9),
            "created_at" => $fakerObject->dateTime('now')->format('Y-m-d H:i:s'),
        );
    }
}
