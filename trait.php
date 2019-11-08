<?php

trait Hello{
    public function sayHello()
    {
        echo "Hello";
    }
}

trait World{
    public function sayWorld()
    {
        echo "World";
    }
}

class HelloWorld{
    use Hello;
    use World;
    public function sayHi()
    {
        echo 'Hi';
    }
}

$object = new HelloWorld();
echo $object->sayHello() . PHP_EOL;
echo $object->sayWorld() . PHP_EOL;
echo $object->sayHi() . PHP_EOL;

?>
