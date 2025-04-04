<?php
  class BenefitHerb
  {
    public $id_BenefitHerb;
    public $id_Herb;
    public $herb_benefit;
    public $herb_description;

    public function __construct($id_BenefitHerb, $id_Herb, $herb_benefit, $herb_description)
    {
      $this->id_BenefitHerb = $id_BenefitHerb;
      $this->id_Herb = $id_Herb;
      $this->herb_benefit = $herb_benefit;
      $this->herb_description = $herb_description;
    }
    
    //setters
    public  function setId_BenefitHerb($id_BenefitHerb)
    {
      $this->id_BenefitHerb = $id_BenefitHerb;
    }

    public function setId_Herb($id_Herb){
      $this->id_Herb = $id_Herb;
    }

    public function setHerbBenefit($herb_benefit){
      $this->herb_benefit = $herb_benefit;
    }

    public function setHerbDescription($herb_description){
      $this->herb_description = $herb_description;
    }

    //getters
    public  function getId_BenefitHerb()
    {
      return $this->id_BenefitHerb;
    }

    public function getId_Herb(){
      return $this->id_Herb;
    }

    public function getHerbBenefit(){
       return $this->herb_benefit;
    }

    public function getHerbDescription(){
      return $this->herb_description;
    }
  }
?>