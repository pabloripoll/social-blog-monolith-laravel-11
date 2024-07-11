<?php

namespace Domain\Driver\Admin\Repository;

use Domain\Driver\Admin\Model\AdminProfileModel;
use Domain\Driver\Admin\Model\AdminProfileObject;
use Domain\Contract\Repository\DomainDelRepositoryAbstract;
use Domain\Contract\Repository\DomainDelRepositoryInterface;

class AdminProfileDelRepository extends DomainDelRepositoryAbstract implements DomainDelRepositoryInterface
{
    /**
     * Required
     */
    public function model(): object
    {
        return new AdminProfileModel;
    }

    public function object(): object
    {
        return new AdminProfileObject;
    }

    /**
     * Single - Delete by "id" column
     */
    public function row(object | array | int $input): mixed
    {
        if (is_object($input)) {
            $validation = $this->object()->isValid($input);

            if ($validation->has_errors) {
                return $validation;
            }
        }

        $input_id = ! is_object($input) ? $input : $input->id;

        try {
            $row = $this->model()->find($input_id);

            if ($row) {
                $row->delete();
            }

            return ! $row ? true : false;

        } catch(\Exception $e) {

            return ['error' => json_encode($e->getMessage())];
        }
    }

    /**
     * Other delete statements
     */

}
