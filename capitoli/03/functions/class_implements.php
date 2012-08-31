<?php

interface foo{}
interface bar{}

class test implements foo, bar{}

var_dump(class_implements('test'));

$test = new Test();

var_dump(class_implements($test));
