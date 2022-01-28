<?php

namespace Muhimbi\PDFConverterServices;

class OCREngineSpecificSettings_PrimeOCR
{

  /**
   * 
   * @var int $AccuracyLevel
   * @access public
   */
  public $AccuracyLevel = null;

  /**
   * 
   * @var PrimeOCR_Deskew $Deskew
   * @access public
   */
  public $Deskew = null;

  /**
   * 
   * @var PrimeOCR_ImageProcessingOptions $ImageProcessingOptions
   * @access public
   */
  public $ImageProcessingOptions = null;

  /**
   * 
   * @var PrimeOCR_LexicalChecking $LexicalChecking
   * @access public
   */
  public $LexicalChecking = null;

  /**
   * 
   * @var PrimeOCR_PageQuality $PageQuality
   * @access public
   */
  public $PageQuality = null;

  /**
   * 
   * @var PrimeOCR_PrintType $PrintType
   * @access public
   */
  public $PrintType = null;

  /**
   * 
   * @var PrimeOCR_AutoZone $AutoZone
   * @access public
   */
  public $AutoZone = null;

  /**
   * 
   * @var PrimeOCR_ZoneContent $ZoneContent
   * @access public
   */
  public $ZoneContent = null;

  /**
   * 
   * @param int $AccuracyLevel
   * @param PrimeOCR_Deskew $Deskew
   * @param PrimeOCR_ImageProcessingOptions $ImageProcessingOptions
   * @param PrimeOCR_LexicalChecking $LexicalChecking
   * @param PrimeOCR_PageQuality $PageQuality
   * @param PrimeOCR_PrintType $PrintType
   * @param PrimeOCR_AutoZone $AutoZone
   * @param PrimeOCR_ZoneContent $ZoneContent
   * @access public
   */
  public function __construct($AccuracyLevel, $Deskew, $ImageProcessingOptions, $LexicalChecking, $PageQuality, $PrintType, $AutoZone, $ZoneContent)
  {
    $this->AccuracyLevel = $AccuracyLevel;
    $this->Deskew = $Deskew;
    $this->ImageProcessingOptions = $ImageProcessingOptions;
    $this->LexicalChecking = $LexicalChecking;
    $this->PageQuality = $PageQuality;
    $this->PrintType = $PrintType;
    $this->AutoZone = $AutoZone;
    $this->ZoneContent = $ZoneContent;
  }

}
