<?php
namespace frontend\modules\bigitems\interfaces;
//use frontend\modules\asset\models\InterModos;
interface assetInterface {   
    
    public function hasChilds();
    public function isTop(); 
    /*
     * Donde se va a emplazar
     * 
     */
    public function place( $parent); 
     public function unPlace(); 
}
