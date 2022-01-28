<?php

namespace Muhimbi\PDFConverterServices;

class OCRResult
{

  /**
   * 
   * @var string $Text
   * @access public
   */
  public $Text = null;

  /**
   * 
   * @var RegionText[] $RegionTexts
   * @access public
   */
  public $RegionTexts = null;

  /**
   * 
   * @var int $PageCount
   * @access public
   */
  public $PageCount = null;

  /**
   * 
   * @param int $PageCount
   * @access public
   */
  public function __construct($PageCount)
  {
    $this->PageCount = $PageCount;
  }

}
