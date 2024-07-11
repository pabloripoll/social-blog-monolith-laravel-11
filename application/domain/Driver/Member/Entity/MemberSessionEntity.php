<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberSessionModel;
use Domain\Driver\Member\Object\MemberSessionObject;
use Domain\Driver\Member\Repository\MemberSessionGetRepository;
use Domain\Driver\Member\Repository\MemberSessionSetRepository;
use Domain\Driver\Member\Repository\MemberSessionDelRepository;

class MemberSessionEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberSessionModel;
    }

    public function object()
    {
        return new MemberSessionObject;
    }

    public function get()
    {
        return new MemberSessionGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new MemberSessionSetRepository)->row($input);
        }

        return new MemberSessionSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new MemberSessionDelRepository)->row($input);
        }

        return new MemberSessionDelRepository;
    }

}
