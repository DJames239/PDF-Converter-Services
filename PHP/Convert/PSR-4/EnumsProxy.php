<?php

namespace Muhimbi\PDFConverterServices;

class EnumsProxy
{

  /**
   * 
   * @var OCRLanguage $OCRLanguageProxy
   * @access public
   */
  public $OCRLanguageProxy = null;

  /**
   * 
   * @var PrimeOCR_AccuracyLevel $PrimeOCR_AccuracyLevelProxy
   * @access public
   */
  public $PrimeOCR_AccuracyLevelProxy = null;

  /**
   * 
   * @param OCRLanguage $OCRLanguageProxy
   * @param PrimeOCR_AccuracyLevel $PrimeOCR_AccuracyLevelProxy
   * @access public
   */
  public function __construct($OCRLanguageProxy, $PrimeOCR_AccuracyLevelProxy)
  {
    $this->OCRLanguageProxy = $OCRLanguageProxy;
    $this->PrimeOCR_AccuracyLevelProxy = $PrimeOCR_AccuracyLevelProxy;
  }

}
