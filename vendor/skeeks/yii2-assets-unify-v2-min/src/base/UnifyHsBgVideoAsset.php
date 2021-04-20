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
class UnifyHsBgVideoAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/hs-bg-video/hs-bg-video.css'
    ];

    public $js = [
        'assets/vendor/hs-bg-video/hs-bg-video.js',
        'assets/vendor/hs-bg-video/vendor/player.min.js',
        'assets/js/helpers/hs.bg-video.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class
    ];
}