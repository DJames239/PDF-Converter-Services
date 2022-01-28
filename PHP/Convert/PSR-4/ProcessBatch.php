<?php

namespace Muhimbi\PDFConverterServices;

class ProcessBatch
{

  /**
   * 
   * @var ProcessingOptions $options
   * @access public
   */
  public $options = null;

  /**
   * 
   * @param ProcessingOptions $options
   * @access public
   */
  public function __construct($options)
  {
    $this->options = $options;
  }

}
