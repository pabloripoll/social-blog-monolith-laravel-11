<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminTempTokenModel;
use Domain\Driver\Admin\Object\AdminTempTokenObject;
use Domain\Driver\Admin\Repository\AdminTempTokenGetRepository;
use Domain\Driver\Admin\Repository\AdminTempTokenSetRepository;
use Domain\Driver\Admin\Repository\AdminTempTokenDelRepository;

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
        return new AdminTempTokenGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminTempTokenSetRepository)->row($input);
        }

        return new AdminTempTokenSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminTempTokenDelRepository)->row($input);
        }

        return new AdminTempTokenDelRepository;
    }

}
