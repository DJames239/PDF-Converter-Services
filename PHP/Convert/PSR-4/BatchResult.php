<?php

namespace Muhimbi\PDFConverterServices;

class BatchResult
{

  /**
   * 
   * @var base64Binary $File
   * @access public
   */
  public $File = null;

  /**
   * 
   * @var string $FileName
   * @access public
   */
  public $FileName = null;

  /**
   * 
   * @var OCRResult $OCRResult
   * @access public
   */
  public $OCRResult = null;

  /**
   * 
   * @access public
   */
  public function __construct()
  {
  
  }

}
