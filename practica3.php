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
  }

  final function youCannnotOverridedMe(){}

  public static function myStaticMethod(){
    print 'I am static';
  }
}

echo MyClass::MY_CONST;
