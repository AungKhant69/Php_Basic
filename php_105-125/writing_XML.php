<?php
// Create a new SimpleXMLElement
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><root></root>');

// Add data to the XML
$person1 = $xml->addChild('person');
$person1->addChild('name', 'John Doe');
$person1->addChild('age', 30);
$person1->addChild('city', 'New York');

$person2 = $xml->addChild('person');
$person2->addChild('name', 'Jane Smith');
$person2->addChild('age', 25);
$person2->addChild('city', 'Los Angeles');

// Format the XML for better readability (optional)
$dom = dom_import_simplexml($xml)->ownerDocument;
$dom->formatOutput = true;

// Save the XML to a file
$xml->asXML('example.xml');

echo 'XML file created successfully.';
?>
