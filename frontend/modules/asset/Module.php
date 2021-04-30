<?php

namespace frontend\modules\asset;
use Yii;
/**
 * assets module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\asset\controllers';

   public function init()
    {
        parent::init();
        $this->registerTranslations();
        static::putSettingsModule();
        // custom initialization code goes here
    }
    
    private static function putSettingsModule(){
         //h::getIfNotPutSetting('mail','servermail',"smtp.googlemail.com", SettingType::STRING_TYPE);
          
        }
    
     public function registerTranslations()
    {
        \Yii::$app->i18n->translations['modules/asset/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@frontend/modules/asset/messages',
            'fileMap' => [
                'modules/asset/verbs' => 'verbs.php',
                'modules/asset/validaciones' => 'validaciones.php',
                'modules/asset/labels' => 'labels.php',
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        
        return Yii::t('modules/asset/' . $category, $message, $params, $language);
    }
}
