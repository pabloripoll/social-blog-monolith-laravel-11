<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberProfileModel;
use Domain\Driver\Member\Object\MemberProfileObject;
use Domain\Driver\Member\Repository\MemberProfileRepository;

class MemberProfileEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberProfileModel;
    }

    public function object()
    {
        return new MemberProfileObject;
    }

    public function get()
    {
        return new MemberProfileRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new MemberProfileRepository)->setById($input);
        }

        return new MemberProfileRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new MemberProfileRepository)->deleteById($input);
        }

        return new MemberProfileRepository;
    }

}
