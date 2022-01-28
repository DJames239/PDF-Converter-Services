<?php

namespace Muhimbi\PDFConverterServices;

class GetDiagnosticsResponse
{

  /**
   * 
   * @var Diagnostics $GetDiagnosticsResult
   * @access public
   */
  public $GetDiagnosticsResult = null;

  /**
   * 
   * @param Diagnostics $GetDiagnosticsResult
   * @access public
   */
  public function __construct($GetDiagnosticsResult)
  {
    $this->GetDiagnosticsResult = $GetDiagnosticsResult;
  }

}
