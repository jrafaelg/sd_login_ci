<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class PostsSeeder extends Seeder
{



    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $posts[$i] = $this->generateFake();
        }

        $this->db->table('posts')->insertBatch($posts);
    }

    /**
     * gerador de fakes
     */
    private function generateFake()
    {

        /**
         * id
         * title
         * contend
         * user_id
         * digital_sign
         * status
         *      'publish', 'pending', 'draft'
         */
        $fakerObject = Factory::create();

        return array(
            "title" => $fakerObject->sentence(),
            "contend" => $fakerObject->text('1000'),
            "user_id" => random_int(1, 9),
            "digital_sign" => random_int(1000, 99999999),
            "status" => $fakerObject->randomElement(['publish', 'pending', 'draft']),
            "created_at" => date("Y-m-d H:i:s"),
        );
    }
}
