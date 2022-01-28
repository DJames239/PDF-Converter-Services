<?php

namespace Muhimbi\PDFConverterServices;

class ConverterSpecificSettings_Spreadsheets
{

  /**
   * 
   * @var int $FitToPagesWide
   * @access public
   */
  public $FitToPagesWide = null;

  /**
   * 
   * @var int $FitToPagesTall
   * @access public
   */
  public $FitToPagesTall = null;

  /**
   * 
   * @var boolean $UnhideAllRows
   * @access public
   */
  public $UnhideAllRows = null;

  /**
   * 
   * @var boolean $UnhideAllColumns
   * @access public
   */
  public $UnhideAllColumns = null;

  /**
   * 
   * @param int $FitToPagesWide
   * @param int $FitToPagesTall
   * @param boolean $UnhideAllRows
   * @param boolean $UnhideAllColumns
   * @access public
   */
  public function __construct($FitToPagesWide, $FitToPagesTall, $UnhideAllRows, $UnhideAllColumns)
  {
    $this->FitToPagesWide = $FitToPagesWide;
    $this->FitToPagesTall = $FitToPagesTall;
    $this->UnhideAllRows = $UnhideAllRows;
    $this->UnhideAllColumns = $UnhideAllColumns;
  }

}
