<?php

namespace Muhimbi\PDFConverterServices;

class ConverterSpecificSettings_Cad
{

  /**
   * 
   * @var string $PaperSize
   * @access public
   */
  public $PaperSize = null;

  /**
   * 
   * @var string $BackgroundColor
   * @access public
   */
  public $BackgroundColor = null;

  /**
   * 
   * @var string $ForegroundColor
   * @access public
   */
  public $ForegroundColor = null;

  /**
   * 
   * @var CadConversionElement[] $CadConversionElements
   * @access public
   */
  public $CadConversionElements = null;

  /**
   * 
   * @var string $PageMargins
   * @access public
   */
  public $PageMargins = null;

  /**
   * 
   * @var CadEmptyLayoutDetectionMode $EmptyLayoutDetectionMode
   * @access public
   */
  public $EmptyLayoutDetectionMode = null;

  /**
   * 
   * @var CadLayoutSortOrder $LayoutSortOrder
   * @access public
   */
  public $LayoutSortOrder = null;

  /**
   * 
   * @var string $ExternalReferences
   * @access public
   */
  public $ExternalReferences = null;

  /**
   * 
   * @param CadEmptyLayoutDetectionMode $EmptyLayoutDetectionMode
   * @param CadLayoutSortOrder $LayoutSortOrder
   * @access public
   */
  public function __construct($EmptyLayoutDetectionMode, $LayoutSortOrder)
  {
    $this->EmptyLayoutDetectionMode = $EmptyLayoutDetectionMode;
    $this->LayoutSortOrder = $LayoutSortOrder;
  }

}
