<?php 
use frontend\modules\asset\Module as m;
//use kartik\tree\TreeView;
use frontend\modules\asset\models\Codcompo;
use kartik\tree\TreeViewInput;
//use app\models\Product;
$this->title =m::t('labels', 'Code structure definition');
$this->params['breadcrumbs'][] = ['label' => m::t('labels', 'Structure'), 'url' => ['code-structure']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<h4><span class="fa fa-cog"></span><?=$this->title?></h4>

<div class="box box-success">
<?php
echo TreeViewInput::widget([
    // single query fetch to render the tree
    // use the Product model you have in the previous step
    'query' => Codcompo::find()->addOrderBy('root, lft'), 
    'headingOptions'=>['label'=>'Categories'],
    'name' => 'kv-product', // input name
    'value' => '1,2,3',     // values selected (comma separated for multiple select)
    'asDropdown' => FALSE,   // will render the tree input widget as a dropdown.
    'multiple' => true,     // set to false if you do not need multiple selection
    'fontAwesome' => true,  // render font awesome icons
    'rootOptions' => [
        'label'=>'<i class="fa fa-tree"></i>',  // custom root label
        'class'=>'text-success'
    ], 
    //'options'=>['disabled' => true],
]);

?>