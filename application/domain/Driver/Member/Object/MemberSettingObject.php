<?php

namespace Domain\Driver\Member\Object;

use Domain\Contract\Object\DomainObjectAbstract;
use Domain\Contract\Object\DomainObjectInterface;
use Domain\Driver\Member\Validation\MemberSettingValidation;

class MemberSettingObject extends DomainObjectAbstract implements DomainObjectInterface
{
    /**
     * Required from abstract methods
     */
    public function validation(): object
    {
        return new MemberSettingValidation;
    }

    /**
     * Output normalized value or required properties
     */
    public function value(object | array $row = null): object
    {
        $object = new \stdClass;

        $object->id = $row->id ?? null;
        $object->user_id = $row->user_id ?? null;
        $object->params = $row->params ?? null;
        $object->created_at = $row->created_at ? null : $row->created_at->format('Y-m-d H:i:s');
        $object->updated_at = $row->updated_at ? null : $row->updated_at->format('Y-m-d H:i:s');

        return $object;
    }

    public function normalize(string $key, mixed $value): mixed
    {
        return $value;
    }

}
