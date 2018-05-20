<?php

namespace luya\legacy\tests\src;

use luya\testsuite\cases\CmsBlockTestCase;

class BaseLegacyBlockTestCase extends CmsBlockTestCase
{
    public function getConfigArray()
    {
        return [
            'id' => 'carouselBlockTest',
            'basePath' => dirname(__DIR__) . '/../',
            'components' => [
                'assetManager' => [
                    'basePath' => dirname(__DIR__) . '/assets',
                ],
            ]
        ];
    }
}
