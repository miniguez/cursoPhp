<?php
//POO
class MyClass
{
	const MY_CONST = 'value'; //esta es una constante
  static $staticVar = 'static';
  // se pueden ver donde sea
  public static $publicStaticVar = 'publicStatic';
  //solo se pueden ver en la clase
  private static $privateStaticVar = 'privateStatic';
  //se pueden ver en la clase y derivadas
  protected static $protectedStaticVar = 'protectedStaticVar';

  public $property = 'public';
  public $instanceProp;
  protected $prot = 'protected';
  private $priv = 'private';

  public function __construct($instanceProp) {
    $this->instanceProp = $instanceProp;
  }

  public function myMethod() {
    print 'MyClass';
    echo "\n";
  }

  final function youCannnotOverridedMe(){}

  public static function myStaticMethod(){
    print 'I am static';
    echo "\n";
  }
}

echo MyClass::MY_CONST; //imprime value
echo "\n";
echo MyClass::$staticVar; // imprime static
echo "\n";
MyClass::myStaticMethod();//imprime I am static

$my_class = new MyClass('esta es una instancia');
echo $my_class->property;
echo "\n";
echo $my_class->instanceProp;
echo "\n";
$my_class->myMethod();
//$my_class->privateStaticVar; //no se puede acceder

class MyOtherClass extends MyClass
{
   function printProtectedProperty()
   {
      echo $this->prot;
   }
   // sobre escribir metodos
   function myMethod()
   {
     parent::myMethod();
     print '> MyOtherClass';
     echo "\n";
   }
}

$otherClass = new MyOtherClass("Test");
$otherClass->myMethod();

class MyMapClass
{
  private $property;

  public function __get($key)
  {
    return $this->$key;
  }
  public function __set($key, $value)
  {
    $this->$key = $value;
  }
}
$x = new MyMapClass();
$x->__set('property',5);
echo $x->__get('property');
echo "\n";

//Interfaces
interface InterfaceOne
{
    public function doSomething();
}
interface InterfaceTwo
{
     public function doSomethingElse();
}
interface InterfaceThree extends InterfaceTwo
{
   public function doAnotherContract();
}

class SomeOtherClass implements InterfaceOne,InterfaceTwo
{
  public function doSomething()
  {
    echo 'doSomething';
    echo "\n";
  }
  public function doSomethingElse()
  {
    echo 'doSomethingElse';
    echo "\n";
  }

}
$y = new SomeOtherClass();
$y-> doSomething();
