<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Driver\Admin\Model\AdminUserModel;
use Domain\Driver\Admin\Object\AdminUserObject;
use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Repository\AdminUserGetRepository;
use Domain\Driver\Admin\Repository\AdminUserSetRepository;
use Domain\Driver\Admin\Repository\AdminUserDelRepository;

class AdminUserEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminUserModel;
    }

    public function object()
    {
        return new AdminUserObject;
    }

    public function get()
    {
        return new AdminUserGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminUserSetRepository)->row($input);
        }

        return new AdminUserSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminUserDelRepository)->row($input);
        }

        return new AdminUserDelRepository;
    }

}
