--TEST--
function collision can be adressed using use ns alias on class
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
    
use FooBar\Foo as FooAlias;

function Foo(string $name) {
    echo "$name in function";
}

Foo('bar');

}
?>
--EXPECT--
bar in function
