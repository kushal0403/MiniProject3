<?php

namespace Emb\Module\Model\Config\Source;

class Category implements \Magento\Framework\Option\ArrayInterface

{
 public function toOptionArray()
 {

$options = [
 [

 'label' => __('--Choose Option--'),
 'value' => '', ],
 [
 'label' => __('Yes'),
 'value' => 'Yes',
 ],
 [
    'label' => __('No'),
    'value' => 'No',
 ],


];
return $options;
}

}

?>