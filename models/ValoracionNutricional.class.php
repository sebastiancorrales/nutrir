<?php
include_once 'core\BaseModel.php';

class ValoracionNutricional extends BaseModel
{
   private $fechaValoracion;
   private $peso;
   private $talla;
   private $descripcionEstadoNutricional;

    public function __construct()
    {
        parent::__construct();
    }

   /**
    * Get the value of fechaValoracion
    */ 
   public function getFechaValoracion()
   {
      return $this->fechaValoracion;
   }

   /**
    * Set the value of fechaValoracion
    *
    * @return  self
    */ 
   public function setFechaValoracion($fechaValoracion)
   {
      $this->fechaValoracion = $fechaValoracion;

      return $this;
   }

   /**
    * Get the value of peso
    */ 
   public function getPeso()
   {
      return $this->peso;
   }

   /**
    * Set the value of peso
    *
    * @return  self
    */ 
   public function setPeso($peso)
   {
      $this->peso = $peso;

      return $this;
   }

   /**
    * Get the value of talla
    */ 
   public function getTalla()
   {
      return $this->talla;
   }

   /**
    * Set the value of talla
    *
    * @return  self
    */ 
   public function setTalla($talla)
   {
      $this->talla = $talla;

      return $this;
   }

   /**
    * Get the value of descripcionEstadoNutricional
    */ 
   public function getDescripcionEstadoNutricional()
   {
      return $this->descripcionEstadoNutricional;
   }

   /**
    * Set the value of descripcionEstadoNutricional
    *
    * @return  self
    */ 
   public function setDescripcionEstadoNutricional($descripcionEstadoNutricional)
   {
      $this->descripcionEstadoNutricional = $descripcionEstadoNutricional;

      return $this;
   }
}
