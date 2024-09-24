<?php
declare(strict_types=1);
include './i.php';
include './c.php';
include './b.php';
include './a.php';

class demo {



// truong hop A:

public function typeAReturnA():A
{
  echo __FUNCTION__ . "</br>";
     return new A();
}  

public function typeBReturnA():B
{
  echo __FUNCTION__ . "</br>";
     return new A();
} 

public function typeCReturnA():C
{
  echo __FUNCTION__ . "</br>";
     return new A();
} 

public function typeIReturnA():I
{
  echo __FUNCTION__ . "</br>";
     return new A();
} 

public function typeNullReturnA():Null
{
  echo __FUNCTION__ . "</br>";
     return new A();
} 
// truong hop B
public function typeAReturnB():A
{
  echo __FUNCTION__ . "</br>";
     return new B();
} 

public function typeBReturnB():B
{
  echo __FUNCTION__ . "</br>";
     return new B();
} 

public function typeCReturnB():C
{
  echo __FUNCTION__ . "</br>";
     return new B();
} 

public function typeIReturnB():I
{
  echo __FUNCTION__ . "</br>";
     return new B();
} 

public function typeNullReturnB():null
{
  echo __FUNCTION__ . "</br>";
     return new B();
} 
// truong hop C
public function typeAReturnC():A
{
  echo __FUNCTION__ . "</br>";
     return new C();
} 

public function typeBReturnC():B
{
  echo __FUNCTION__ . "</br>";
     return new C();
} 

public function typeCReturnC():C
{
  echo __FUNCTION__ . "</br>";
     return new C();
} 

public function typeIReturnC():I
{
  echo __FUNCTION__ . "</br>";
     return new C();
} 


public function typeNullReturnC():null
{
  echo __FUNCTION__ . "</br>";
     return new C();
} 
// truong hopw I 

public function typeAReturnI():A
{
  echo __FUNCTION__ . "</br>";
     return new I();
} 

public function typeBReturnI():B
{
  echo __FUNCTION__ . "</br>";
     return new I();
} 

public function typeCReturnI():C
{
  echo __FUNCTION__ . "</br>";
     return new I();
} 

public function typeIReturnI():I
{
  echo __FUNCTION__ . "</br>";
     return new I();
} 


public function typeNullReturnI():Null
{
  echo __FUNCTION__ . "</br>";
     return new I();
} 

// truong hyop null 

public function typeAReturnNull():A
{
  echo __FUNCTION__ . "</br>";
     return  null;
} 

public function typeBReturnNull():B
{
  echo __FUNCTION__ . "</br>";
     return   null;
} 

public function typeCReturnNull():C
{
  echo __FUNCTION__ . "</br>";
     return  null;
} 

public function typeIReturNull():I
{
  echo __FUNCTION__ . "<br>";
     return   null;
} 


public function typeNullReturnNull():Null
{
  echo __FUNCTION__ . "<br>";
     return  null;
} 

} 




$demo = new demo();
//a
$demo ->typeAReturnA();
$demo ->typeBReturnA();
$demo ->typeCReturnA();
$demo ->typeIReturnA();
$demo ->typeNullReturnA();

// // b
$demo ->typeAReturnB();
$demo ->typeBReturnB();
$demo ->typeCReturnB();
$demo ->typeIReturnB();
$demo ->typeNullReturnB();

// //c 
$demo ->typeAReturnC();
$demo ->typeBReturnC();
$demo ->typeCReturnC();
$demo ->typeIReturnC();
$demo ->typeNullReturnC();

// // I
$demo ->typeAReturnI();
$demo ->typeBReturnI();
$demo ->typeCReturnI();
$demo ->typeIReturnI();
$demo ->typeNullReturnI();

// //null
$demo ->typeAReturnNull();
$demo ->typeBReturnNull();
$demo ->typeCReturnNull();
$demo ->typeCReturnNull();
$demo ->typeNullReturnNull();

?>