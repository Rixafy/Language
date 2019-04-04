<?php

declare(strict_types=1);

namespace Rixafy\Doctrination\Language;

use Rixafy\Doctrination\Language\Exception\LanguageNotProvidedException;

class LanguageStaticHolder
{
    /** @var Language */
    private static $language;

    /**
     * @param Language $language
     */
    public static function setLanguage(Language $language): void
    {
        self::$language = $language;
    }

    /**
     * @return Language
     * @throws LanguageNotProvidedException
     */
    public static function getLanguage(): Language
    {
        if (self::$language === null) {
            throw new LanguageNotProvidedException('Language was never set');
        }

        return self::$language;
    }
}