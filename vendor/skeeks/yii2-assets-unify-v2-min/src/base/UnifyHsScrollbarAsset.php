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
 * $.HSCore.components.HSScrollBar.init($('.js-scrollbar'))
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsScrollbarAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css'
    ];

    public $js = [
        'assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js',
        'assets/js/components/hs.scrollbar.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class
    ];
}