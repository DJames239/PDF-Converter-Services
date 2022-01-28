<?php

namespace Muhimbi\PDFConverterServices;

class ConvertResponse
{

  /**
   * 
   * @var base64Binary $ConvertResult
   * @access public
   */
  public $ConvertResult = null;

  /**
   * 
   * @param base64Binary $ConvertResult
   * @access public
   */
  public function __construct($ConvertResult)
  {
    $this->ConvertResult = $ConvertResult;
  }

}
