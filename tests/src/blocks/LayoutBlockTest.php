<?php

namespace luya\legacy\tests\src\blocks;

use luya\legacy\tests\src\BaseLegacyBlockTestCase;

class LayoutBlockTest extends BaseLegacyBlockTestCase
{
    public $blockClass = 'luya\legacy\blocks\LayoutBlock';

    public function testEmptyRender()
    {
        $this->assertSame('<div class="row"></div>', $this->renderFrontendNoSpace());
    }

    public function testPlaceholderRender()
    {
        $this->block->setPlaceholderValues([
            'content' => '<p>Row content</p>'
        ]);
        $this->assertSame('<div class="row"><p>Row content</p></div>', $this->renderFrontendNoSpace());
    }
}
