<?php 











// object

/*
interface 

membuat sebuah method pada sebuah clas yang nantinya akan diisi oleh class dibawahnya/childnya

syarat pembuatannya : 
1. class harus bentuk interface bukan abstract 

cara nulis :

// pada class
interface nama_interface {

    public nama_method();

}

// pada class bawahannya / child
class nama_child implements nama_interface{
        public nama_method(){
            return "Hello world";
        }


}

pada object 

$obj1 = new nama_child();

echo nama_child->nama_method();

*/