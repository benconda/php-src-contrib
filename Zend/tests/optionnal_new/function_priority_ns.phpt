--TEST--
Optionnal new work if function with same name exist
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
    
use FooBar\Foo;

function Foo(string $name) {
    echo "$name in function";
}

Foo('bar');

}
?>
--EXPECT--
bar in construct
