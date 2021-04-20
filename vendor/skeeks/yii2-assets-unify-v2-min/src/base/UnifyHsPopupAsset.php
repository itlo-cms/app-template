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
class UnifyHsPopupAsset extends UnifyAsset
{
    public $css = [
    ];

    public $js = [
        'assets/js/components/hs.popup.js',
    ];

    public $depends = [
        UnifyHsCoreAsset::class,
        UnifyFancyboxAsset::class,
    ];
}