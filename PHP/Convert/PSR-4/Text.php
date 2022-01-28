<?php

namespace Muhimbi\PDFConverterServices;

class Text
{

  /**
   * 
   * @var string $Content
   * @access public
   */
  public $Content = null;

  /**
   * 
   * @var string $FontFamilyName
   * @access public
   */
  public $FontFamilyName = null;

  /**
   * 
   * @var string $FontSize
   * @access public
   */
  public $FontSize = null;

  /**
   * 
   * @var FontStyle $FontStyle
   * @access public
   */
  public $FontStyle = null;

  /**
   * 
   * @var WordWrap $WordWrap
   * @access public
   */
  public $WordWrap = null;

  /**
   * 
   * @var HAlign $HAlign
   * @access public
   */
  public $HAlign = null;

  /**
   * 
   * @var VAlign $VAlign
   * @access public
   */
  public $VAlign = null;

  /**
   * 
   * @param FontStyle $FontStyle
   * @param WordWrap $WordWrap
   * @param HAlign $HAlign
   * @param VAlign $VAlign
   * @access public
   */
  public function __construct($FontStyle, $WordWrap, $HAlign, $VAlign)
  {
    $this->FontStyle = $FontStyle;
    $this->WordWrap = $WordWrap;
    $this->HAlign = $HAlign;
    $this->VAlign = $VAlign;
  }

}
