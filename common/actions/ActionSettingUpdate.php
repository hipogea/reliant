<?php

/* 
 * Creado por JRamírez 24/07/2020
 * Action que permite a cualquier controlador
 * colcaor este action para que 
 * Edite el parametro de settings
 */


namespace common\actions;

use Yii;
use yii\base\Action;
use yii\base\InvalidConfigException;
//use yii\base\Model;
use yii\helpers\ArrayHelper;
//use common\helpers\FileHelper;
//use yii2mod\settings\events\FormEvent;

/**
 * Class SettingsAction
 *
 * @package yii2mod\settings\actions
 */
class ActionSettingUpdate extends Action
{
    
   public $modelClass = 'yii2mod\settings\models\SettingModel';
    public $seccion=null; //Poriedad para filtrar la seccion de los setting si es null no filtra nada
    public $updateView = '@frontend/views/comunes/settings_update';
 
    
  
    public function init()
    {
        
       // var_dump($this->seccion);
        parent::init();
        
       if ($this->seccion === null) {
           $this->seccion=Yii::$app->controller->module->id;
            //throw new InvalidConfigException('The "seccion" property must be set.');
        }
        
    }

    /**
     * Renders the settings form.
     *
     * @return string
     */
    public function run()
    {
        $id=Yii::$app->request->get('id');
        $modelo=$this->modelClass;
        $model=$modelo::findOne($id);
        //$model = Yii::createObject($this->modelClass);
         //$model->section=$this->seccion;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', Yii::t('yii2mod.settings', 'Setting has been created.'));

            return Yii::$app->controller->redirect(['config']);
        } else {
            return Yii::$app->controller->render($this->updateView, [
                'model' => $model,
                //'seccion'=>$this->seccion,
            ]);
        }
    }

   
    
}

