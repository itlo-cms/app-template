<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsStickyBlockAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/hamburgers/hamburgers.min.css'
    ];

    public $js = [
        'assets/js/components/hs.sticky-block.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class
    ];
}