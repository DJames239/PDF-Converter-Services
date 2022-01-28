<?php

namespace Muhimbi\PDFConverterServices;

class ConverterSpecificSettings_Image
{

  /**
   * 
   * @var string $PaperSize
   * @access public
   */
  public $PaperSize = null;

  /**
   * 
   * @var string $PageMargins
   * @access public
   */
  public $PageMargins = null;

  /**
   * 
   * @var boolean $AutoRotatePage
   * @access public
   */
  public $AutoRotatePage = null;

  /**
   * 
   * @var ContentScale $ScaleMode
   * @access public
   */
  public $ScaleMode = null;

  /**
   * 
   * @var string $SourceFileResolution
   * @access public
   */
  public $SourceFileResolution = null;

  /**
   * 
   * @param boolean $AutoRotatePage
   * @param ContentScale $ScaleMode
   * @access public
   */
  public function __construct($AutoRotatePage, $ScaleMode)
  {
    $this->AutoRotatePage = $AutoRotatePage;
    $this->ScaleMode = $ScaleMode;
  }

}
