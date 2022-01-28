<?php

namespace Muhimbi\PDFConverterServices;

class OpenOptions
{

  /**
   * 
   * @var string $UserName
   * @access public
   */
  public $UserName = null;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password = null;

  /**
   * 
   * @var string $FileExtension
   * @access public
   */
  public $FileExtension = null;

  /**
   * 
   * @var string $OriginalFileName
   * @access public
   */
  public $OriginalFileName = null;

  /**
   * 
   * @var boolean $RefreshContent
   * @access public
   */
  public $RefreshContent = null;

  /**
   * 
   * @var boolean $AllowExternalConnections
   * @access public
   */
  public $AllowExternalConnections = null;

  /**
   * 
   * @var MacroSecurityOption $AllowMacros
   * @access public
   */
  public $AllowMacros = null;

  /**
   * 
   * @var SystemSettings $SystemSettings
   * @access public
   */
  public $SystemSettings = null;

  /**
   * 
   * @var SubscriptionSettings $SubscriptionSettings
   * @access public
   */
  public $SubscriptionSettings = null;

  /**
   * 
   * @param boolean $RefreshContent
   * @param boolean $AllowExternalConnections
   * @param MacroSecurityOption $AllowMacros
   * @access public
   */
  public function __construct($RefreshContent, $AllowExternalConnections, $AllowMacros)
  {
    $this->RefreshContent = $RefreshContent;
    $this->AllowExternalConnections = $AllowExternalConnections;
    $this->AllowMacros = $AllowMacros;
  }

}
