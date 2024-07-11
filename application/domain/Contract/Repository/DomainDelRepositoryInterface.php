<?php

namespace Domain\Contract\Repository;

interface DomainDelRepositoryInterface
{
    public function model(): object;

    public function object(): object;
}
