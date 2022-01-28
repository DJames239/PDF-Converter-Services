<?php

namespace Muhimbi\PDFConverterServices;

class ConverterSpecificSettings_Presentations
{

  /**
   * 
   * @var PresentationsPrintOutputType $PrintOutputType
   * @access public
   */
  public $PrintOutputType = null;

  /**
   * 
   * @var boolean $FrameSlides
   * @access public
   */
  public $FrameSlides = null;

  /**
   * 
   * @var BooleanEnum $IncludeDocumentStructureTags
   * @access public
   */
  public $IncludeDocumentStructureTags = null;

  /**
   * 
   * @param PresentationsPrintOutputType $PrintOutputType
   * @param boolean $FrameSlides
   * @param BooleanEnum $IncludeDocumentStructureTags
   * @access public
   */
  public function __construct($PrintOutputType, $FrameSlides, $IncludeDocumentStructureTags)
  {
    $this->PrintOutputType = $PrintOutputType;
    $this->FrameSlides = $FrameSlides;
    $this->IncludeDocumentStructureTags = $IncludeDocumentStructureTags;
  }

}
