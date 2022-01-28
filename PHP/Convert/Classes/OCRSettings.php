<?php

namespace Muhimbi\PDFConverterServices;

class OCRSettings
{

  /**
   * 
   * @var string $Language
   * @access public
   */
  public $Language = null;

  /**
   * 
   * @var OCRPerformance $Performance
   * @access public
   */
  public $Performance = null;

  /**
   * 
   * @var string $WhiteList
   * @access public
   */
  public $WhiteList = null;

  /**
   * 
   * @var string $BlackList
   * @access public
   */
  public $BlackList = null;

  /**
   * 
   * @var boolean $Paginate
   * @access public
   */
  public $Paginate = null;

  /**
   * 
   * @var OCRRegion[] $Regions
   * @access public
   */
  public $Regions = null;

  /**
   * 
   * @var OCROutputType $OutputType
   * @access public
   */
  public $OutputType = null;

  /**
   * 
   * @var string $OCREngine
   * @access public
   */
  public $OCREngine = null;

  /**
   * 
   * @var OCREngineSpecificSettings $OCREngineSpecificSettings
   * @access public
   */
  public $OCREngineSpecificSettings = null;

  /**
   * 
   * @param OCRPerformance $Performance
   * @param boolean $Paginate
   * @param OCROutputType $OutputType
   * @access public
   */
  public function __construct($Performance, $Paginate, $OutputType)
  {
    $this->Performance = $Performance;
    $this->Paginate = $Paginate;
    $this->OutputType = $OutputType;
  }

}
