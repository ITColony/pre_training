<?php
/**
 * Created by PhpStorm.
 * User: Owner
 * Date: 12/30/2018
 * Time: 6:17 AM
 */

namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution3
{
    public function beforeExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject){

        echo "before execute sort order 30"."</br>";
    }

    public function afterExecute(
        \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject
    ){
        echo "after execute sort order 30"."</br>";
    }


}