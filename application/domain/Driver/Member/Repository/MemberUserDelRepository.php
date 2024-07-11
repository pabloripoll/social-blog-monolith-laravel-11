<?php

namespace Domain\Driver\Member\Repository;

use Domain\Driver\Member\Model\MemberUserModel;
use Domain\Driver\Member\Model\MemberUserObject;
use Domain\Contract\Repository\DomainDelRepositoryAbstract;
use Domain\Contract\Repository\DomainDelRepositoryInterface;

class MemberUserDelRepository extends DomainDelRepositoryAbstract implements DomainDelRepositoryInterface
{
    /**
     * Required
     */
    public function model(): object
    {
        return new MemberUserModel;
    }

    public function object(): object
    {
        return new MemberUserObject;
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
