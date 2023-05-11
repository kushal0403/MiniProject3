<?php 
namespace Emb\Module\Model;
use Magento\Framework\Model\AbstractModel;

class Sample extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Emb\Module\Model\ResourceModel\Sample');
    }

    /**
     * Get Awbnumber
     *
     * @return string|null
     */
    public function getAwbNumber()
    {
        $collection = $this->getCollection()->addFieldToFilter("available", "Yes");
        $item = $collection->getFirstItem();
        $item->setAvailable("No")->save();
        $awbnumber = $item->getdata("awbnumber");
        return $awbnumber;
    }

}
