<?php

namespace Muhimbi\PDFConverterServices;

class ProcessingOptions
{

  /**
   * 
   * @var SourceFile[] $SourceFiles
   * @access public
   */
  public $SourceFiles = null;

  /**
   * 
   * @var MergeSettings $MergeSettings
   * @access public
   */
  public $MergeSettings = null;

  /**
   * 
   * @var FileSplitOptions $SplitOptions
   * @access public
   */
  public $SplitOptions = null;

  /**
   * 
   * @var OCRSettings $OCRSettings
   * @access public
   */
  public $OCRSettings = null;

  /**
   * 
   * @var SubscriptionSettings $SubscriptionSettings
   * @access public
   */
  public $SubscriptionSettings = null;

  /**
   * 
   * @access public
   */
  public function __construct()
  {
  
  }

}
