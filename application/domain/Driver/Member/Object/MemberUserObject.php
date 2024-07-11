<?php

namespace Domain\Driver\Member\Object;

use Illuminate\Support\Facades\Hash;
use Domain\Contract\Object\DomainObjectAbstract;
use Domain\Contract\Object\DomainObjectInterface;
use Domain\Driver\Member\Validation\MemberUserValidation;

class MemberUserObject extends DomainObjectAbstract implements DomainObjectInterface
{
    /**
     * Required from abstract methods
     */
    public function validation(): object
    {
        return new MemberUserValidation;
    }

    /**
     * Output normalized value or required properties
     */
    public function value(object | array $row = null): object
    {
        $object = new \stdClass;

        $object->id = $row->id ?? null;
        $object->pid = $row->pid ?? null;
        $object->is_active = $row->is_active ?? null;
        $object->is_banned = $row->is_banned ?? null;
        $object->username = $row->username ?? null;
        $object->alias = $row->alias ?? null;
        $object->password = $row->password ?? null;
        $object->created_by_user_id = $row->created_by_user_id ?? null;
        $object->created_at = $row->created_at ? $row->created_at->toDateTimeString() : null;
        $object->updated_at = $row->updated_at ? $row->updated_at->toDateTimeString() : null;

        return $object;
    }

    public function normalize(string $key, mixed $value): mixed
    {
        $value = $key != 'alias' ? $value : strtolower(preg_replace('/\s+/', '', $value));
        $value = $key != 'password' ? $value : Hash::make($value);

        return $value;
    }

}
