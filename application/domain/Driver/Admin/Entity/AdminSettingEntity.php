<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminSettingModel;
use Domain\Driver\Admin\Object\AdminSettingObject;
use Domain\Driver\Admin\Repository\AdminSettingRepository;

class AdminSettingEntity implements DomainEntityInterface
{
    public function model()
    {
        return new AdminSettingModel;
    }

    public function object()
    {
        return new AdminSettingObject;
    }

    public function get()
    {
        return new AdminSettingRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminSettingRepository)->setById($input);
        }

        return new AdminSettingRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminSettingRepository)->deleteById($input);
        }

        return new AdminSettingRepository;
    }

}
