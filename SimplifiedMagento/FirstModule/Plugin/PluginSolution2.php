<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/30/2018
 * Time: 5:53 AM
 */

namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution2
{

    public function beforeExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject){

        echo "before execute sort order 20"."</br>";
    }

    public function afterExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject
    ){
        echo "after execute sort order 20"."</br>";
    }



}