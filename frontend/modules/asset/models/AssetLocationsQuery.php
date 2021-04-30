<?php

namespace frontend\modules\asset\models;

/**
 * This is the ActiveQuery class for [[AssetLocations]].
 *
 * @see AssetLocations
 */
class AssetLocationsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return AssetLocations[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return AssetLocations|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
