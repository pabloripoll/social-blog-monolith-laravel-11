<?php

namespace Domain\Driver\Admin\Object;

use Domain\Contract\Object\DomainObjectAbstract;
use Domain\Contract\Object\DomainObjectInterface;
use Domain\Driver\Admin\Validation\AdminSessionValidation;

class AdminSessionObject extends DomainObjectAbstract implements DomainObjectInterface
{
    /**
     * Service for individual object properties validation
     */
    public function validation(): object
    {
        return new AdminSessionValidation;
    }

    /**
     * Output normalized value or required properties
     */
    public function value(object | array $row = null): object
    {
        $object = new \stdClass;

        $object->id = $row->id ?? null;
        $object->user_id    = $row->user_id ?? null;
        $object->in_standby = $row->in_standby ?? null;
        $object->is_opened  = $row->is_opened ?? null;
        $object->is_expired = $row->is_expired ?? null;
        $object->expires_at = $row->expires_at ?? null;
        $object->stopped_at = $row->stopped_at ?? null;
        $object->reused     = $row->reused ?? null;
        $object->ip_address = $row->ip_address ?? null;
        $object->token      = $row->token ?? null;
        $object->user_agent = $row->user_agent ?? null;
        $object->created_at = $row->created_at ? $row->created_at->toDateTimeString() : null;
        $object->updated_at = $row->updated_at ? $row->updated_at->toDateTimeString() : null;

        return $object;
    }

    public function normalize(string $key, mixed $value): mixed
    {
        return $value;
    }

}
