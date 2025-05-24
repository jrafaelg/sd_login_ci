<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class CommentsEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function getComment()
    {
        return trim($this->attributes['comment']) ?? '';
    }

    public function setComment($comment)
    {
        $this->attributes['comment'] = trim($comment);
        return $this;
    }

    public function getObject()
    {
        return strtolower(trim($this->attributes['object'])) ?? '';
    }

    public function setObject($object)
    {
        $this->attributes['object'] = strtolower(trim($object));
        return $this;
    }
}
