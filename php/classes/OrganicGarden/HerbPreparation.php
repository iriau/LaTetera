<?php
  class HerbPreparation
  {
    public $id_HerbPreparation;
    public $id_Herb;
    public $preparation_Herb;

    public function __construct($id_HerbPreparation, $id_Herb, $preparation_Herb)
    {
      $this->id_HerbPreparation = $id_HerbPreparation;
      $this->id_Herb = $id_Herb;
      $this->preparation_Herb = $preparation_Herb;      
    }

    //setters
    public function set_Id_HerbPreparation($id_HerbPreparation)
    {
        $this->id_HerbPreparation = $id_HerbPreparation;
    }

    public function set_Id_Herb($id_Herb)
    {
      $this->id_Herb = $id_Herb;
    }

    public function set_Preparation_Herb($preparation_Herb)
    {
      $this->preparation_Herb = $preparation_Herb;
    }

    //getters
    public function get_Id_HerbPreparation()
    {
      return $this->id_HerbPreparation;
    }

    public function get_Id_Herb()
    {
      return $this->id_Herb;
    }

    public function get_Preparation_Herb()
    {
      return $this->preparation_Herb;
    }
  }
?>