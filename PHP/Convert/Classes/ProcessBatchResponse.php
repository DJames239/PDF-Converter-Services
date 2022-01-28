<?php

namespace Muhimbi\PDFConverterServices;

class ProcessBatchResponse
{

  /**
   * 
   * @var BatchResults $ProcessBatchResult
   * @access public
   */
  public $ProcessBatchResult = null;

  /**
   * 
   * @param BatchResults $ProcessBatchResult
   * @access public
   */
  public function __construct($ProcessBatchResult)
  {
    $this->ProcessBatchResult = $ProcessBatchResult;
  }

}
