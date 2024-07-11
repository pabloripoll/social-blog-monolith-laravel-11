<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberProfileModel;
use Domain\Driver\Member\Object\MemberProfileObject;
use Domain\Driver\Member\Repository\MemberProfileGetRepository;
use Domain\Driver\Member\Repository\MemberProfileSetRepository;
use Domain\Driver\Member\Repository\MemberProfileDelRepository;

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
        return new MemberProfileGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new MemberProfileSetRepository)->row($input);
        }

        return new MemberProfileSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new MemberProfileDelRepository)->row($input);
        }

        return new MemberProfileDelRepository;
    }

}
