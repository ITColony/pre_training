<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 12/31/18
 * Time: 9:59 AM
 */

namespace SimplifiedMagento\FirstModule\Observer;
use  Magento\Framework\Event\ObserverInterface;

class Checkout implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {

        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Simple Text Log');
    }
}