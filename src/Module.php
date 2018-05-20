<?php

namespace luya\legacy;

use Yii;

/**
 * legacy Module
 *
 * When adding this module to your configuration the legacy block will be added to your
 * cmsadministration by running the `import` command.
 *
 * @author Basil Suter <basil@nadar.io>
 */
class Module extends \luya\base\Module
{
    /**
     * @inheritdoc
     */
    public static function onLoad()
    {
        Yii::setAlias('@legacy', static::staticBasePath());
        
        self::registerTranslation('legacy*', static::staticBasePath() . '/messages', [
            'legacy' => 'legacy.php',
        ]);
    }

    /**
     * Translations
     *
     * @param string $message
     * @param array $params
     * @return string
     */
    public static function t($message, array $params = [])
    {
        return parent::baseT('legacy', $message, $params);
    }
}
