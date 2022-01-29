<?php

namespace Muhimbi\PDFConverterServices;

class WebServiceExceptionType
{
  const __default = 'Unknown';
  const Unknown = 'Unknown';
  const FileFormatNotSupported = 'FileFormatNotSupported';
  const CorruptDocument = 'CorruptDocument';
  const ErrorOpeningFile = 'ErrorOpeningFile';
  const ConversionTimeOut = 'ConversionTimeOut';
  const ConverterNotResponding = 'ConverterNotResponding';
  const ConverterNotInstalled = 'ConverterNotInstalled';
  const InternalError = 'InternalError';
  const OutputFormatNotSupported = 'OutputFormatNotSupported';
  const ConfigurationError = 'ConfigurationError';
  const TrialExpired = 'TrialExpired';
  const ExternalDependencyError = 'ExternalDependencyError';
  const AttachmentNotSupported = 'AttachmentNotSupported';
  const DocumentLocked = 'DocumentLocked';


}
