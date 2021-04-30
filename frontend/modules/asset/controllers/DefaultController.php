<?php

namespace frontend\modules\asset\controllers;
use frontend\modules\asset\models\Codcompo;
use yii\web\Controller;

/**
 * Default controller for the `assets` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    
    public function actions() {
      parent::actions();
      return [
           
          'config'=> [
                        'class' => 'common\actions\ActionSettingList',
                        //'property1' => 'value1',
                        //'property2' => 'value2',
                            ],
           'create-setting'=> [
                        'class' => 'common\actions\ActionSettingCreate',
                        //'property1' => 'value1',
                        //'property2' => 'value2',
                            ],
         'update-setting'=> [
                        'class' => 'common\actions\ActionSettingUpdate',
                        //'property1' => 'value1',
                        //'property2' => 'value2',
                            ],
      ];
      
  } 
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
   
 public function actionCodeStructure(){
     $model=New Codcompo();
     return $this->render('code_structure',['model'=>$model]);
 }
    
 public function actionTreeView(){
     //$model=New Codcompo();
     return $this->render('tree_view');
 }    
}
