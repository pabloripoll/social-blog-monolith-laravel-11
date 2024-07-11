<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminTempTokenModel;
use Domain\Driver\Admin\Object\AdminTempTokenObject;
use Domain\Driver\Admin\Repository\AdminTempTokenRepository;

class AdminTempTokenEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminTempTokenModel;
    }

    public function object()
    {
        return new AdminTempTokenObject;
    }

    public function get()
    {
        return new AdminTempTokenRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminTempTokenRepository)->setById($input);
        }

        return new AdminTempTokenRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminTempTokenRepository)->deleteById($input);
        }

        return new AdminTempTokenRepository;
    }

}
