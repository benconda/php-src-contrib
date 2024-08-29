--TEST--
Optionnal new work if function with same name exist
--FILE--
<?php
namespace FooBar {

  class Counter {

        public function __construct(string $name) {
            echo "$name in construct";
        }

  }

}

namespace {
    
    use FooBar\Counter as Count;

    count([1, 2, 3]);

}
?>
--EXPECT--
bar in function
