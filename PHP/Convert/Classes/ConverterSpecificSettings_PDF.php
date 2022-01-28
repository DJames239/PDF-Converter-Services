<?php

namespace Muhimbi\PDFConverterServices;

class ConverterSpecificSettings_PDF
{

  /**
   * 
   * @var boolean $ConvertAttachments
   * @access public
   */
  public $ConvertAttachments = null;

  /**
   * 
   * @var PDFConvertAttachmentMode $ConvertAttachmentMode
   * @access public
   */
  public $ConvertAttachmentMode = null;

  /**
   * 
   * @var boolean $IgnorePortfolioCoverSheet
   * @access public
   */
  public $IgnorePortfolioCoverSheet = null;

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
   * @param boolean $ConvertAttachments
   * @param PDFConvertAttachmentMode $ConvertAttachmentMode
   * @param boolean $IgnorePortfolioCoverSheet
   * @param MergeMode $AttachmentMergeMode
   * @param UnsupportedFileBehaviour $UnsupportedAttachmentBehaviour
   * @param boolean $BreakMergeOnError
   * @access public
   */
  public function __construct($ConvertAttachments, $ConvertAttachmentMode, $IgnorePortfolioCoverSheet, $AttachmentMergeMode, $UnsupportedAttachmentBehaviour, $BreakMergeOnError)
  {
    $this->ConvertAttachments = $ConvertAttachments;
    $this->ConvertAttachmentMode = $ConvertAttachmentMode;
    $this->IgnorePortfolioCoverSheet = $IgnorePortfolioCoverSheet;
    $this->AttachmentMergeMode = $AttachmentMergeMode;
    $this->UnsupportedAttachmentBehaviour = $UnsupportedAttachmentBehaviour;
    $this->BreakMergeOnError = $BreakMergeOnError;
  }

}
