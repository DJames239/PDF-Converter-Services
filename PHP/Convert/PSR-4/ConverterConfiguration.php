<?php

namespace Muhimbi\PDFConverterServices;

class ConverterConfiguration
{

  /**
   * 
   * @var string $ConverterName
   * @access public
   */
  public $ConverterName = null;

  /**
   * 
   * @var ConversionFidelities $SupportedFidelity
   * @access public
   */
  public $SupportedFidelity = null;

  /**
   * 
   * @var string[] $SupportedFileExtensions
   * @access public
   */
  public $SupportedFileExtensions = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var string[] $SupportedOutputFormats
   * @access public
   */
  public $SupportedOutputFormats = null;

  /**
   * 
   * @param ConversionFidelities $SupportedFidelity
   * @access public
   */
  public function __construct($SupportedFidelity)
  {
    $this->SupportedFidelity = $SupportedFidelity;
  }

}
