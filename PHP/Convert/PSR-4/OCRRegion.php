<?php

namespace Muhimbi\PDFConverterServices;

class OCRRegion
{

  /**
   * 
   * @var string $X
   * @access public
   */
  public $X = null;

  /**
   * 
   * @var string $Y
   * @access public
   */
  public $Y = null;

  /**
   * 
   * @var string $Width
   * @access public
   */
  public $Width = null;

  /**
   * 
   * @var string $Height
   * @access public
   */
  public $Height = null;

  /**
   * 
   * @var int $StartPage
   * @access public
   */
  public $StartPage = null;

  /**
   * 
   * @var int $EndPage
   * @access public
   */
  public $EndPage = null;

  /**
   * 
   * @var int $PageInterval
   * @access public
   */
  public $PageInterval = null;

  /**
   * 
   * @var string $PageRange
   * @access public
   */
  public $PageRange = null;

  /**
   * 
   * @var string $Id
   * @access public
   */
  public $Id = null;

  /**
   * 
   * @param int $StartPage
   * @param int $EndPage
   * @param int $PageInterval
   * @access public
   */
  public function __construct($StartPage, $EndPage, $PageInterval)
  {
    $this->StartPage = $StartPage;
    $this->EndPage = $EndPage;
    $this->PageInterval = $PageInterval;
  }

}
