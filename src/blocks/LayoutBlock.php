<?php

namespace luya\legacy\blocks;

use luya\legacy\Module;
use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\LayoutGroup;

/**
 * Layout Block.
 *
 * File has been created with `block/create` command.
 * 
 * @author Marc Stampfli <marc@zephir.ch>
 * @since 1.0.0
 */
class LayoutBlock extends PhpBlock
{
    /**
     * @var string The module where this block belongs to in order to find the view files.
     */
    public $module = 'legacy';

    /**
     * @var boolean Choose whether block is a layout/container/segmnet/section block or not, Container elements will be optically displayed
     * in a different way for a better user experience. Container block will not display isDirty colorizing.
     */
    public $isContainer = true;

    /**
     * @inheritDoc
     */
    public function blockGroup()
    {
        return LayoutGroup::class;
    }

    /**
     * @inheritDoc
     */
    public function name()
    {
        return Module::t('block_layout.block_name');
    }
    
    /**
     * @inheritDoc
     */
    public function icon()
    {
        return 'view_stream'; // see the list of icons on: https://design.google.com/icons/
    }
 
    /**
     * @inheritDoc
     */
    public function config()
    {
        return [
            'placeholders' => [
                 ['var' => 'content', 'label' => Module::t('block_layout.content')],
            ],
        ];
    }
    
    /**
     * {@inheritDoc}
     *
     * @param {{placeholders.content}}
    */
    public function admin()
    {
        return '';
    }
}
