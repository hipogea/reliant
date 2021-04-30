<?php

/* 
 * Creado por JRamírez 24/07/2020
 * Action que permite a cualquier controlador
 * colcaor este action para que muestre la lista de parametros
 * pero filtrado por seccion 
 */


namespace common\actions;

use Yii;
use yii\base\Action;
use yii\base\InvalidConfigException;
//use yii\base\Model;
use yii\helpers\ArrayHelper;
use common\helpers\FileHelper;
//use yii2mod\settings\events\FormEvent;

/**
 * Class SettingsAction
 *
 * @package yii2mod\settings\actions
 */
class ActionSettingCreate extends Action
{
    
   public $modelClass = 'yii2mod\settings\models\SettingModel';
    public $seccion=null; //Poriedad para filtrar la seccion de los setting si es null no filtra nada
    public $createView = '@frontend/views/comunes/settings_create';
 
    
  
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
        $model = Yii::createObject($this->modelClass);
         $model->section=$this->seccion;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', Yii::t('yii2mod.settings', 'Setting has been created.'));

            return Yii::$app->controller->redirect(['config']);
        } else {
            return Yii::$app->controller->render($this->createView, [
                'model' => $model,
                //'seccion'=>$this->seccion,
            ]);
        }
    }

   
    
}

