<?php 

namespace ProgrammerZamanNow\Belajar;

class Customer{
    function __construct(private string $name = "Guest"){

    }
    function sayHello(string $name){
        return "Hello $name, my name is $this->name";
    }
}