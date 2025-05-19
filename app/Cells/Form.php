<?php

namespace App\Cells;

class Form
{

    public function del(array $param)
    {

        /**
         * <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
         *     Delete Item
         * </button>
         */

        $controller = ucfirst($param['controller']) ?? '';
        $method = $param['method'] ?? 'delete';
        $id = $param['id'] ?? 0;
        $idForm = 'form' . $controller . $id;

        $target = $controller . '::' . $method;

        $url = url_to($target);
        $csrf_field = csrf_field();

        $html = <<<HTML
        <form action="$url" id="$idForm" method="POST" accept-charset="utf-8" style="display: none;">
            $csrf_field
            <input type="hidden" name="id" value="$id">            
        </form>
        HTML;

        return $html;
    }
}
