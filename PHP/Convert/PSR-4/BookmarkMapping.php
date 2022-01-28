<?php

namespace Muhimbi\PDFConverterServices;

class BookmarkMapping
{

  /**
   * 
   * @var string $Source
   * @access public
   */
  public $Source = null;

  /**
   * 
   * @var int $Level
   * @access public
   */
  public $Level = null;

  /**
   * 
   * @param int $Level
   * @access public
   */
  public function __construct($Level)
  {
    $this->Level = $Level;
  }

}
