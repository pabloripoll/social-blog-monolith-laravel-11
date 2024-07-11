<?php

namespace Domain\Driver\Admin\Repository;

use Domain\Driver\Admin\Model\AdminTempTokenModel;
use Domain\Driver\Admin\Object\AdminTempTokenObject;
use Domain\Contract\Repository\DomainSetRepositoryAbstract;
use Domain\Contract\Repository\DomainSetRepositoryInterface;

class AdminTempTokenSetRepository extends DomainSetRepositoryAbstract implements DomainSetRepositoryInterface
{
    /**
     * Required
     */
    public function model(): object
    {
        return new AdminTempTokenModel;
    }

    public function object(): object
    {
        return new AdminTempTokenObject;
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
