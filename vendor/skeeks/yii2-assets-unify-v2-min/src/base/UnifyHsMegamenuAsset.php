<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

/**
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsMegamenuAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/hs-megamenu/src/hs.megamenu.css'
    ];

    public $js = [
        'assets/vendor/hs-megamenu/src/hs.megamenu.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class
    ];
}