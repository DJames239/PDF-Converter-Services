<?php

namespace Muhimbi\PDFConverterServices;

class OutputFormatSpecificSettings_PDF
{

  /**
   * 
   * @var boolean $FastWebView
   * @access public
   */
  public $FastWebView = null;

  /**
   * 
   * @var boolean $EmbedAllFonts
   * @access public
   */
  public $EmbedAllFonts = null;

  /**
   * 
   * @var boolean $SubsetFonts
   * @access public
   */
  public $SubsetFonts = null;

  /**
   * 
   * @var PDFViewerPreferences $ViewerPreferences
   * @access public
   */
  public $ViewerPreferences = null;

  /**
   * 
   * @var boolean $PostProcessFile
   * @access public
   */
  public $PostProcessFile = null;

  /**
   * 
   * @var NamedDestinationProcessingMode $NamedDestinationProcessingMode
   * @access public
   */
  public $NamedDestinationProcessingMode = null;

  /**
   * 
   * @param boolean $FastWebView
   * @param boolean $EmbedAllFonts
   * @param boolean $SubsetFonts
   * @param boolean $PostProcessFile
   * @param NamedDestinationProcessingMode $NamedDestinationProcessingMode
   * @access public
   */
  public function __construct($FastWebView, $EmbedAllFonts, $SubsetFonts, $PostProcessFile, $NamedDestinationProcessingMode)
  {
    $this->FastWebView = $FastWebView;
    $this->EmbedAllFonts = $EmbedAllFonts;
    $this->SubsetFonts = $SubsetFonts;
    $this->PostProcessFile = $PostProcessFile;
    $this->NamedDestinationProcessingMode = $NamedDestinationProcessingMode;
  }

}
