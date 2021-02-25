<?php

namespace alireza5014\Cors\Exceptions;

use Exception;
use alireza5014\Cors\CorsProfile\DefaultProfile;

class InvalidCorsProfile extends Exception
{
    public static function profileDoesNotExtendDefaultProfile(string $className)
    {
        $defaultProfileClass = DefaultProfile::class;

        return new static("The configured cors profile in `{$className}` is invalid. A valid cors profile extends `{$defaultProfileClass}`");
    }
}
