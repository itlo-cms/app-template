<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\cms\cmsbasic;

use yii\base\Theme;

/**
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class DefaultTheme extends Theme
{
    public $pathMap = [
        '@app/views' => [
            '@app/templates/default',
        ],
    ];
}