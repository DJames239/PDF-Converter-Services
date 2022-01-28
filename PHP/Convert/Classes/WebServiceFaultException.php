<?php

namespace Muhimbi\PDFConverterServices;

class WebServiceFaultException
{

  /**
   * 
   * @var WebServiceExceptionType $ExceptionType
   * @access public
   */
  public $ExceptionType = null;

  /**
   * 
   * @var string[] $ExceptionDetails
   * @access public
   */
  public $ExceptionDetails = null;

  /**
   * 
   * @param WebServiceExceptionType $ExceptionType
   * @access public
   */
  public function __construct($ExceptionType)
  {
    $this->ExceptionType = $ExceptionType;
  }

}
