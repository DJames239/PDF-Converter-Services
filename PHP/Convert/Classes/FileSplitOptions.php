<?php

namespace Muhimbi\PDFConverterServices;

class FileSplitOptions
{

  /**
   * 
   * @var FileSplitType $FileSplitType
   * @access public
   */
  public $FileSplitType = null;

  /**
   * 
   * @var int $BatchSize
   * @access public
   */
  public $BatchSize = null;

  /**
   * 
   * @var int $BookmarkLevel
   * @access public
   */
  public $BookmarkLevel = null;

  /**
   * 
   * @var string $FileNameTemplate
   * @access public
   */
  public $FileNameTemplate = null;

  /**
   * 
   * @param FileSplitType $FileSplitType
   * @param int $BatchSize
   * @param int $BookmarkLevel
   * @access public
   */
  public function __construct($FileSplitType, $BatchSize, $BookmarkLevel)
  {
    $this->FileSplitType = $FileSplitType;
    $this->BatchSize = $BatchSize;
    $this->BookmarkLevel = $BookmarkLevel;
  }

}
