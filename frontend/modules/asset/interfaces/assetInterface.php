<?php
namespace frontend\modules\asset\interfaces;
//use frontend\modules\asset\models\InterModos;
interface assetInterface {   
    
    public function hasChilds();
    public function isTop(); 
    /*
     * Donde se va a emplazar
     * 
     */
    public function place($parent); 
     public function unPlace(); 
}
