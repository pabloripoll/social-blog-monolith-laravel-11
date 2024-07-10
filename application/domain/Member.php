<?php

namespace Domain;

use Domain\Driver\Member\Entity\MemberUserEntity;
use Domain\Driver\Member\Entity\MemberProfileEntity;
use Domain\Driver\Member\Entity\MemberImageEntity;
use Domain\Driver\Member\Entity\MemberSettingEntity;
use Domain\Driver\Member\Entity\MemberSessionEntity;
use Domain\Driver\Member\Entity\MemberTempTokenEntity;

class Member
{
    public static function user()
    {
        return new MemberUserEntity;
    }

    public static function profile()
    {
        return new MemberProfileEntity;
    }

    public static function image()
    {
        return new MemberImageEntity;
    }

    public static function setting()
    {
        return new MemberSettingEntity;
    }

    public static function session()
    {
        return new MemberSessionEntity;
    }

    public static function tempToken()
    {
        return new MemberTempTokenEntity;
    }

}
