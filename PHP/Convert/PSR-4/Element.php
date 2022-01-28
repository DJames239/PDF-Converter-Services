<?php

namespace Muhimbi\PDFConverterServices;

class Element
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
   * @var string $Width
   * @access public
   */
  public $Width = null;

  /**
   * 
   * @var string $Height
   * @access public
   */
  public $Height = null;

  /**
   * 
   * @var int $ZOrder
   * @access public
   */
  public $ZOrder = null;

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
   * @param HPosition $HPosition
   * @param VPosition $VPosition
   * @param int $ZOrder
   * @param ScaleMode $ScaleMode
   * @access public
   */
  public function __construct($HPosition, $VPosition, $ZOrder, $ScaleMode)
  {
    $this->HPosition = $HPosition;
    $this->VPosition = $VPosition;
    $this->ZOrder = $ZOrder;
    $this->ScaleMode = $ScaleMode;
  }

}
