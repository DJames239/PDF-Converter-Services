<?php

namespace Muhimbi\PDFConverterServices;

class CadConversionElement
{

  /**
   * 
   * @var CadConversionElementType $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @param CadConversionElementType $Type
   * @access public
   */
  public function __construct($Type)
  {
    $this->Type = $Type;
  }

}
