<?php

namespace Domain\Driver\Member\Repository;

use Domain\Driver\Member\Model\MemberSettingModel;
use Domain\Driver\Member\Object\MemberSettingObject;
use Domain\Contract\Repository\DomainSetRepositoryAbstract;
use Domain\Contract\Repository\DomainSetRepositoryInterface;

class MemberSettingSetRepository extends DomainSetRepositoryAbstract implements DomainSetRepositoryInterface
{
    /**
     * Required
     */
    public function model(): object
    {
        return new MemberSettingModel;
    }

    public function object(): object
    {
        return new MemberSettingObject;
    }

    /**
     * Single set statement for new entity or updating by id
     */
    public function row(object $input): mixed
    {
        $validation = $this->object()->isValid($input);

        if ($validation->has_errors) {
            return $validation;
        }

        try {
            $row = ! isset($input->id) ? $this->model() : $this->model()->find($input->id);

            foreach ($this->model()->assignable() as $col) {
                ! isset($input->{$col}) ? : $row->{$col} = $input->{$col};
            }

            $row->save();

            return $row;

        } catch(\Exception $e) {

            return (object) ['error' => json_encode($e->getMessage())];
        }
    }

    /**
     * Other set statements
     */

}
