<?php

namespace Muhimbi\PDFConverterServices;

class PDFViewerPreferences
{

  /**
   * 
   * @var boolean $CenterWindow
   * @access public
   */
  public $CenterWindow = null;

  /**
   * 
   * @var boolean $DisplayTitle
   * @access public
   */
  public $DisplayTitle = null;

  /**
   * 
   * @var boolean $FitWindow
   * @access public
   */
  public $FitWindow = null;

  /**
   * 
   * @var boolean $HideMenubar
   * @access public
   */
  public $HideMenubar = null;

  /**
   * 
   * @var boolean $HideToolbar
   * @access public
   */
  public $HideToolbar = null;

  /**
   * 
   * @var boolean $HideWindowUI
   * @access public
   */
  public $HideWindowUI = null;

  /**
   * 
   * @var PDFPageLayout $PageLayout
   * @access public
   */
  public $PageLayout = null;

  /**
   * 
   * @var PDFNavigationPane $NavigationPane
   * @access public
   */
  public $NavigationPane = null;

  /**
   * 
   * @var boolean $HideEmptyNavigationPane
   * @access public
   */
  public $HideEmptyNavigationPane = null;

  /**
   * 
   * @var PDFPageScalingMode $PageScalingMode
   * @access public
   */
  public $PageScalingMode = null;

  /**
   * 
   * @var boolean $FullScreen
   * @access public
   */
  public $FullScreen = null;

  /**
   * 
   * @param boolean $CenterWindow
   * @param boolean $DisplayTitle
   * @param boolean $FitWindow
   * @param boolean $HideMenubar
   * @param boolean $HideToolbar
   * @param boolean $HideWindowUI
   * @param PDFPageLayout $PageLayout
   * @param PDFNavigationPane $NavigationPane
   * @param boolean $HideEmptyNavigationPane
   * @param PDFPageScalingMode $PageScalingMode
   * @param boolean $FullScreen
   * @access public
   */
  public function __construct($CenterWindow, $DisplayTitle, $FitWindow, $HideMenubar, $HideToolbar, $HideWindowUI, $PageLayout, $NavigationPane, $HideEmptyNavigationPane, $PageScalingMode, $FullScreen)
  {
    $this->CenterWindow = $CenterWindow;
    $this->DisplayTitle = $DisplayTitle;
    $this->FitWindow = $FitWindow;
    $this->HideMenubar = $HideMenubar;
    $this->HideToolbar = $HideToolbar;
    $this->HideWindowUI = $HideWindowUI;
    $this->PageLayout = $PageLayout;
    $this->NavigationPane = $NavigationPane;
    $this->HideEmptyNavigationPane = $HideEmptyNavigationPane;
    $this->PageScalingMode = $PageScalingMode;
    $this->FullScreen = $FullScreen;
  }

}
