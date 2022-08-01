<?php
class Stranka {
   public $id;
   public $titulek;
   public $menu;

   function __construct($id,$titulek,$menu){
    $this->id=$id;
    $this->titulek=$titulek;
    $this->menu=$menu;
}

}

$seznamStranek =[
"uvod" => new Stranka ("uvod","Dancestudio","Domů"),
"kurzy"=>new Stranka ("kurzy","Kurzy - Dance studio","Kurzy a lekce"),
"galerie"=>new Stranka ("galerie","Galerie - Dance studio","Galerie"),
"prihlaseni"=>new Stranka ("prihlaseni","Přihláška - Dance studio","Přihláška"),
"kontakt"=>new Stranka ("kontakt","Kontakt - Dance studio","Kontakt"),
"404"=>new Stranka ("404","Stránka -neexistuje",""),

];