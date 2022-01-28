<?php

namespace Muhimbi\PDFConverterServices;

class ProcessChangesResponse
{

  /**
   * 
   * @var base64Binary $ProcessChangesResult
   * @access public
   */
  public $ProcessChangesResult = null;

  /**
   * 
   * @param base64Binary $ProcessChangesResult
   * @access public
   */
  public function __construct($ProcessChangesResult)
  {
    $this->ProcessChangesResult = $ProcessChangesResult;
  }

}
