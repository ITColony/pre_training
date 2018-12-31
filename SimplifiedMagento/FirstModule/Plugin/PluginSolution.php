<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/27/2018
 * Time: 11:22 AM
 */

namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution
{
    public function beforeExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject){

        echo "before execute sort order 10"."</br>";
    }

    public function afterExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject
    ){
        echo "after execute sort order 10"."</br>";
    }
    public function beforeAfterExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject
    ){
        echo "before after execute sort order 10"."</br>";
    }



//    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name){
//        return "Before Plugin ". $name;
//    }
//
//    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){
//        return $result ." After Plugin";
//    }
//    public function aroundGetIdBySku(
//        \Magento\Catalog\Model\Product $subject, callable $proceed, $sku
//    )
//    {
//        echo "before proceed"."</br>";
//        $id = $proceed($sku);
//        echo $id ."</br>";
//        echo "after proceed"."</br>";
//        return $id;
//    }
//    public function aroundGetName(
//        \Magento\Catalog\Model\Product $subject, callable $proceed) {
//
//        echo "before proceed"."</br>";
//        $name = $proceed();
//        echo $name ."</br>";
//        echo "after proceed"."</br>";
//        return $name;
//    }


}