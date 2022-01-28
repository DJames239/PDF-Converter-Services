<?php

namespace Muhimbi\PDFConverterServices;

class ConverterSpecificSettings_MSG
{

  /**
   * 
   * @var boolean $ConvertAttachments
   * @access public
   */
  public $ConvertAttachments = null;

  /**
   * 
   * @var string $PaperSize
   * @access public
   */
  public $PaperSize = null;

  /**
   * 
   * @var HTMLScaleMode $HTMLScaleMode
   * @access public
   */
  public $HTMLScaleMode = null;

  /**
   * 
   * @var MSGPlainTextLineBreaks $PlainTextLineBreaks
   * @access public
   */
  public $PlainTextLineBreaks = null;

  /**
   * 
   * @var MSGBestBodyMode $BestBodyMode
   * @access public
   */
  public $BestBodyMode = null;

  /**
   * 
   * @var MSGEmailAddressDisplayMode $EmailAddressDisplayMode
   * @access public
   */
  public $EmailAddressDisplayMode = null;

  /**
   * 
   * @var MSGEmailAddressDisplayMode $FromEmailAddressDisplayMode
   * @access public
   */
  public $FromEmailAddressDisplayMode = null;

  /**
   * 
   * @var boolean $DisplayAttachmentSummary
   * @access public
   */
  public $DisplayAttachmentSummary = null;

  /**
   * 
   * @var boolean $BreakOnUnsupportedAttachment
   * @access public
   */
  public $BreakOnUnsupportedAttachment = null;

  /**
   * 
   * @var boolean $BreakOnUnsupportedEmbeddedObject
   * @access public
   */
  public $BreakOnUnsupportedEmbeddedObject = null;

  /**
   * 
   * @var MSGEmbeddedObjectDisplayMode $EmbeddedObjectDisplayMode
   * @access public
   */
  public $EmbeddedObjectDisplayMode = null;

  /**
   * 
   * @var MSGEmbeddedObjectIconDisplayMode $EmbeddedObjectIconDisplayMode
   * @access public
   */
  public $EmbeddedObjectIconDisplayMode = null;

  /**
   * 
   * @var float $EmbeddedObjectScalePercentage
   * @access public
   */
  public $EmbeddedObjectScalePercentage = null;

  /**
   * 
   * @var string $SentDateMissingDisplayMode
   * @access public
   */
  public $SentDateMissingDisplayMode = null;

  /**
   * 
   * @var HTMLRenderingEngine $HtmlRenderingEngine
   * @access public
   */
  public $HtmlRenderingEngine = null;

  /**
   * 
   * @var string $WebKitViewPortSize
   * @access public
   */
  public $WebKitViewPortSize = null;

  /**
   * 
   * @var boolean $EnableWebKitOfflineMode
   * @access public
   */
  public $EnableWebKitOfflineMode = null;

  /**
   * 
   * @var string $PageMargins
   * @access public
   */
  public $PageMargins = null;

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
   * @var ForceMessageHeaderEncoding $ForceMessageHeaderEncoding
   * @access public
   */
  public $ForceMessageHeaderEncoding = null;

  /**
   * 
   * @var int $MinimumImageAttachmentDimension
   * @access public
   */
  public $MinimumImageAttachmentDimension = null;

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
   * @param boolean $ConvertAttachments
   * @param HTMLScaleMode $HTMLScaleMode
   * @param MSGPlainTextLineBreaks $PlainTextLineBreaks
   * @param MSGBestBodyMode $BestBodyMode
   * @param MSGEmailAddressDisplayMode $EmailAddressDisplayMode
   * @param MSGEmailAddressDisplayMode $FromEmailAddressDisplayMode
   * @param boolean $DisplayAttachmentSummary
   * @param boolean $BreakOnUnsupportedAttachment
   * @param boolean $BreakOnUnsupportedEmbeddedObject
   * @param MSGEmbeddedObjectDisplayMode $EmbeddedObjectDisplayMode
   * @param MSGEmbeddedObjectIconDisplayMode $EmbeddedObjectIconDisplayMode
   * @param float $EmbeddedObjectScalePercentage
   * @param HTMLRenderingEngine $HtmlRenderingEngine
   * @param boolean $EnableWebKitOfflineMode
   * @param MergeMode $AttachmentMergeMode
   * @param UnsupportedFileBehaviour $UnsupportedAttachmentBehaviour
   * @param boolean $BreakMergeOnError
   * @param ForceMessageHeaderEncoding $ForceMessageHeaderEncoding
   * @param int $MinimumImageAttachmentDimension
   * @access public
   */
  public function __construct($ConvertAttachments, $HTMLScaleMode, $PlainTextLineBreaks, $BestBodyMode, $EmailAddressDisplayMode, $FromEmailAddressDisplayMode, $DisplayAttachmentSummary, $BreakOnUnsupportedAttachment, $BreakOnUnsupportedEmbeddedObject, $EmbeddedObjectDisplayMode, $EmbeddedObjectIconDisplayMode, $EmbeddedObjectScalePercentage, $HtmlRenderingEngine, $EnableWebKitOfflineMode, $AttachmentMergeMode, $UnsupportedAttachmentBehaviour, $BreakMergeOnError, $ForceMessageHeaderEncoding, $MinimumImageAttachmentDimension)
  {
    $this->ConvertAttachments = $ConvertAttachments;
    $this->HTMLScaleMode = $HTMLScaleMode;
    $this->PlainTextLineBreaks = $PlainTextLineBreaks;
    $this->BestBodyMode = $BestBodyMode;
    $this->EmailAddressDisplayMode = $EmailAddressDisplayMode;
    $this->FromEmailAddressDisplayMode = $FromEmailAddressDisplayMode;
    $this->DisplayAttachmentSummary = $DisplayAttachmentSummary;
    $this->BreakOnUnsupportedAttachment = $BreakOnUnsupportedAttachment;
    $this->BreakOnUnsupportedEmbeddedObject = $BreakOnUnsupportedEmbeddedObject;
    $this->EmbeddedObjectDisplayMode = $EmbeddedObjectDisplayMode;
    $this->EmbeddedObjectIconDisplayMode = $EmbeddedObjectIconDisplayMode;
    $this->EmbeddedObjectScalePercentage = $EmbeddedObjectScalePercentage;
    $this->HtmlRenderingEngine = $HtmlRenderingEngine;
    $this->EnableWebKitOfflineMode = $EnableWebKitOfflineMode;
    $this->AttachmentMergeMode = $AttachmentMergeMode;
    $this->UnsupportedAttachmentBehaviour = $UnsupportedAttachmentBehaviour;
    $this->BreakMergeOnError = $BreakMergeOnError;
    $this->ForceMessageHeaderEncoding = $ForceMessageHeaderEncoding;
    $this->MinimumImageAttachmentDimension = $MinimumImageAttachmentDimension;
  }

}
