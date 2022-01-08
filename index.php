<?php

include ('Doc2Txt.php');
$docObj = new Doc2Txt('test.docx');
$txt = $docObj->convertToText();
echo $txt;
