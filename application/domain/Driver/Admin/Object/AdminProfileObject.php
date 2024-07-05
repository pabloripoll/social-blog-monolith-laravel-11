<?php

namespace Domain\Driver\Admin\Object;

use Domain\Contract\Object\DomainObjectAbstract;
use Domain\Contract\Object\DomainObjectInterface;
use Domain\Driver\Admin\Validation\AdminProfileValidation;

class AdminProfileObject extends DomainObjectAbstract implements DomainObjectInterface
{
    /**
     * Service for individual object properties validation
     */
    public function validation(): object
    {
        return new AdminProfileValidation;
    }

    /**
     * Output normalized value or required properties
     */
    public function value(object $row = null): object
    {
        $object = new \stdClass;

        $object->id = $row->id ?? null;
        $object->user_id = $row->user_id ?? null;
        $object->email = $row->email ?? null;
        $object->name = $row->name ?? null;
        $object->surname = $row->surname ?? null;
        $object->phone = $row->phone ?? null;
        $object->address = $row->address ?? null;
        $object->created_at = $row->created_at ? null : $row->created_at->format('Y-m-d H:i:s');
        $object->updated_at = $row->updated_at ? null : $row->updated_at->format('Y-m-d H:i:s');

        return $object;
    }

}
