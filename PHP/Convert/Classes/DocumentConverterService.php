<?php

namespace Muhimbi\PDFConverterServices;

class DocumentConverterService extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ConverterSpecificSettings' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings',
    'ConverterSpecificSettings_WordProcessing' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_WordProcessing',
    'ConverterSpecificSettings_Presentations' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_Presentations',
    'ConverterSpecificSettings_Image' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_Image',
    'ConverterSpecificSettings_InfoPath' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_InfoPath',
    'InfoPathView' => 'Muhimbi\PDFConverterServices\InfoPathView',
    'ConverterSpecificSettings_Cad' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_Cad',
    'CadConversionElement' => 'Muhimbi\PDFConverterServices\CadConversionElement',
    'ConverterSpecificSettings_HTML' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_HTML',
    'ConverterSpecificSettings_MSG' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_MSG',
    'ConverterSpecificSettings_CommandLineConverter' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_CommandLineConverter',
    'ConverterSpecificSettings_TIFF' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_TIFF',
    'BookmarkMapping' => 'Muhimbi\PDFConverterServices\BookmarkMapping',
    'OCREngineSpecificSettings' => 'Muhimbi\PDFConverterServices\OCREngineSpecificSettings',
    'OCREngineSpecificSettings_PrimeOCR' => 'Muhimbi\PDFConverterServices\OCREngineSpecificSettings_PrimeOCR',
    'SystemSettings' => 'Muhimbi\PDFConverterServices\SystemSettings',
    'TaskMonitorSettings' => 'Muhimbi\PDFConverterServices\TaskMonitorSettings',
    'ConverterSpecificSettings_Spreadsheets' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_Spreadsheets',
    'SubscriptionSettings' => 'Muhimbi\PDFConverterServices\SubscriptionSettings',
    'Watermark' => 'Muhimbi\PDFConverterServices\Watermark',
    'Container' => 'Muhimbi\PDFConverterServices\Container',
    'Element' => 'Muhimbi\PDFConverterServices\Element',
    'Defaults' => 'Muhimbi\PDFConverterServices\Defaults',
    'Text' => 'Muhimbi\PDFConverterServices\Text',
    'Pdf' => 'Muhimbi\PDFConverterServices\Pdf',
    'Rtf' => 'Muhimbi\PDFConverterServices\Rtf',
    'Image' => 'Muhimbi\PDFConverterServices\Image',
    'Rectangle' => 'Muhimbi\PDFConverterServices\Rectangle',
    'Ellipse' => 'Muhimbi\PDFConverterServices\Ellipse',
    'Line' => 'Muhimbi\PDFConverterServices\Line',
    'QRCode' => 'Muhimbi\PDFConverterServices\QRCode',
    'LinearBarcode' => 'Muhimbi\PDFConverterServices\LinearBarcode',
    'OutputFormatSpecificSettings' => 'Muhimbi\PDFConverterServices\OutputFormatSpecificSettings',
    'OutputFormatSpecificSettings_PDF' => 'Muhimbi\PDFConverterServices\OutputFormatSpecificSettings_PDF',
    'PDFViewerPreferences' => 'Muhimbi\PDFConverterServices\PDFViewerPreferences',
    'TOCSettings' => 'Muhimbi\PDFConverterServices\TOCSettings',
    'NameValuePair' => 'Muhimbi\PDFConverterServices\NameValuePair',
    'EnumsProxy' => 'Muhimbi\PDFConverterServices\EnumsProxy',
    'OCRSettings' => 'Muhimbi\PDFConverterServices\OCRSettings',
    'OCRRegion' => 'Muhimbi\PDFConverterServices\OCRRegion',
    'OCRResult' => 'Muhimbi\PDFConverterServices\OCRResult',
    'RegionText' => 'Muhimbi\PDFConverterServices\RegionText',
    'OperationTypeConfiguration' => 'Muhimbi\PDFConverterServices\OperationTypeConfiguration',
    'StatusRequest' => 'Muhimbi\PDFConverterServices\StatusRequest',
    'StatusRequestItem' => 'Muhimbi\PDFConverterServices\StatusRequestItem',
    'Status' => 'Muhimbi\PDFConverterServices\Status',
    'StatusResultItem' => 'Muhimbi\PDFConverterServices\StatusResultItem',
    'OpenOptions' => 'Muhimbi\PDFConverterServices\OpenOptions',
    'ConversionSettings' => 'Muhimbi\PDFConverterServices\ConversionSettings',
    'BookmarkOptions_WordProcessing' => 'Muhimbi\PDFConverterServices\BookmarkOptions_WordProcessing',
    'BookmarkOptions' => 'Muhimbi\PDFConverterServices\BookmarkOptions',
    'WebServiceFaultException' => 'Muhimbi\PDFConverterServices\WebServiceFaultException',
    'ProcessingOptions' => 'Muhimbi\PDFConverterServices\ProcessingOptions',
    'SourceFile' => 'Muhimbi\PDFConverterServices\SourceFile',
    'FileMergeSettings' => 'Muhimbi\PDFConverterServices\FileMergeSettings',
    'MergeSettings' => 'Muhimbi\PDFConverterServices\MergeSettings',
    'FileSplitOptions' => 'Muhimbi\PDFConverterServices\FileSplitOptions',
    'BatchResults' => 'Muhimbi\PDFConverterServices\BatchResults',
    'BatchResult' => 'Muhimbi\PDFConverterServices\BatchResult',
    'Configuration' => 'Muhimbi\PDFConverterServices\Configuration',
    'ConverterConfiguration' => 'Muhimbi\PDFConverterServices\ConverterConfiguration',
    'DiagnosticRequestItem' => 'Muhimbi\PDFConverterServices\DiagnosticRequestItem',
    'Diagnostics' => 'Muhimbi\PDFConverterServices\Diagnostics',
    'DiagnosticResultItem' => 'Muhimbi\PDFConverterServices\DiagnosticResultItem',
    'Convert' => 'Muhimbi\PDFConverterServices\Convert',
    'ConvertResponse' => 'Muhimbi\PDFConverterServices\ConvertResponse',
    'ApplyWatermark' => 'Muhimbi\PDFConverterServices\ApplyWatermark',
    'ApplyWatermarkResponse' => 'Muhimbi\PDFConverterServices\ApplyWatermarkResponse',
    'ApplySecurity' => 'Muhimbi\PDFConverterServices\ApplySecurity',
    'ApplySecurityResponse' => 'Muhimbi\PDFConverterServices\ApplySecurityResponse',
    'ProcessChanges' => 'Muhimbi\PDFConverterServices\ProcessChanges',
    'ProcessChangesResponse' => 'Muhimbi\PDFConverterServices\ProcessChangesResponse',
    'ProcessBatch' => 'Muhimbi\PDFConverterServices\ProcessBatch',
    'ProcessBatchResponse' => 'Muhimbi\PDFConverterServices\ProcessBatchResponse',
    'GetConfiguration' => 'Muhimbi\PDFConverterServices\GetConfiguration',
    'GetConfigurationResponse' => 'Muhimbi\PDFConverterServices\GetConfigurationResponse',
    'GetDiagnostics' => 'Muhimbi\PDFConverterServices\GetDiagnostics',
    'GetDiagnosticsResponse' => 'Muhimbi\PDFConverterServices\GetDiagnosticsResponse',
    'GetStatus' => 'Muhimbi\PDFConverterServices\GetStatus',
    'GetStatusResponse' => 'Muhimbi\PDFConverterServices\GetStatusResponse',
    'ConverterSpecificSettings_PDF' => 'Muhimbi\PDFConverterServices\ConverterSpecificSettings_PDF');

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
