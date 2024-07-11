<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberTempTokenModel;
use Domain\Driver\Member\Object\MemberTempTokenObject;
use Domain\Driver\Member\Repository\MemberTempTokenRepository;

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
        return new MemberTempTokenRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new MemberTempTokenRepository)->setById($input);
        }

        return new MemberTempTokenRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new MemberTempTokenRepository)->deleteById($input);
        }

        return new MemberTempTokenRepository;
    }

}
