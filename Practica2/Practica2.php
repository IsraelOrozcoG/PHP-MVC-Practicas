<?php

class Person {
    protected $nombre = "Daniel";
    protected $appat = "Nielsen";
    protected $age = "28";

    /* */
    public function owner() {
        $a = $this->nombre;
        return $a;
    }

}
//Apply extends to have the propierties of the class person
class Pet extends Person{
    #Method owner
    /* The visibility makes it unaccesible
    private function owner(){
        $a = "Hi there!";
        return $a;
    }
    */
    public function owner() {
        $a = $this->nombre;
        return $a;
    }
}