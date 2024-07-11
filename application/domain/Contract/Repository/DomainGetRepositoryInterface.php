<?php

namespace Domain\Contract\Repository;

interface DomainGetRepositoryInterface
{
    public function model(): object;

    public function object(): object;
}
