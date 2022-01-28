<?php

namespace Muhimbi\PDFConverterServices;

class GetDiagnostics
{

  /**
   * 
   * @var DiagnosticRequestItem[] $convertersToDiagnose
   * @access public
   */
  public $convertersToDiagnose = null;

  /**
   * 
   * @param DiagnosticRequestItem[] $convertersToDiagnose
   * @access public
   */
  public function __construct($convertersToDiagnose)
  {
    $this->convertersToDiagnose = $convertersToDiagnose;
  }

}
