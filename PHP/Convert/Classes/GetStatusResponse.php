<?php

namespace Muhimbi\PDFConverterServices;

class GetStatusResponse
{

  /**
   * 
   * @var Status $GetStatusResult
   * @access public
   */
  public $GetStatusResult = null;

  /**
   * 
   * @param Status $GetStatusResult
   * @access public
   */
  public function __construct($GetStatusResult)
  {
    $this->GetStatusResult = $GetStatusResult;
  }

}
