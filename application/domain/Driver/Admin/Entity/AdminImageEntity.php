<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminImageModel;
use Domain\Driver\Admin\Object\AdminImageObject;
use Domain\Driver\Admin\Repository\AdminImageRepository;

class AdminImageEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminImageModel;
    }

    public function object()
    {
        return new AdminImageObject;
    }

    public function get()
    {
        return new AdminImageRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminImageRepository)->setById($input);
        }

        return new AdminImageRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminImageRepository)->deleteById($input);
        }

        return new AdminImageRepository;
    }

}
