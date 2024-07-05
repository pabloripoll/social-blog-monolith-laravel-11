<?php

namespace Domain;

use Domain\Driver\Member\Entity\UserEntity;
use Domain\Driver\Member\Entity\ProfileEntity;
use Domain\Driver\Member\Entity\SettingEntity;
use Domain\Driver\Member\Entity\SessionEntity;
use Domain\Driver\Member\Entity\TempTokenEntity;
use Domain\Driver\Member\Entity\ActivityEntity;
use Domain\Driver\Member\Entity\NotificationEntity;
use Domain\Driver\Member\Entity\CategoryBannedEntity;
use Domain\Driver\Member\Entity\CategoryActivityEntity;
use Domain\Driver\Member\Entity\CategoryNotificationEntity;

final class Member
{
    public static function user()
    {
        return new UserEntity;
    }

    public static function profile()
    {
        return new ProfileEntity;
    }

    public static function setting()
    {
        return new SettingEntity;
    }

    public static function session()
    {
        return new SessionEntity;
    }

    public static function tempToken()
    {
        return new TempTokenEntity;
    }

    public static function activity()
    {
        return new ActivityEntity;
    }

    public static function notification()
    {
        return new NotificationEntity;
    }

    public static function categoryBanned()
    {
        return new CategoryBannedEntity;
    }

    public static function categoryActivity()
    {
        return new CategoryActivityEntity;
    }

    public static function categoryNotification()
    {
        return new CategoryNotificationEntity;
    }

}
