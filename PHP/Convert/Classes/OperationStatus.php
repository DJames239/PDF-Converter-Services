<?php

namespace Muhimbi\PDFConverterServices;

class OperationStatus
{
  const __default = 'Allowed';
  const Allowed = 'Allowed';
  const Denied_ExceededMaxConcurrentCalls = 'Denied_ExceededMaxConcurrentCalls';
  const Denied_ExceededConverterMaxConcurrentCalls = 'Denied_ExceededConverterMaxConcurrentCalls';
  const Denied_ExceededOperationMaxConcurrentCalls = 'Denied_ExceededOperationMaxConcurrentCalls';
  const Denied_UnsupportedOperationType = 'Denied_UnsupportedOperationType';
  const Denied_UnsupportedFileType = 'Denied_UnsupportedFileType';
  const Denied_UnsupportedConverter = 'Denied_UnsupportedConverter';
  const Denied_OperationDisabled = 'Denied_OperationDisabled';


}
