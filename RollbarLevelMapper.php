<?php

namespace baibaratsky\yii\rollbar;

use InvalidArgumentException;
use Rollbar\Payload\Level;

final class RollbarLevelMapper
{
    private const MAP = [
        "error"     => Level::ERROR,
        "warning"   => Level::WARNING,
        "info"      => Level::INFO,
        "debug"     => Level::DEBUG,
        "critical"  => Level::CRITICAL,
        "alert"     => Level::ALERT,
        "emergency" => Level::EMERGENCY,
    ];

    public static function map(string $name): string
    {
        $key = strtolower($name);
        if (!isset(self::MAP[$key])) {
            throw new InvalidArgumentException("Unknown level: $name");
        }

        return self::MAP[$key];
    }
}
