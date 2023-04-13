<?php
$url = "https://opendata.cwb.gov.tw/fileapi/v1/opendataapi/F-B0053-035?Authorization=CWB-CDD469FA-E313-4813-9F19-D8C73607E43E&downloadType=WEB&format=JSON";
echo file_get_contents($url);
?>