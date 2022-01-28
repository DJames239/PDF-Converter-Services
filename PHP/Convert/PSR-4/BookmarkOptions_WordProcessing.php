<?php

namespace Muhimbi\PDFConverterServices;

class BookmarkOptions_WordProcessing
{

  /**
   * 
   * @var BooleanEnum $UseHeadingStyles
   * @access public
   */
  public $UseHeadingStyles = null;

  /**
   * 
   * @var BooleanEnum $UseOutlineLevels
   * @access public
   */
  public $UseOutlineLevels = null;

  /**
   * 
   * @var int $UpperBookmarkLevel
   * @access public
   */
  public $UpperBookmarkLevel = null;

  /**
   * 
   * @var int $LowerBookmarkLevel
   * @access public
   */
  public $LowerBookmarkLevel = null;

  /**
   * 
   * @var BookmarkMapping[] $BookmarkMappings
   * @access public
   */
  public $BookmarkMappings = null;

  /**
   * 
   * @param BooleanEnum $UseHeadingStyles
   * @param BooleanEnum $UseOutlineLevels
   * @param int $UpperBookmarkLevel
   * @param int $LowerBookmarkLevel
   * @access public
   */
  public function __construct($UseHeadingStyles, $UseOutlineLevels, $UpperBookmarkLevel, $LowerBookmarkLevel)
  {
    $this->UseHeadingStyles = $UseHeadingStyles;
    $this->UseOutlineLevels = $UseOutlineLevels;
    $this->UpperBookmarkLevel = $UpperBookmarkLevel;
    $this->LowerBookmarkLevel = $LowerBookmarkLevel;
  }

}
