<?php

namespace Domain\Driver\Member\Object;

use Domain\Contract\Object\DomainObjectAbstract;
use Domain\Contract\Object\DomainObjectInterface;
use Domain\Driver\Member\Validation\MemberImageValidation;

class MemberImageObject extends DomainObjectAbstract implements DomainObjectInterface
{
    /**
     * Service for individual object properties validation
     */
    public function validation(): object
    {
        return new MemberImageValidation;
    }

    /**
     * Output normalized value or required properties
     */
    public function value(object | array $row = null): object
    {
        $object = new \stdClass;

        $object->id = $row->id ?? null;
        $object->user_id = $row->user_id ?? null;
        $object->is_profile = $row->is_profile ?? null;
        $object->is_background = $row->is_background ?? null;
        $object->is_selected = $row->is_selected ?? null;
        $object->storage_id = $row->storage_id ?? null;
        $object->file_name = $row->file_name ?? null;
        $object->title = $row->title ?? null;
        $object->extension = $row->extension ?? null;
        $object->position = $row->id ?? null;
        $object->created_at = $row->created_at ? null : $row->created_at->format('Y-m-d H:i:s');
        $object->updated_at = $row->updated_at ? null : $row->updated_at->format('Y-m-d H:i:s');

        return $object;
    }

    public function normalize(string $key, mixed $value): mixed
    {
        return $value;
    }

}
