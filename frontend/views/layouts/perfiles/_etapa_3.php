<?php
use yii\helpers\Url;
use yii\helpers\Html;
use common\helpers\h;

//use frontend\modules\inter\Module as m;
?>
<div class="btn-group"> 
    <?php //if(!$convocatoria->modo->externalpeople){?>
          <?php $url=Url::toRoute(['/inter/convocados/inter-views','id'=>$convocatoria->id]);  ?>      
          <?php if(!$esFinal){
              echo Html::a(h::awe('file').h::space(10).yii::t('base_labels','Interviews'),$url,['target'=>'_blank','data-pjax'=>'0','class'=>"btn btn-danger"]);
             }   
                      ?>
    <?php // }?>       
</div> 

