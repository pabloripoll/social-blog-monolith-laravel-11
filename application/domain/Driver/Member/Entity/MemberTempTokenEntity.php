<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberTempTokenModel;
use Domain\Driver\Member\Object\MemberTempTokenObject;
use Domain\Driver\Member\Repository\MemberTempTokenGetRepository;
use Domain\Driver\Member\Repository\MemberTempTokenSetRepository;
use Domain\Driver\Member\Repository\MemberTempTokenDelRepository;

class MemberTempTokenEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberTempTokenModel;
    }

    public function object()
    {
        return new MemberTempTokenObject;
    }

    public function get()
    {
        return new MemberTempTokenGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new MemberTempTokenSetRepository)->row($input);
        }

        return new MemberTempTokenSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new MemberTempTokenDelRepository)->row($input);
        }

        return new MemberTempTokenDelRepository;
    }

}
