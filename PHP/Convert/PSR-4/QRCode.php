<?php

namespace Muhimbi\PDFConverterServices;

class QRCode
{

  /**
   * 
   * @var string $Text
   * @access public
   */
  public $Text = null;

  /**
   * 
   * @var ErrorCorrectionLevel $ErrorCorrectionLevel
   * @access public
   */
  public $ErrorCorrectionLevel = null;

  /**
   * 
   * @var BarcodeInputMode $InputMode
   * @access public
   */
  public $InputMode = null;

  /**
   * 
   * @var QRCodeVersion $Version
   * @access public
   */
  public $Version = null;

  /**
   * 
   * @param ErrorCorrectionLevel $ErrorCorrectionLevel
   * @param BarcodeInputMode $InputMode
   * @param QRCodeVersion $Version
   * @access public
   */
  public function __construct($ErrorCorrectionLevel, $InputMode, $Version)
  {
    $this->ErrorCorrectionLevel = $ErrorCorrectionLevel;
    $this->InputMode = $InputMode;
    $this->Version = $Version;
  }

}
