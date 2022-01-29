<?php

namespace Muhimbi\PDFConverterServices;

use Muhimbi\PDFConverterServices\ConvertResponse;
use Muhimbi\PDFConverterServices\ApplyWatermarkResponse;
use Muhimbi\PDFConverterServices\ApplySecurityResponse;
use Muhimbi\PDFConverterServices\ProcessChangesResponse;
use Muhimbi\PDFConverterServices\ProcessBatchResponse;
use Muhimbi\PDFConverterServices\GetConfigurationResponse;
use Muhimbi\PDFConverterServices\GetDiagnosticsResponse;
use Muhimbi\PDFConverterServices\GetStatusResponse;

class DocumentConverterService extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ConverterSpecificSettings' => 'ConverterSpecificSettings',
    'ConverterSpecificSettings_WordProcessing' => 'ConverterSpecificSettings_WordProcessing',
    'ConverterSpecificSettings_Presentations' => 'ConverterSpecificSettings_Presentations',
    'ConverterSpecificSettings_Image' => 'ConverterSpecificSettings_Image',
    'ConverterSpecificSettings_InfoPath' => 'ConverterSpecificSettings_InfoPath',
    'InfoPathView' => 'InfoPathView',
    'ConverterSpecificSettings_Cad' => 'ConverterSpecificSettings_Cad',
    'CadConversionElement' => 'CadConversionElement',
    'ConverterSpecificSettings_HTML' => 'ConverterSpecificSettings_HTML',
    'ConverterSpecificSettings_MSG' => 'ConverterSpecificSettings_MSG',
    'ConverterSpecificSettings_CommandLineConverter' => 'ConverterSpecificSettings_CommandLineConverter',
    'ConverterSpecificSettings_TIFF' => 'ConverterSpecificSettings_TIFF',
    'BookmarkMapping' => 'BookmarkMapping',
    'OCREngineSpecificSettings' => 'OCREngineSpecificSettings',
    'OCREngineSpecificSettings_PrimeOCR' => 'OCREngineSpecificSettings_PrimeOCR',
    'SystemSettings' => 'SystemSettings',
    'TaskMonitorSettings' => 'TaskMonitorSettings',
    'ConverterSpecificSettings_Spreadsheets' => 'ConverterSpecificSettings_Spreadsheets',
    'SubscriptionSettings' => 'SubscriptionSettings',
    'Watermark' => 'Watermark',
    'Container' => 'Container',
    'Element' => 'Element',
    'Defaults' => 'Defaults',
    'Text' => 'Text',
    'Pdf' => 'Pdf',
    'Rtf' => 'Rtf',
    'Image' => 'Image',
    'Rectangle' => 'Rectangle',
    'Ellipse' => 'Ellipse',
    'Line' => 'Line',
    'QRCode' => 'QRCode',
    'LinearBarcode' => 'LinearBarcode',
    'OutputFormatSpecificSettings' => 'OutputFormatSpecificSettings',
    'OutputFormatSpecificSettings_PDF' => 'OutputFormatSpecificSettings_PDF',
    'PDFViewerPreferences' => 'PDFViewerPreferences',
    'TOCSettings' => 'TOCSettings',
    'NameValuePair' => 'NameValuePair',
    'EnumsProxy' => 'EnumsProxy',
    'OCRSettings' => 'OCRSettings',
    'OCRRegion' => 'OCRRegion',
    'OCRResult' => 'OCRResult',
    'RegionText' => 'RegionText',
    'OperationTypeConfiguration' => 'OperationTypeConfiguration',
    'StatusRequest' => 'StatusRequest',
    'StatusRequestItem' => 'StatusRequestItem',
    'Status' => 'Status',
    'StatusResultItem' => 'StatusResultItem',
    'OpenOptions' => 'OpenOptions',
    'ConversionSettings' => 'ConversionSettings',
    'BookmarkOptions_WordProcessing' => 'BookmarkOptions_WordProcessing',
    'BookmarkOptions' => 'BookmarkOptions',
    'WebServiceFaultException' => 'WebServiceFaultException',
    'ProcessingOptions' => 'ProcessingOptions',
    'SourceFile' => 'SourceFile',
    'FileMergeSettings' => 'FileMergeSettings',
    'MergeSettings' => 'MergeSettings',
    'FileSplitOptions' => 'FileSplitOptions',
    'BatchResults' => 'BatchResults',
    'BatchResult' => 'BatchResult',
    'Configuration' => 'Configuration',
    'ConverterConfiguration' => 'ConverterConfiguration',
    'DiagnosticRequestItem' => 'DiagnosticRequestItem',
    'Diagnostics' => 'Diagnostics',
    'DiagnosticResultItem' => 'DiagnosticResultItem',
    'Convert' => 'Convert',
    'ConvertResponse' => 'ConvertResponse',
    'ApplyWatermark' => 'ApplyWatermark',
    'ApplyWatermarkResponse' => 'ApplyWatermarkResponse',
    'ApplySecurity' => 'ApplySecurity',
    'ApplySecurityResponse' => 'ApplySecurityResponse',
    'ProcessChanges' => 'ProcessChanges',
    'ProcessChangesResponse' => 'ProcessChangesResponse',
    'ProcessBatch' => 'ProcessBatch',
    'ProcessBatchResponse' => 'ProcessBatchResponse',
    'GetConfiguration' => 'GetConfiguration',
    'GetConfigurationResponse' => 'GetConfigurationResponse',
    'GetDiagnostics' => 'GetDiagnostics',
    'GetDiagnosticsResponse' => 'GetDiagnosticsResponse',
    'GetStatus' => 'GetStatus',
    'GetStatusResponse' => 'GetStatusResponse',
    'ConverterSpecificSettings_PDF' => 'ConverterSpecificSettings_PDF');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'http://localhost:41734/Muhimbi.DocumentConverter.WebService/?wsdl')
  {
    foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param Convert $parameters
   * @access public
   * @return ConvertResponse
   */
  public function Convert(Convert $parameters)
  {
    return $this->__soapCall('Convert', array($parameters));
  }

  /**
   * 
   * @param ApplyWatermark $parameters
   * @access public
   * @return ApplyWatermarkResponse
   */
  public function ApplyWatermark(ApplyWatermark $parameters)
  {
    return $this->__soapCall('ApplyWatermark', array($parameters));
  }

  /**
   * 
   * @param ApplySecurity $parameters
   * @access public
   * @return ApplySecurityResponse
   */
  public function ApplySecurity(ApplySecurity $parameters)
  {
    return $this->__soapCall('ApplySecurity', array($parameters));
  }

  /**
   * 
   * @param ProcessChanges $parameters
   * @access public
   * @return ProcessChangesResponse
   */
  public function ProcessChanges(ProcessChanges $parameters)
  {
    return $this->__soapCall('ProcessChanges', array($parameters));
  }

  /**
   * 
   * @param ProcessBatch $parameters
   * @access public
   * @return ProcessBatchResponse
   */
  public function ProcessBatch(ProcessBatch $parameters)
  {
    return $this->__soapCall('ProcessBatch', array($parameters));
  }

  /**
   * 
   * @param GetConfiguration $parameters
   * @access public
   * @return GetConfigurationResponse
   */
  public function GetConfiguration(GetConfiguration $parameters)
  {
    return $this->__soapCall('GetConfiguration', array($parameters));
  }

  /**
   * 
   * @param GetDiagnostics $parameters
   * @access public
   * @return GetDiagnosticsResponse
   */
  public function GetDiagnostics(GetDiagnostics $parameters)
  {
    return $this->__soapCall('GetDiagnostics', array($parameters));
  }

  /**
   * 
   * @param GetStatus $parameters
   * @access public
   * @return GetStatusResponse
   */
  public function GetStatus(GetStatus $parameters)
  {
    return $this->__soapCall('GetStatus', array($parameters));
  }

}
