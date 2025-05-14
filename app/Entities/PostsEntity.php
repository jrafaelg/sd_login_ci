<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class PostsEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];

    public function getTitle()
    {
        //$title = $this->attributes['title'];

        //dd(strtoupper($this->attributes['title']));
        // $this->attributes['created_at'] = $this->mutateDate($this->attributes['created_at']);
        $this->attributes['title'] = ucwords($this->attributes['title']);

        return $this->attributes['title'];
    }
}
