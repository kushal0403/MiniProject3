<?php
namespace Emb\Module\Model\Source;

use Magento\Framework\Option\ArrayInterface; 

class Category implements ArrayInterface
{ /** * Get options for dropdown field 
  * * @return array */ 
  public function toOptionArray() 
  { 
    return [ ['value' => 'yes', 'label' => __('yes')], 
            ['value' => 'No', 'label' => __('no')], ]; }
 }








//  namespace Emb\Module\Model\Source;
 
//  use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
//  use Magento\Framework\Data\OptionSourceInterface;
 
// class Category implements OptionSourceInterface
// {
//     /**
//      * @var CollectionFactory
//      */
//     protected $collectionFactory;
 
//     public function __construct(
//         CollectionFactory $collectionFactory
//     ) {
//         $this->collectionFactory = $collectionFactory;
//     }
 
//     public function toOptionArray()
//     {
        // $options[] = ['1' => __('Yes'), '0' => __('No')];
        // $collection = $this->collectionFactory->create()
        //     ->addAttributeToSelect('*')
        //     ->addAttributeToFilter('is_active', '1');
 
        // foreach ($collection as $category) {
        //     $options[] = [
        //         'label' => $category->getName(),
        //         'value' => $category->getId(),
        //     ];
        // }
 
//         return $options;
//     }
// }
// namespace Emb\Module\Model\Source;

// use Magento\Framework\Data\OptionSourceInterface;

// /**
//  * Class Category
//  */
// class Category implements OptionSourceInterface
// {

//     const YES = 1;
//     const NO  = 0;

//     public static function getOptionArray()
//     {
//         return [
//             self::YES => __('Yes'),
//             self::NO => __('No')
//         ];
//     }

//     // /**
//     //  * Get options
//     //  *
//     //  * @return array
//     //  */
//     public function toOptionArray()
//     {
//         $res = [];
        
//         foreach (self::getOptionArray() as $index => $value) {
//             $res[] = ['value' => $index, 'label' => $value];
//         }
        
//         return [
//             ['value' => 'yes', 'lable' => __('yes')],
//             ['value' => 'No' , 'lable' => __('No')],
//         ];
//     }
// } 


