<?php

namespace Muhimbi\PDFConverterServices;

class Watermark
{

  /**
   * 
   * @var PageOrientation $PageOrientation
   * @access public
   */
  public $PageOrientation = null;

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
   * @var boolean $PrintOnly
   * @access public
   */
  public $PrintOnly = null;

  /**
   * 
   * @var int $StartSection
   * @access public
   */
  public $StartSection = null;

  /**
   * 
   * @var int $EndSection
   * @access public
   */
  public $EndSection = null;

  /**
   * 
   * @var string $SectionRange
   * @access public
   */
  public $SectionRange = null;

  /**
   * 
   * @var PageType $PageType
   * @access public
   */
  public $PageType = null;

  /**
   * 
   * @param PageOrientation $PageOrientation
   * @param int $StartPage
   * @param int $EndPage
   * @param int $PageInterval
   * @param boolean $PrintOnly
   * @param int $StartSection
   * @param int $EndSection
   * @param PageType $PageType
   * @access public
   */
  public function __construct($PageOrientation, $StartPage, $EndPage, $PageInterval, $PrintOnly, $StartSection, $EndSection, $PageType)
  {
    $this->PageOrientation = $PageOrientation;
    $this->StartPage = $StartPage;
    $this->EndPage = $EndPage;
    $this->PageInterval = $PageInterval;
    $this->PrintOnly = $PrintOnly;
    $this->StartSection = $StartSection;
    $this->EndSection = $EndSection;
    $this->PageType = $PageType;
  }

}
