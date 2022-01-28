<?php

namespace Muhimbi\PDFConverterServices;

class GetStatus
{

  /**
   * 
   * @var StatusRequest $statusRequest
   * @access public
   */
  public $statusRequest = null;

  /**
   * 
   * @param StatusRequest $statusRequest
   * @access public
   */
  public function __construct($statusRequest)
  {
    $this->statusRequest = $statusRequest;
  }

}
