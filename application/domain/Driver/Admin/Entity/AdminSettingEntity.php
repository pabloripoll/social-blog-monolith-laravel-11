<?php

namespace Domain\Driver\Admin\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Admin\Model\AdminSettingModel;
use Domain\Driver\Admin\Object\AdminSettingObject;
use Domain\Driver\Admin\Repository\AdminSettingGetRepository;
use Domain\Driver\Admin\Repository\AdminSettingSetRepository;
use Domain\Driver\Admin\Repository\AdminSettingDelRepository;

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
        return new AdminSettingGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new AdminSettingSetRepository)->row($input);
        }

        return new AdminSettingSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new AdminSettingDelRepository)->row($input);
        }

        return new AdminSettingDelRepository;
    }

}
