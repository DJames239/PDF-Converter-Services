<?php

namespace Muhimbi\PDFConverterServices;

class ConverterSpecificSettings_InfoPath
{

  /**
   * 
   * @var boolean $StripDotNETCode
   * @access public
   */
  public $StripDotNETCode = null;

  /**
   * 
   * @var boolean $StripDataObjects
   * @access public
   */
  public $StripDataObjects = null;

  /**
   * 
   * @var boolean $ConvertAttachments
   * @access public
   */
  public $ConvertAttachments = null;

  /**
   * 
   * @var InfoPathView[] $ConversionViews
   * @access public
   */
  public $ConversionViews = null;

  /**
   * 
   * @var boolean $AutoTrustForms
   * @access public
   */
  public $AutoTrustForms = null;

  /**
   * 
   * @var boolean $ProcessFullTrustForms
   * @access public
   */
  public $ProcessFullTrustForms = null;

  /**
   * 
   * @var boolean $UseNativePrintEngine
   * @access public
   */
  public $UseNativePrintEngine = null;

  /**
   * 
   * @var string $DefaultPaperSize
   * @access public
   */
  public $DefaultPaperSize = null;

  /**
   * 
   * @var string $ForcePaperSize
   * @access public
   */
  public $ForcePaperSize = null;

  /**
   * 
   * @var PageOrientation $DefaultPageOrientation
   * @access public
   */
  public $DefaultPageOrientation = null;

  /**
   * 
   * @var PageOrientation $ForcePageOrientation
   * @access public
   */
  public $ForcePageOrientation = null;

  /**
   * 
   * @var base64Binary $XSNData
   * @access public
   */
  public $XSNData = null;

  /**
   * 
   * @var MergeMode $AttachmentMergeMode
   * @access public
   */
  public $AttachmentMergeMode = null;

  /**
   * 
   * @var UnsupportedFileBehaviour $UnsupportedAttachmentBehaviour
   * @access public
   */
  public $UnsupportedAttachmentBehaviour = null;

  /**
   * 
   * @var boolean $BreakMergeOnError
   * @access public
   */
  public $BreakMergeOnError = null;

  /**
   * 
   * @var string $IncludeAttachmentTypes
   * @access public
   */
  public $IncludeAttachmentTypes = null;

  /**
   * 
   * @var string $ExcludeAttachmentTypes
   * @access public
   */
  public $ExcludeAttachmentTypes = null;

  /**
   * 
   * @var BooleanEnum $ProcessRuleSets
   * @access public
   */
  public $ProcessRuleSets = null;

  /**
   * 
   * @var string $XSNUserName
   * @access public
   */
  public $XSNUserName = null;

  /**
   * 
   * @var string $XSNPassword
   * @access public
   */
  public $XSNPassword = null;

  /**
   * 
   * @var string $XSNDomain
   * @access public
   */
  public $XSNDomain = null;

  /**
   * 
   * @param boolean $StripDotNETCode
   * @param boolean $StripDataObjects
   * @param boolean $ConvertAttachments
   * @param boolean $AutoTrustForms
   * @param boolean $ProcessFullTrustForms
   * @param boolean $UseNativePrintEngine
   * @param PageOrientation $DefaultPageOrientation
   * @param PageOrientation $ForcePageOrientation
   * @param MergeMode $AttachmentMergeMode
   * @param UnsupportedFileBehaviour $UnsupportedAttachmentBehaviour
   * @param boolean $BreakMergeOnError
   * @param BooleanEnum $ProcessRuleSets
   * @access public
   */
  public function __construct($StripDotNETCode, $StripDataObjects, $ConvertAttachments, $AutoTrustForms, $ProcessFullTrustForms, $UseNativePrintEngine, $DefaultPageOrientation, $ForcePageOrientation, $AttachmentMergeMode, $UnsupportedAttachmentBehaviour, $BreakMergeOnError, $ProcessRuleSets)
  {
    $this->StripDotNETCode = $StripDotNETCode;
    $this->StripDataObjects = $StripDataObjects;
    $this->ConvertAttachments = $ConvertAttachments;
    $this->AutoTrustForms = $AutoTrustForms;
    $this->ProcessFullTrustForms = $ProcessFullTrustForms;
    $this->UseNativePrintEngine = $UseNativePrintEngine;
    $this->DefaultPageOrientation = $DefaultPageOrientation;
    $this->ForcePageOrientation = $ForcePageOrientation;
    $this->AttachmentMergeMode = $AttachmentMergeMode;
    $this->UnsupportedAttachmentBehaviour = $UnsupportedAttachmentBehaviour;
    $this->BreakMergeOnError = $BreakMergeOnError;
    $this->ProcessRuleSets = $ProcessRuleSets;
  }

}
