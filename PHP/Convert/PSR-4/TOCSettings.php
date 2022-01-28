<?php

namespace Muhimbi\PDFConverterServices;

class TOCSettings
{

  /**
   * 
   * @var string $Template
   * @access public
   */
  public $Template = null;

  /**
   * 
   * @var NameValuePair[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @var string $Bookmark
   * @access public
   */
  public $Bookmark = null;

  /**
   * 
   * @var TOCLocation $Location
   * @access public
   */
  public $Location = null;

  /**
   * 
   * @var string $PaperSize
   * @access public
   */
  public $PaperSize = null;

  /**
   * 
   * @var PageOrientation $PageOrientation
   * @access public
   */
  public $PageOrientation = null;

  /**
   * 
   * @var string $PageMargins
   * @access public
   */
  public $PageMargins = null;

  /**
   * 
   * @var int $MinimumEntries
   * @access public
   */
  public $MinimumEntries = null;

  /**
   * 
   * @var DocumentStartPage $DocumentStartPage
   * @access public
   */
  public $DocumentStartPage = null;

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
   * @param TOCLocation $Location
   * @param PageOrientation $PageOrientation
   * @param int $MinimumEntries
   * @param DocumentStartPage $DocumentStartPage
   * @param HTMLRenderingEngine $HtmlRenderingEngine
   * @access public
   */
  public function __construct($Location, $PageOrientation, $MinimumEntries, $DocumentStartPage, $HtmlRenderingEngine)
  {
    $this->Location = $Location;
    $this->PageOrientation = $PageOrientation;
    $this->MinimumEntries = $MinimumEntries;
    $this->DocumentStartPage = $DocumentStartPage;
    $this->HtmlRenderingEngine = $HtmlRenderingEngine;
  }

}
