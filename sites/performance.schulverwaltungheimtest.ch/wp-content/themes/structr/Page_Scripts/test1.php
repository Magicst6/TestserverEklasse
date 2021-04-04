<?php
  require_once 'vendor/autoload.php';                      // Comment this line if you use Composer to install the package
  use \Convertio\Convertio;

  $API = new Convertio("514b7f0281ff48f2b095c601125882b3");           // You can obtain API Key here: https://convertio.co/api/
  $API->start('./Zeugnis.docx', 'pdf')->wait()->download('./output.pdf')->delete();