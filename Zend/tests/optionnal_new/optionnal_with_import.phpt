--TEST--
Optionnal new with import
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

Foo('bar');

}
?>
--EXPECT--
bar in construct
