<?php

namespace Muhimbi\PDFConverterServices;

class ConverterSpecificSettings_WordProcessing
{

  /**
   * 
   * @var RevisionsAndCommentsMarkupMode $RevisionsAndCommentsMarkupMode
   * @access public
   */
  public $RevisionsAndCommentsMarkupMode = null;

  /**
   * 
   * @var RevisionsAndCommentsDisplayMode $RevisionsAndCommentsDisplayMode
   * @access public
   */
  public $RevisionsAndCommentsDisplayMode = null;

  /**
   * 
   * @var boolean $ProcessDocumentTemplate
   * @access public
   */
  public $ProcessDocumentTemplate = null;

  /**
   * 
   * @var BookmarkOptions_WordProcessing $BookmarkOptions
   * @access public
   */
  public $BookmarkOptions = null;

  /**
   * 
   * @var BooleanEnum $IncludeDocumentStructureTags
   * @access public
   */
  public $IncludeDocumentStructureTags = null;

  /**
   * 
   * @param RevisionsAndCommentsMarkupMode $RevisionsAndCommentsMarkupMode
   * @param RevisionsAndCommentsDisplayMode $RevisionsAndCommentsDisplayMode
   * @param boolean $ProcessDocumentTemplate
   * @param BooleanEnum $IncludeDocumentStructureTags
   * @access public
   */
  public function __construct($RevisionsAndCommentsMarkupMode, $RevisionsAndCommentsDisplayMode, $ProcessDocumentTemplate, $IncludeDocumentStructureTags)
  {
    $this->RevisionsAndCommentsMarkupMode = $RevisionsAndCommentsMarkupMode;
    $this->RevisionsAndCommentsDisplayMode = $RevisionsAndCommentsDisplayMode;
    $this->ProcessDocumentTemplate = $ProcessDocumentTemplate;
    $this->IncludeDocumentStructureTags = $IncludeDocumentStructureTags;
  }

}
