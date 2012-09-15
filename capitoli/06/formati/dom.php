<?php 

$doc = new DOMDocument();
$doc->formatOutput = true;
$doc->load('library.xml');

/** getElementsByTagName */
$books = $doc->getElementsByTagName('description');

echo $books->item(0)->nodeValue;
echo "\n";
echo $books->item(1)->nodeValue;


/** xpath */
$xpath = new DomXPath($doc);
$book = $xpath->query('//book[@title="another book"]');

echo $book->item(0)->getAttribute('title');

$authors = $xpath->query('//book/author');

foreach ($authors as $author)
{
	echo $author->getAttribute('name'), "\n";
}


/** createDocumentFragment */
$new_book = $doc->createDocumentFragment();
$new_book->appendXML('<book id="6789"><description>nuovo libro</description></book>');

$doc->documentElement->appendChild($new_book);
echo $doc->saveXML();


/** appendChild */
$new_book    = $doc->createElement('book');

$new_book_id = $doc->createAttribute('id');
$new_book_id->value = '6789';
$new_book->appendChild($new_book_id);

$new_book_desc = $doc->createElement('description', 'nuovo libro');
$new_book->appendChild($new_book_desc);

$doc->appendChild($new_book);

echo $doc->saveXML();
