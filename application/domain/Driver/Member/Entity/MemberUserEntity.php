<?php

namespace Domain\Driver\Member\Entity;

use Domain\Driver\Member\Model\MemberUserModel;
use Domain\Driver\Member\Object\MemberUserObject;
use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Repository\MemberUserGetRepository;
use Domain\Driver\Member\Repository\MemberUserSetRepository;
use Domain\Driver\Member\Repository\MemberUserDelRepository;

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
        return new MemberUserGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new MemberUserSetRepository)->row($input);
        }

        return new MemberUserSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new MemberUserDelRepository)->row($input);
        }

        return new MemberUserDelRepository;
    }

}
