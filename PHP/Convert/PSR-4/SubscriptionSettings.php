<?php

namespace Muhimbi\PDFConverterServices;

class SubscriptionSettings
{

  /**
   * 
   * @var string $SubscriptionID
   * @access public
   */
  public $SubscriptionID = null;

  /**
   * 
   * @var boolean $ForceTrialWatermark
   * @access public
   */
  public $ForceTrialWatermark = null;

  /**
   * 
   * @param boolean $ForceTrialWatermark
   * @access public
   */
  public function __construct($ForceTrialWatermark)
  {
    $this->ForceTrialWatermark = $ForceTrialWatermark;
  }

}
