<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

use yii\web\YiiAsset;

/**
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyDzsparallaxerAsset extends UnifyAsset
{
    public $css = [
        'assets/vendor/dzsparallaxer/dzsparallaxer.css',
        'assets/vendor/dzsparallaxer/dzsscroller/scroller.css',
        'assets/vendor/dzsparallaxer/advancedscroller/plugin.css'
    ];

    public $js = [
        'assets/vendor/dzsparallaxer/dzsparallaxer.js',
        'assets/vendor/dzsparallaxer/dzsscroller/scroller.js',
        'assets/vendor/dzsparallaxer/advancedscroller/plugin.js',
    ];

    public $depends = [
        YiiAsset::class,
    ];
}