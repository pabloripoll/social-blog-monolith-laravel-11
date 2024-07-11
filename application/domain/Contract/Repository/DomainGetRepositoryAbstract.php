<?php

namespace Domain\Contract\Repository;

abstract class DomainGetRepositoryAbstract
{
    /**
     * Domain full/default data transfer object
     */
    public function dto(object | array $result): object | array
    {
        $object = $this->object();

        if ((is_array($result) || is_object($result)) && count($result) > 1) {
            $list = [];
            foreach ($result as $row) {
                $list[] = $object->value($row);
            }

            return $list;
        }

        return is_array($result) ? (object) $object->value($result[0]) : $object->value($result);
    }

}
