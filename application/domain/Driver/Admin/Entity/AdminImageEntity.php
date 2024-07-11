<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminImageModel;
use Domain\Driver\Admin\Object\AdminImageObject;
use Domain\Driver\Admin\Repository\AdminImageGetRepository;
use Domain\Driver\Admin\Repository\AdminImageSetRepository;
use Domain\Driver\Admin\Repository\AdminImageDelRepository;

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
        return new AdminImageGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminImageSetRepository)->row($input);
        }

        return new AdminImageSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminImageDelRepository)->row($input);
        }

        return new AdminImageDelRepository;
    }

}
