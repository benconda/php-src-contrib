--TEST--
Optionnal new fail without import
--FILE--
<?php
namespace FooBar {

class Foo {
      
      public function __construct(string $name) {
          echo "$name in construct";
      }
  }
}

namespace {

Foobar\Foo('bar');

}
?>
--EXPECTF--
Fatal error: Uncaught Error: Call to undefined function %s() in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
