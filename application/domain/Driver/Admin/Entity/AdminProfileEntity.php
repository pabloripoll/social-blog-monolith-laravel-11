<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminProfileModel;
use Domain\Driver\Admin\Object\AdminProfileObject;
use Domain\Driver\Admin\Repository\AdminProfileRepository;

class AdminProfileEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminProfileModel;
    }

    public function object()
    {
        return new AdminProfileObject;
    }

    public function get()
    {
        return new AdminProfileRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminProfileRepository)->setById($input);
        }

        return new AdminProfileRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminProfileRepository)->deleteById($input);
        }

        return new AdminProfileRepository;
    }

}
