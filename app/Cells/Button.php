<?php

namespace App\Cells;

class Button
{

    public function __construct()
    {
        // Constructor code here
    }

    public function del(array $param)
    {

        /**
         * <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
         *     Delete Item
         * </button>
         */

        $controller = ucfirst($param['controller']) ?? '';
        $method = $param['method'] ?? 'delete';
        $id = $controller . $param['id'] ?? 0;

        $target = $controller . '::' . $method;

        $url = url_to($target);
        $label = $param['title'] ?? 'Delete';
        $class = 'btn btn-danger';


        $html = <<<HTML
            <!-- <a href="$url" class="ci-fa-link link-danger-delete" data-bs-toggle="modal" data-bs-target="#deleteModal"> -->
            <a href="$url" class="ci-fa-link link-danger-delete" id="$id">
                <span class="align-items-center" title="$label">
                    <i class="fa-regular fa-trash-can fs-5 ms-2"></i>
                </span>
            </a>
            HTML;


        if (isset($param['button']) && $param['button'] == true) {
            $html = <<<HTML
                <button class="btn btn-danger link-danger-delete" id="$id" type="button" style="min-width: 100px;">$label</button>
            HTML;
        }

        return $html;
    }

    public function edit(array $param)
    {

        $controller = ucfirst($param['controller']) ?? '';
        $method = $param['method'] ?? 'edit';
        $id = $param['id'] ?? 0;

        $target = $controller . '::' . $method;

        $url = url_to($target, $id);
        $label = $param['title'] ?? 'Edit';


        $html = <<<HTML
        <a href="$url" class="ci-fa-link link-edit">
            <span class="align-items-center" title="$label">
                <i class="fa-regular fa-pen-to-square fs-5 ms-2"></i>
            </span>
        </a>
        HTML;

        if (isset($param['button']) && $param['button'] == true) {
            $html = <<<HTML
            <a href="$url" class="btn btn-primary" style="min-width: 100px;">$label</a>
            HTML;
        }

        return $html;
    }

    public function view(array $param)
    {

        $controller = ucfirst($param['controller']) ?? '';
        $method = $param['method'] ?? 'view';
        $id = $param['id'] ?? 0;

        $target = $controller . '::' . $method;

        $url = url_to($target, $id);
        $label = $param['title'] ?? 'Details';


        $html = <<<HTML
        <a href="$url" class="ci-fa-link">
            <span class="align-items-center" title="$label">
                <i class="fa-regular fa-eye fs-5 ms-2"></i>
            </span>
        </a>
        HTML;

        return $html;
    }

    public function reply(array $param)
    {

        $controller = ucfirst($param['controller']) ?? '';
        $method = $param['method'] ?? 'new';
        $object = $param['object'] ?? 1;
        $object_id = $param['object_id'] ?? 1;
        $id = $param['id'] ?? 0;

        $target = $controller . '::' . $method;

        $url = url_to($target, $object, $object_id, $id);
        $label = $param['title'] ?? 'Details';


        $html = <<<HTML
        <a href="$url" class="ci-fa-link">
            <span class="align-items-center" title="$label">
                <i class="fa-solid fa-reply"></i>
            </span>
        </a>
        HTML;

        return $html;
    }

    public function add(array $param)
    {

        $controller = ucfirst($param['controller']) ?? '';
        $method = $param['method'] ?? 'new';

        $target = $controller . '::' . $method;

        $url = url_to($target);
        $label = $param['title'] ?? 'Add';


        $html = <<<HTML
            <div class="row">
                <div class="d-flex justify-content-center">
                    <a href="$url" class="ci-fa-link btn btn-success d-flex align-items-center">
                        <!-- <i class="bi bi-plus me-2"></i> -->
                        <i class="fa fa-plus me-2 ci-fa-link" ></i>
                         $label
                    </a>
                </div>
            </div>
        HTML;

        return $html;
    }

    public function submit(array $param)
    {

        $label = $param['label'] ?? 'Submit';

        $html = <<<HTML
                <button class="btn btn-primary" type="submit" style="min-width: 100px;">$label</button>
        HTML;

        return $html;
    }

    public function back(array $param)
    {

        $label = $param['label'] ?? 'Back';

        $html = <<<HTML
                <!-- <a href="javascript:history.back()" class="btn btn-block btn-secondary w-4">$label</a> -->
                <button class="btn btn-secondary" onclick="javascript:history.back()" type="button" style="min-width: 100px;">$label</button>
        HTML;

        return $html;
    }
}
