<?php
/**
 * Region resource model
 *
 * @author Extensa Web Development Ltd. <support@extensadev.com>
 */
class Extensa_Econt_Model_Resource_Region extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Initialize connection and define main table and primary key
     */
    protected function _construct()
    {
        $this->_init('extensa_econt/region', 'region_id');
    }

    public function setPkAutoIncrement($isPkAutoIncrement = true)
    {
        $this->_isPkAutoIncrement = $isPkAutoIncrement;
    }
}
