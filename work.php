<?php
class Work {
  private $name;
  private $skill;
  private $image;
  private $link;

  
  public function __construct($name, $skill, $image, $link) {
    $this->name = $name;
    $this->skill = $skill;
    $this->image = $image;
    $this->link = $link;
  }

  public function getName(){
    return $this->name;
  }

  public function getSkill(){
    return $this->skill;
  }
  
  public function getImage(){
    return $this->image;
  }

  
  public function getLink(){
    return $this->link;
  }
  
}
?>