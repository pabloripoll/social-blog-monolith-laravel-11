<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminSessionModel;
use Domain\Driver\Admin\Object\AdminSessionObject;
use Domain\Driver\Admin\Repository\AdminSessionGetRepository;
use Domain\Driver\Admin\Repository\AdminSessionSetRepository;
use Domain\Driver\Admin\Repository\AdminSessionDelRepository;

class AdminSessionEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminSessionModel;
    }

    public function object()
    {
        return new AdminSessionObject;
    }

    public function get()
    {
        return new AdminSessionGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminSessionSetRepository)->row($input);
        }

        return new AdminSessionSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminSessionDelRepository)->row($input);
        }

        return new AdminSessionDelRepository;
    }

}
