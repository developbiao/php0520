<?php
$string = <<<XML
<?xml version='1.0'?>
<document>
	<title>Fortry What?</title>
	<from>Joe</from>
	<to>Jane</to>
	<body>
		I know that's answer --but what's the question?
	</body>
</document>
XML;
$xml = simplexml_load_string($string);
echo "<pre>";
print_r($xml);
echo "</pre>";
echo "Message:".$xml->body;
?>