<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 01.09.2015
 */


?>

<?= \skeeks\cms\modules\admin\widgets\GridView::widget([
    'dataProvider' => new \yii\data\ActiveDataProvider([
        'query' =>
            (new \yii\db\Query())
                ->select(['id', 'phrase', 'count(*) as count'])
                ->from(\skeeks\cms\search\models\CmsSearchPhrase::tableName())
                ->groupBy(['phrase'])
                ->orderBy(['count' => SORT_DESC])
    ]),
    'columns' =>
        [
            [
                'attribute' => 'phrase',
                'label' => \Yii::t('skeeks/search', 'Search Phrase'),
            ],

            [
                'attribute' => 'count',
                'label' => \Yii::t('skeeks/search', 'The number of requests'),
            ],
        ]
]); ?><!--

-->