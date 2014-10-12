#!"D:\Program Files (x86)\PHP\v5.6\php.exe"
<?php
echo "Update Job Started \r\n";
flush();

$doc = new DOMDocument();
$doc->loadHTMLFile("..\..\..\helloworld.html");
$element = $doc->createElement('test', 'This is the root element!');

// We insert the new element as root (child of the document)
$doc->appendChild($element);
echo $doc->saveHTMLFile("..\..\..\helloworld.html");

echo $doc;
flush();
?>

