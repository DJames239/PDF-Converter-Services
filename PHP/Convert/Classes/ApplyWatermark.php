<?php

namespace Muhimbi\PDFConverterServices;

class ApplyWatermark
{

  /**
   * 
   * @var base64Binary $sourceFile
   * @access public
   */
  public $sourceFile = null;

  /**
   * 
   * @var OpenOptions $openOptions
   * @access public
   */
  public $openOptions = null;

  /**
   * 
   * @var ConversionSettings $conversionSettings
   * @access public
   */
  public $conversionSettings = null;

  /**
   * 
   * @param base64Binary $sourceFile
   * @param OpenOptions $openOptions
   * @param ConversionSettings $conversionSettings
   * @access public
   */
  public function __construct($sourceFile, $openOptions, $conversionSettings)
  {
    $this->sourceFile = $sourceFile;
    $this->openOptions = $openOptions;
    $this->conversionSettings = $conversionSettings;
  }

}
