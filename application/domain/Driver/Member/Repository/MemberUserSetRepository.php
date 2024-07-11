<?php

namespace Domain\Driver\Member\Repository;

use Illuminate\Support\Facades\Hash;
use Domain\Driver\Member\Model\MemberUserModel;
use Domain\Driver\Member\Object\MemberUserObject;
use Domain\Contract\Repository\DomainSetRepositoryAbstract;
use Domain\Contract\Repository\DomainSetRepositoryInterface;

class MemberUserSetRepository extends DomainSetRepositoryAbstract implements DomainSetRepositoryInterface
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
                if ($col == 'password') {
                    ! isset($input->{$col}) ? : $row->{$col} = Hash::make($input->{$col});
                } else {
                    ! isset($input->{$col}) ? : $row->{$col} = $input->{$col};
                }
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
