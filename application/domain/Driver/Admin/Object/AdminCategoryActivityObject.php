<?php

namespace Domain\Driver\Category\Object;

use Domain\Contract\Object\DomainObjectAbstract;
use Domain\Contract\Object\DomainObjectInterface;
use Domain\Driver\Category\Validation\AdminCategoryActivityValidation;

class AdminCategoryActivityObject extends DomainObjectAbstract implements DomainObjectInterface
{
    /**
     * Service for individual object properties validation
     */
    public function validation(): object
    {
        return new AdminCategoryActivityValidation;
    }

    /**
     * Output normalized value or required properties
     */
    public function value(object $row = null): object
    {
        $object = new \stdClass;

        $object->id = $row->id ?? null;
        $object->title  = $row->title ?? null;
        $object->description = $row->description ?? null;
        $object->created_by_user_id = $row->created_by_user_id ?? null;
        $object->created_at = $row->created_at ? null : $row->created_at->format('Y-m-d H:i:s');
        $object->updated_at = $row->updated_at ? null : $row->updated_at->format('Y-m-d H:i:s');

        return $object;
    }

}
