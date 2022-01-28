<?php

namespace Muhimbi\PDFConverterServices;

class FileMergeSettings
{

  /**
   * 
   * @var string $TopLevelBookmark
   * @access public
   */
  public $TopLevelBookmark = null;

  /**
   * 
   * @var MergeMode $MergeMode
   * @access public
   */
  public $MergeMode = null;

  /**
   * 
   * @var UnsupportedFileBehaviour $UnsupportedFileBehaviour
   * @access public
   */
  public $UnsupportedFileBehaviour = null;

  /**
   * 
   * @param MergeMode $MergeMode
   * @param UnsupportedFileBehaviour $UnsupportedFileBehaviour
   * @access public
   */
  public function __construct($MergeMode, $UnsupportedFileBehaviour)
  {
    $this->MergeMode = $MergeMode;
    $this->UnsupportedFileBehaviour = $UnsupportedFileBehaviour;
  }

}
