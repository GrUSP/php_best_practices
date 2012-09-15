<?php

$library = simplexml_load_file('library.xml');

/** getTags */
echo $library->book[0]['id'];
echo $library->book[0]->description;
echo $library->book[0]->author[1]['name'];

/** cast a stringa dato che description è un oggetto */
echo trim((string) $library->book[0]->description);

/** xpath */
$book = $library->xpath('//book[@title="another book"]');
echo $library->book[0]['id'];
echo $library->book[0]->description;
echo '---';
$authors = $library->xpath('//book/author');

foreach ($authors as $author)
{
	echo $author['name'], "\n";
}

/** appendChild */
$new_book = $library->addChild('book');
$new_book->addAttribute('id', '6789');
$new_book = $library->addChild('description', 'nuovo libro');

echo $library->asXml();

