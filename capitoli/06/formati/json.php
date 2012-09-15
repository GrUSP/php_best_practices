<?php

/** json encode obj */
$author = new StdClass();
$author->name="Jack London";

$author1 = new StdClass();
$author1->name="Hernest Hemingway";

$obj = new StdClass();
$obj->nome = 'un bel libro';
$obj->author = array($author, $author1);
$obj->description = 'a wonderful description';

echo json_encode($obj);

/** json encode array */
echo json_encode(array(1, 2, 3, 4));

/** decoding di un json valido */
$data = json_decode('[4, 5, 6, 7]');
print_r($data);

/** recupero errore dopo il decoding di un json invalido */
$data = json_decode('[4, 5, 6, ,7]');
echo json_last_error();

/** nb: PHP >= 5.4 */
class Book implements JsonSerializable {
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function jsonSerialize() {
        return array('name' => $this->name,
        			 'description' => $this->description);
    }
}