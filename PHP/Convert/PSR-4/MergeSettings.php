<?php

namespace Muhimbi\PDFConverterServices;

class MergeSettings
{

  /**
   * 
   * @var boolean $BreakOnError
   * @access public
   */
  public $BreakOnError = null;

  /**
   * 
   * @var PDFProfile $PDFProfile
   * @access public
   */
  public $PDFProfile = null;

  /**
   * 
   * @var string $OpenPassword
   * @access public
   */
  public $OpenPassword = null;

  /**
   * 
   * @var string $OwnerPassword
   * @access public
   */
  public $OwnerPassword = null;

  /**
   * 
   * @var SecurityOptions $SecurityOptions
   * @access public
   */
  public $SecurityOptions = null;

  /**
   * 
   * @var Watermark[] $Watermarks
   * @access public
   */
  public $Watermarks = null;

  /**
   * 
   * @var boolean $OmitErrorPages
   * @access public
   */
  public $OmitErrorPages = null;

  /**
   * 
   * @var OutputFormatSpecificSettings $OutputFormatSpecificSettings
   * @access public
   */
  public $OutputFormatSpecificSettings = null;

  /**
   * 
   * @var TOCSettings $TOCSettings
   * @access public
   */
  public $TOCSettings = null;

  /**
   * 
   * @var DocumentStartPage $DocumentStartPage
   * @access public
   */
  public $DocumentStartPage = null;

  /**
   * 
   * @param boolean $BreakOnError
   * @param PDFProfile $PDFProfile
   * @param SecurityOptions $SecurityOptions
   * @param boolean $OmitErrorPages
   * @param DocumentStartPage $DocumentStartPage
   * @access public
   */
  public function __construct($BreakOnError, $PDFProfile, $SecurityOptions, $OmitErrorPages, $DocumentStartPage)
  {
    $this->BreakOnError = $BreakOnError;
    $this->PDFProfile = $PDFProfile;
    $this->SecurityOptions = $SecurityOptions;
    $this->OmitErrorPages = $OmitErrorPages;
    $this->DocumentStartPage = $DocumentStartPage;
  }

}
