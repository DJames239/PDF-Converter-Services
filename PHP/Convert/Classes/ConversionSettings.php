<?php

namespace Muhimbi\PDFConverterServices;

class ConversionSettings
{

  /**
   * 
   * @var OutputFormat $Format
   * @access public
   */
  public $Format = null;

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
   * @var ConversionRange $Range
   * @access public
   */
  public $Range = null;

  /**
   * 
   * @var ConversionQuality $Quality
   * @access public
   */
  public $Quality = null;

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
   * @var ConversionFidelities $Fidelity
   * @access public
   */
  public $Fidelity = null;

  /**
   * 
   * @var BookmarkGenerationOption $GenerateBookmarks
   * @access public
   */
  public $GenerateBookmarks = null;

  /**
   * 
   * @var Watermark[] $Watermarks
   * @access public
   */
  public $Watermarks = null;

  /**
   * 
   * @var PageOrientation $PageOrientation
   * @access public
   */
  public $PageOrientation = null;

  /**
   * 
   * @var ConverterSpecificSettings $ConverterSpecificSettings
   * @access public
   */
  public $ConverterSpecificSettings = null;

  /**
   * 
   * @var OutputFormatSpecificSettings $OutputFormatSpecificSettings
   * @access public
   */
  public $OutputFormatSpecificSettings = null;

  /**
   * 
   * @var OCRSettings $OCRSettings
   * @access public
   */
  public $OCRSettings = null;

  /**
   * 
   * @var TOCSettings $TOCSettings
   * @access public
   */
  public $TOCSettings = null;

  /**
   * 
   * @param OutputFormat $Format
   * @param int $StartPage
   * @param int $EndPage
   * @param ConversionRange $Range
   * @param ConversionQuality $Quality
   * @param PDFProfile $PDFProfile
   * @param SecurityOptions $SecurityOptions
   * @param ConversionFidelities $Fidelity
   * @param BookmarkGenerationOption $GenerateBookmarks
   * @param PageOrientation $PageOrientation
   * @access public
   */
  public function __construct($Format, $StartPage, $EndPage, $Range, $Quality, $PDFProfile, $SecurityOptions, $Fidelity, $GenerateBookmarks, $PageOrientation)
  {
    $this->Format = $Format;
    $this->StartPage = $StartPage;
    $this->EndPage = $EndPage;
    $this->Range = $Range;
    $this->Quality = $Quality;
    $this->PDFProfile = $PDFProfile;
    $this->SecurityOptions = $SecurityOptions;
    $this->Fidelity = $Fidelity;
    $this->GenerateBookmarks = $GenerateBookmarks;
    $this->PageOrientation = $PageOrientation;
  }

}
