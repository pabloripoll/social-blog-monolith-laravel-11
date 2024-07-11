<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminSessionModel;
use Domain\Driver\Admin\Object\AdminSessionObject;
use Domain\Driver\Admin\Repository\AdminSessionRepository;

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
        return new AdminSessionRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminSessionRepository)->setById($input);
        }

        return new AdminSessionRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminSessionRepository)->deleteById($input);
        }

        return new AdminSessionRepository;
    }

}
