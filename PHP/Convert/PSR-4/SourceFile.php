<?php

namespace Muhimbi\PDFConverterServices;

class SourceFile
{

  /**
   * 
   * @var base64Binary $File
   * @access public
   */
  public $File = null;

  /**
   * 
   * @var OpenOptions $OpenOptions
   * @access public
   */
  public $OpenOptions = null;

  /**
   * 
   * @var ConversionSettings $ConversionSettings
   * @access public
   */
  public $ConversionSettings = null;

  /**
   * 
   * @var FileMergeSettings $MergeSettings
   * @access public
   */
  public $MergeSettings = null;

  /**
   * 
   * @access public
   */
  public function __construct()
  {
  
  }

}
