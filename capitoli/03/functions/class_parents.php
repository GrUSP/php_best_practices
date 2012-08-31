<?php

class foo{}
class bar extends foo{}

var_dump(class_parents('bar'));

$bar = new bar();

var_dump(class_parents($bar));
