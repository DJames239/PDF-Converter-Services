<?php

namespace Muhimbi\PDFConverterServices;

class Defaults
{

  /**
   * 
   * @var HPosition $HPosition
   * @access public
   */
  public $HPosition = null;

  /**
   * 
   * @var VPosition $VPosition
   * @access public
   */
  public $VPosition = null;

  /**
   * 
   * @var string $X
   * @access public
   */
  public $X = null;

  /**
   * 
   * @var string $Y
   * @access public
   */
  public $Y = null;

  /**
   * 
   * @var string $Rotation
   * @access public
   */
  public $Rotation = null;

  /**
   * 
   * @var string $Transparency
   * @access public
   */
  public $Transparency = null;

  /**
   * 
   * @var string $LineColor
   * @access public
   */
  public $LineColor = null;

  /**
   * 
   * @var string $LineWidth
   * @access public
   */
  public $LineWidth = null;

  /**
   * 
   * @var string $FillColor
   * @access public
   */
  public $FillColor = null;

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
   * @var WordWrap $WordWrap
   * @access public
   */
  public $WordWrap = null;

  /**
   * 
   * @var ScaleMode $ScaleMode
   * @access public
   */
  public $ScaleMode = null;

  /**
   * 
   * @var string $ScaleX
   * @access public
   */
  public $ScaleX = null;

  /**
   * 
   * @var string $ScaleY
   * @access public
   */
  public $ScaleY = null;

  /**
   * 
   * @param HPosition $HPosition
   * @param VPosition $VPosition
   * @param FontStyle $FontStyle
   * @param HAlign $HAlign
   * @param VAlign $VAlign
   * @param WordWrap $WordWrap
   * @param ScaleMode $ScaleMode
   * @access public
   */
  public function __construct($HPosition, $VPosition, $FontStyle, $HAlign, $VAlign, $WordWrap, $ScaleMode)
  {
    $this->HPosition = $HPosition;
    $this->VPosition = $VPosition;
    $this->FontStyle = $FontStyle;
    $this->HAlign = $HAlign;
    $this->VAlign = $VAlign;
    $this->WordWrap = $WordWrap;
    $this->ScaleMode = $ScaleMode;
  }

}
