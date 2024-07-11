<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberSettingModel;
use Domain\Driver\Member\Object\MemberSettingObject;
use Domain\Driver\Member\Repository\MemberSettingRepository;

class MemberSettingEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberSettingModel;
    }

    public function object()
    {
        return new MemberSettingObject;
    }

    public function get()
    {
        return new MemberSettingRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new MemberSettingRepository)->setById($input);
        }

        return new MemberSettingRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new MemberSettingRepository)->deleteById($input);
        }

        return new MemberSettingRepository;
    }

}
