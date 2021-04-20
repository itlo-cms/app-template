<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\assets\unify\base;

use yii\web\JqueryAsset;
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class UnifyHsCoreAsset extends UnifyAsset
{
    public $css = [];

    public $js = [
        'assets/js/hs.core.js',
    ];

    public $depends = [
        JqueryAsset::class
    ];
}