<?php

namespace Muhimbi\PDFConverterServices;

class GetConfigurationResponse
{

  /**
   * 
   * @var Configuration $GetConfigurationResult
   * @access public
   */
  public $GetConfigurationResult = null;

  /**
   * 
   * @param Configuration $GetConfigurationResult
   * @access public
   */
  public function __construct($GetConfigurationResult)
  {
    $this->GetConfigurationResult = $GetConfigurationResult;
  }

}
