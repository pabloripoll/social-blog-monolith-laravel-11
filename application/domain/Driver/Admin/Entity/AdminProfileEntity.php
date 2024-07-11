<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminProfileModel;
use Domain\Driver\Admin\Object\AdminProfileObject;
use Domain\Driver\Admin\Repository\AdminProfileGetRepository;
use Domain\Driver\Admin\Repository\AdminProfileSetRepository;
use Domain\Driver\Admin\Repository\AdminProfileDelRepository;

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
        return new AdminProfileGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminProfileSetRepository)->row($input);
        }

        return new AdminProfileSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminProfileDelRepository)->row($input);
        }

        return new AdminProfileDelRepository;
    }

}
