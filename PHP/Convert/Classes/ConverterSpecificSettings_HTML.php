<?php

namespace Muhimbi\PDFConverterServices;

class ConverterSpecificSettings_HTML
{

  /**
   * 
   * @var string $PaperSize
   * @access public
   */
  public $PaperSize = null;

  /**
   * 
   * @var HTMLScaleMode $ScaleMode
   * @access public
   */
  public $ScaleMode = null;

  /**
   * 
   * @var string $PageMargins
   * @access public
   */
  public $PageMargins = null;

  /**
   * 
   * @var int $ConversionDelay
   * @access public
   */
  public $ConversionDelay = null;

  /**
   * 
   * @var boolean $ClearBrowserCache
   * @access public
   */
  public $ClearBrowserCache = null;

  /**
   * 
   * @var boolean $SplitImages
   * @access public
   */
  public $SplitImages = null;

  /**
   * 
   * @var HTMLRenderingEngine $HtmlRenderingEngine
   * @access public
   */
  public $HtmlRenderingEngine = null;

  /**
   * 
   * @var string $WebKitViewPortSize
   * @access public
   */
  public $WebKitViewPortSize = null;

  /**
   * 
   * @var AuthenticationMode $AuthenticationMode
   * @access public
   */
  public $AuthenticationMode = null;

  /**
   * 
   * @var MediaType $MediaType
   * @access public
   */
  public $MediaType = null;

  /**
   * 
   * @var boolean $EnableWebKitOfflineMode
   * @access public
   */
  public $EnableWebKitOfflineMode = null;

  /**
   * 
   * @param HTMLScaleMode $ScaleMode
   * @param int $ConversionDelay
   * @param boolean $ClearBrowserCache
   * @param boolean $SplitImages
   * @param HTMLRenderingEngine $HtmlRenderingEngine
   * @param AuthenticationMode $AuthenticationMode
   * @param MediaType $MediaType
   * @param boolean $EnableWebKitOfflineMode
   * @access public
   */
  public function __construct($ScaleMode, $ConversionDelay, $ClearBrowserCache, $SplitImages, $HtmlRenderingEngine, $AuthenticationMode, $MediaType, $EnableWebKitOfflineMode)
  {
    $this->ScaleMode = $ScaleMode;
    $this->ConversionDelay = $ConversionDelay;
    $this->ClearBrowserCache = $ClearBrowserCache;
    $this->SplitImages = $SplitImages;
    $this->HtmlRenderingEngine = $HtmlRenderingEngine;
    $this->AuthenticationMode = $AuthenticationMode;
    $this->MediaType = $MediaType;
    $this->EnableWebKitOfflineMode = $EnableWebKitOfflineMode;
  }

}
