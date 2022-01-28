<?php

namespace Muhimbi\PDFConverterServices;

class ApplySecurityResponse
{

  /**
   * 
   * @var base64Binary $ApplySecurityResult
   * @access public
   */
  public $ApplySecurityResult = null;

  /**
   * 
   * @param base64Binary $ApplySecurityResult
   * @access public
   */
  public function __construct($ApplySecurityResult)
  {
    $this->ApplySecurityResult = $ApplySecurityResult;
  }

}
