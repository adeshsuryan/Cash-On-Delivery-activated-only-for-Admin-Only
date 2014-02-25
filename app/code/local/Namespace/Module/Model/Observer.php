<?php

class Namespace_Module_Model_Observer
{
    public function paymentMethodIsActive($observer)
    {
        $instance = $observer->getMethodInstance();
        $result = $observer->getResult();

        if ($instance->getName() == "checkmo") {
            if (Mage::app()->getStore()->isAdmin()) {
                $result->isAvailable = true;
            } else {
                $result->isAvailable = false;
            }
        }
    }
}