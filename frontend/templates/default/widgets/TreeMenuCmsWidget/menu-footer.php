<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $trees  \skeeks\cms\models\Tree[] */
?>
<h4 ><?= $widget->label; ?></h4>
<ul class="footer-links list-unstyled">
    <?php if ($trees = $widget->activeQuery->all()) : ?>
        <?php foreach ($trees as $tree) : ?>
            <?= $this->render("_one-footer", [
                "widget"        => $widget,
                "model"         => $tree,
            ]); ?>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
