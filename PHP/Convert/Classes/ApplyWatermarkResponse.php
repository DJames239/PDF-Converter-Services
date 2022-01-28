<?php

namespace Muhimbi\PDFConverterServices;

class ApplyWatermarkResponse
{

  /**
   * 
   * @var base64Binary $ApplyWatermarkResult
   * @access public
   */
  public $ApplyWatermarkResult = null;

  /**
   * 
   * @param base64Binary $ApplyWatermarkResult
   * @access public
   */
  public function __construct($ApplyWatermarkResult)
  {
    $this->ApplyWatermarkResult = $ApplyWatermarkResult;
  }

}
