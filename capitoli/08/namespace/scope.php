<?php
class A {
  private function foo() {
    echo "success!\n";
  }
  public function test() {
    $this->foo();
    static::foo();
  }
}

class B extends A {
  /* Il metodo foo non è ridefinito nella classe B, rimane quindi nello scope della classe A
     e se viene invocato da B la chimamata ha comunque successo */
}

class C extends A {
  private function foo() {
    /* Il metodo foo() è ridefinito nella classe C, in questo caso il suo scope è appunto quello della classe C, 
       essendo foo() un metodo privato la parola chiave static:: non può accedervi. */
    }
}

$b = new B();
$b->test();
$c = new C();
$c->test();   //fails

