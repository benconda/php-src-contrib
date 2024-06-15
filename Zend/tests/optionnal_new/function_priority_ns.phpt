--TEST--
Optionnal new function is prioritized against class with namespace
--FILE--
<?php
namespace FooBar {

class Foo {
      
      public function __construct(string $name) {
          echo "$name in construct";
      }
      
      public function bar() {
          return "bar";
      }
  }
}

namespace {
    
use FooBar\Foo;

Foo('bar');

function Foo(string $name) {
    echo "$name in function";
}
}
?>
--EXPECT--
bar in function
