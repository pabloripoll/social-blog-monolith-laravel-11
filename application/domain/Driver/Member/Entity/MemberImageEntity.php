<?php

namespace Domain\Driver\Member\Entity;

use Domain\Contract\Entity\DomainEntityInterface;
use Domain\Driver\Member\Model\MemberImageModel;
use Domain\Driver\Member\Object\MemberImageObject;
use Domain\Driver\Member\Repository\MemberImageGetRepository;
use Domain\Driver\Member\Repository\MemberImageSetRepository;
use Domain\Driver\Member\Repository\MemberImageDelRepository;

class MemberImageEntity implements DomainEntityInterface
{
    public function model()
    {
        return new MemberImageModel;
    }

    public function object()
    {
        return new MemberImageObject;
    }

    public function get()
    {
        return new MemberImageGetRepository;
    }

    public function set(object | array $input = null): mixed
    {
        if ($input) {
            $input = is_object($input) ? $input : (object) $input;

            return (new MemberImageSetRepository)->row($input);
        }

        return new MemberImageSetRepository;
    }

    public function delete(object | array | int $input = null): mixed
    {
        if ($input) {
            $input = is_array($input) ? (object) $input : $input;

            return (new MemberImageDelRepository)->row($input);
        }

        return new MemberImageDelRepository;
    }

}
