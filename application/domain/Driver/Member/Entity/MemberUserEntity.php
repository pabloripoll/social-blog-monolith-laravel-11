<?php

namespace Domain\Driver\Member\Entity;

use Domain\Driver\Member\Model\MemberUserModel;
use Domain\Driver\Member\Object\MemberUserObject;
use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Repository\MemberUserRepository;

class MemberUserEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberUserModel;
    }

    public function object()
    {
        return new MemberUserObject;
    }

    public function get()
    {
        return new MemberUserRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new MemberUserRepository)->setById($input);
        }

        return new MemberUserRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new MemberUserRepository)->deleteById($input);
        }

        return new MemberUserRepository;
    }

}
