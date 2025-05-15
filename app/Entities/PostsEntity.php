<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class PostsEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];


    /**
     * --------------------------------------------------------------------------
     * FUNÇÃO PARA FORMATAÇÃO DO CPF EM PYTHON
     * --------------------------------------------------------------------------
     * def __str__(self) -> str:
     *      verificador = self._cpf%100
     *      atual = self._cpf//100
     *      terc = atual%1000
     *      atual = atual//1000
     *      seg = atual%1000
     *      prim = atual//1000
     *      return f"{self.nome} {prim:03d}.{seg:03d}.{terc:03d}-{verificador:02d}"
     * 
     * PHP: intdiv(int $num1, int $num2): int
     * 
     */




    public function getTitle()
    {
        $this->attributes['title'] = ucwords($this->attributes['title']);

        return $this->attributes['title'];
    }

    public function setTitle($title)
    {
        $this->attributes['title'] = ucwords($title);

        return $this;
    }


    //     public function getCreatedAt(string $format = 'Y-m-d H:i:s')
    //     {
    //         // Convert to CodeIgniter\I18n\Time object
    //         //$this->attributes['created_at'] = $this->mutateDate($this->attributes['created_at']);

    //         //$timezone = $this->timezone ?? app_timezone();

    //         //$this->attributes['created_at']->setTimezone($timezone);

    //         //dd($this->attributes['created_at']);

    //         //return $this->attributes['created_at']->format($format);
    //     }
}
