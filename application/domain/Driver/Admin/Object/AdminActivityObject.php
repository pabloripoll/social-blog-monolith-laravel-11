<?php

namespace Domain\Driver\Admin\Object;

use Domain\Contract\Object\DomainObjectAbstract;
use Domain\Contract\Object\DomainObjectInterface;
use Domain\Driver\Admin\Validation\AdminActivityValidation;

class AdminActivityObject extends DomainObjectAbstract implements DomainObjectInterface
{
    /**
     * Required from abstract methods
     */
    public function validation(): object
    {
        return new AdminActivityValidation;
    }

    /**
     * Output normalized value or required properties
     */
    public function value(object $row = null): object
    {
        $object = new \stdClass;

        $object->id = $row->id ?? null;
        $object->user_id = $row->user_id ?? null;
        $object->session_id = $row->session_id ?? null;
        $object->category_id = $row->category_id ?? null;
        $object->source_id = $row->source_id ?? null;
        $object->source_pid = $row->source_pid ?? null;
        $object->source_ref = $row->source_ref ?? null;
        $object->source_url = $row->source_url ?? null;
        $object->created_at = $row->created_at ? null : $row->created_at->format('Y-m-d H:i:s');
        $object->updated_at = $row->updated_at ? null : $row->updated_at->format('Y-m-d H:i:s');

        return $object;
    }

}
