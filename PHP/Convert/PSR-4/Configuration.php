<?php

namespace Muhimbi\PDFConverterServices;

class Configuration
{

  /**
   * 
   * @var string $ConversionServerAddress
   * @access public
   */
  public $ConversionServerAddress = null;

  /**
   * 
   * @var ConverterConfiguration[] $Converters
   * @access public
   */
  public $Converters = null;

  /**
   * 
   * @var OperationTypeConfiguration[] $OperationTypes
   * @access public
   */
  public $OperationTypes = null;

  /**
   * 
   * @access public
   */
  public function __construct()
  {
  
  }

}
