<?php
/**
 * @author Extensa Web Development Ltd. <support@extensadev.com>
 */
class Extensa_Econt_Block_Adminhtml_System_Config_Form_Getaddress extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /**
     * Define params and variables
     *
     * @return void
     */
    public function _construct()
    {
        parent::_construct();

        $this->setGetAddressUrl($this->getUrl('*/getaddress'));

        $this->setTemplate('extensa/econt/system/config/getaddress.phtml');
    }

    /**
     * Retrieve Element HTML fragment
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setElement($element);

        $button = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setData(array(
                'id'       => $element->getHtmlId(),
                'type'     => 'button',
                'label'    => $this->helper('extensa_econt')->__('Вземете адрес от профила'),
                'class'    => $this->_getDisabled(),
                'disabled' => $this->_getDisabled(),
                'onclick'  => 'javascript:extensa_econt_get_address(); return false;',
        ));

        return $button->toHtml() . $this->renderView();
    }

    protected function _getDisabled()
    {
        return $this->getElement()->getDisabled() ? ' disabled' : '';
    }
}
