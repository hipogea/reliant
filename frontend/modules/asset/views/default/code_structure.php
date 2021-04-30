<?php
use kartik\tree\TreeView;
//use app\models\Product;
use frontend\modules\asset\Module as m;
use kartik\tree\Module;
?>
<?php
$this->title =m::t('labels', 'Code structure definition');
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'TreeView'), 'url' => ['tree-view']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<h4><span class="fa fa-cog"></span><?=$this->title?></h4>
<div class="box box-success">
    
<?php 
echo TreeView::widget([
    // single query fetch to render the tree
    // use the Product model you have in the previous step
    'query' => $model::find()->addOrderBy('root, lft'), 
    'nodeAddlViews' => [
        Module::VIEW_PART_2 => '@frontend/modules/asset/views/default/tree_add_fields'
    ],
    'headingOptions' => ['label' => 'Categories'],
    'fontAwesome' => false,     // optional
    'isAdmin' => false,         // optional (toggle to enable admin mode)
    'displayValue' => 1,        // initial display value
    'softDelete' => true,       // defaults to true
    'cacheSettings' => [        
        'enableCache' => true   // defaults to true
    ]
]);
?>
</div>