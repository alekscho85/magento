<?php
/**
 * @author Extensa Web Development Ltd. <support@extensadev.com>
 */
class Extensa_Econt_Model_System_Config_Source_Inventorytype
{
    /**
     * Returns array to be used in select on back-end
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('label' => Mage::helper('extensa_econt')->__('електронен'),
                'value' => 'DIGITAL'),
            array('label' => Mage::helper('extensa_econt')->__('приложен в пратката'),
                'value' => 'LOADING'),
        );
    }
}
