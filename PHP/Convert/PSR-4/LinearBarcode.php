<?php

namespace Muhimbi\PDFConverterServices;

class LinearBarcode
{

  /**
   * 
   * @var string $Text
   * @access public
   */
  public $Text = null;

  /**
   * 
   * @var BarcodeType $BarcodeType
   * @access public
   */
  public $BarcodeType = null;

  /**
   * 
   * @var boolean $OmitStartStopSymbols
   * @access public
   */
  public $OmitStartStopSymbols = null;

  /**
   * 
   * @var boolean $DisableCheckDigit
   * @access public
   */
  public $DisableCheckDigit = null;

  /**
   * 
   * @var boolean $ShowCheckDigit
   * @access public
   */
  public $ShowCheckDigit = null;

  /**
   * 
   * @var BarcodeTextLocation $TextLocation
   * @access public
   */
  public $TextLocation = null;

  /**
   * 
   * @var string $BarcodeToTextGapHeight
   * @access public
   */
  public $BarcodeToTextGapHeight = null;

  /**
   * 
   * @var string $FontFamilyName
   * @access public
   */
  public $FontFamilyName = null;

  /**
   * 
   * @var string $FontSize
   * @access public
   */
  public $FontSize = null;

  /**
   * 
   * @var FontStyle $FontStyle
   * @access public
   */
  public $FontStyle = null;

  /**
   * 
   * @var HAlign $TextAlignment
   * @access public
   */
  public $TextAlignment = null;

  /**
   * 
   * @var string $Margin
   * @access public
   */
  public $Margin = null;

  /**
   * 
   * @param BarcodeType $BarcodeType
   * @param boolean $OmitStartStopSymbols
   * @param boolean $DisableCheckDigit
   * @param boolean $ShowCheckDigit
   * @param BarcodeTextLocation $TextLocation
   * @param FontStyle $FontStyle
   * @param HAlign $TextAlignment
   * @access public
   */
  public function __construct($BarcodeType, $OmitStartStopSymbols, $DisableCheckDigit, $ShowCheckDigit, $TextLocation, $FontStyle, $TextAlignment)
  {
    $this->BarcodeType = $BarcodeType;
    $this->OmitStartStopSymbols = $OmitStartStopSymbols;
    $this->DisableCheckDigit = $DisableCheckDigit;
    $this->ShowCheckDigit = $ShowCheckDigit;
    $this->TextLocation = $TextLocation;
    $this->FontStyle = $FontStyle;
    $this->TextAlignment = $TextAlignment;
  }

}
