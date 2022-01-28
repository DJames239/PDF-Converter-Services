<?php

namespace Muhimbi\PDFConverterServices;

class DiagnosticResultItem
{

  /**
   * 
   * @var boolean $Valid
   * @access public
   */
  public $Valid = null;

  /**
   * 
   * @var WebServiceExceptionType $ExceptionType
   * @access public
   */
  public $ExceptionType = null;

  /**
   * 
   * @var string $ConverterName
   * @access public
   */
  public $ConverterName = null;

  /**
   * 
   * @param boolean $Valid
   * @param WebServiceExceptionType $ExceptionType
   * @access public
   */
  public function __construct($Valid, $ExceptionType)
  {
    $this->Valid = $Valid;
    $this->ExceptionType = $ExceptionType;
  }

}
