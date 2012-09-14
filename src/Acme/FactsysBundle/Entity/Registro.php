<?php

namespace Acme\FactsysBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\FactsysBundle\Entity\Registro
 */
class Registro
{
    /**
     * @var integer $id
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string $rfc
     */
    private $rfc;

    /**
     * @var string $nombre_municipio
     */
    private $nombre_municipio;

    /**
     * @var string $direccion
     */
    private $direccion;

    /**
     * @var string $ciudad
     */
    private $ciudad;

    /**
     * @var string $estado
     */
    private $estado;

    /**
     * @var string $pais
     */
    private $pais;

    /**
     * @var string $telefono
     */
    private $telefono;

    /**
     * @var string $fax
     */
    private $fax;

    /**
     * @var string $contacto
     */
    private $contacto;

    /**
     * @var string $sha_key
     */
    private $sha_key;

    /**
     * @var boolean $estatuto
     */
    private $estatuto;

    /**
     * @var \DateTime $fecha_alta
     */
    private $fecha_alta;

    /**
     * @var \DateTime $fecha_ult_mvto
     */
    private $fecha_ult_mvto;

    /**
     * @var \DateTime $fecha_caduca
     */
    private $fecha_caduca;

    /**
     * @var string $notas
     */
    private $notas;

    /**
     * @var string $periodo_nombre
     */
    private $periodo_nombre;

    /**
     * @var string $periodo_tipo
     */
    private $periodo_tipo;

    /**
     * @var integer $periodo_unidades
     */
    private $periodo_unidades;

    /**
     * @var integer $periodo_actual
     */
    private $periodo_actual;

    /**
     * @var integer $periodos_en_ejercicio
     */
    private $periodos_en_ejercicio;

    /**
     * @var \DateTime $periodo_fecha_inicio
     */
    private $periodo_fecha_inicio;

    /**
     * @var \DateTime $periodo_fecha_final
     */
    private $periodo_fecha_final;

    /**
     * @var float $periodo_acumulado_actual
     */
    private $periodo_acumulado_actual;

    /**
     * @var float $periodo_acumulado_ejercicio
     */
    private $periodo_acumulado_ejercicio;

    /**
     * @var float $periodo_acumulado_total
     */
    private $periodo_acumulado_total;

    /**
     * @var string $ejercicio_nombre
     */
    private $ejercicio_nombre;

    /**
     * @var string $ejercicio_tipo
     */
    private $ejercicio_tipo;

    /**
     * @var integer $ejercicio_unidades
     */
    private $ejercicio_unidades;

    /**
     * @var integer $ejercicio_actual
     */
    private $ejercicio_actual;

    /**
     * @var integer $ejercicios_en_mandato
     */
    private $ejercicios_en_mandato;

    /**
     * @var \DateTime $ejercicio_fecha_inicio
     */
    private $ejercicio_fecha_inicio;

    /**
     * @var \DateTime $ejercicio_fecha_final
     */
    private $ejercicio_fecha_final;

    /**
     * @var float $ejercicio_acumulado_actual
     */
    private $ejercicio_acumulado_actual;

    /**
     * @var float $ejercicio_acumulado_ejercicio
     */
    private $ejercicio_acumulado_ejercicio;

    /**
     * @var float $ejercicio_acumulado_total
     */
    private $ejercicio_acumulado_total;

    /**
     * @var string $factura_actual
     */
    private $factura_actual;

    /**
     * @var string $documento_actual
     */
    private $documento_actual;

    /**
     * @var string $recibo_actual
     */
    private $recibo_actual;


    /**
     * Set rfc
     *
     * @param string $rfc
     * @return Registro
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;
    
        return $this;
    }

    /**
     * Get rfc
     *
     * @return string 
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set nombre_municipio
     *
     * @param string $nombreMunicipio
     * @return Registro
     */
    public function setNombreMunicipio($nombreMunicipio)
    {
        $this->nombre_municipio = $nombreMunicipio;
    
        return $this;
    }

    /**
     * Get nombre_municipio
     *
     * @return string 
     */
    public function getNombreMunicipio()
    {
        return $this->nombre_municipio;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Registro
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Registro
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Registro
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Registro
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Registro
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Registro
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return Registro
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    
        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set sha_key
     *
     * @param string $shaKey
     * @return Registro
     */
    public function setShaKey($shaKey)
    {
        $this->sha_key = $shaKey;
    
        return $this;
    }

    /**
     * Get sha_key
     *
     * @return string 
     */
    public function getShaKey()
    {
        return $this->sha_key;
    }

    /**
     * Set estatuto
     *
     * @param boolean $estatuto
     * @return Registro
     */
    public function setEstatuto($estatuto)
    {
        $this->estatuto = $estatuto;
    
        return $this;
    }

    /**
     * Get estatuto
     *
     * @return boolean 
     */
    public function getEstatuto()
    {
        return $this->estatuto;
    }

    /**
     * Set fecha_alta
     *
     * @param \DateTime $fechaAlta
     * @return Registro
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fecha_alta = $fechaAlta;
    
        return $this;
    }

    /**
     * Get fecha_alta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fecha_alta;
    }

    /**
     * Set fecha_ult_mvto
     *
     * @param \DateTime $fechaUltMvto
     * @return Registro
     */
    public function setFechaUltMvto($fechaUltMvto)
    {
        $this->fecha_ult_mvto = $fechaUltMvto;
    
        return $this;
    }

    /**
     * Get fecha_ult_mvto
     *
     * @return \DateTime 
     */
    public function getFechaUltMvto()
    {
        return $this->fecha_ult_mvto;
    }

    /**
     * Set fecha_caduca
     *
     * @param \DateTime $fechaCaduca
     * @return Registro
     */
    public function setFechaCaduca($fechaCaduca)
    {
        $this->fecha_caduca = $fechaCaduca;
    
        return $this;
    }

    /**
     * Get fecha_caduca
     *
     * @return \DateTime 
     */
    public function getFechaCaduca()
    {
        return $this->fecha_caduca;
    }

    /**
     * Set notas
     *
     * @param string $notas
     * @return Registro
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;
    
        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Set periodo_nombre
     *
     * @param string $periodoNombre
     * @return Registro
     */
    public function setPeriodoNombre($periodoNombre)
    {
        $this->periodo_nombre = $periodoNombre;
    
        return $this;
    }

    /**
     * Get periodo_nombre
     *
     * @return string 
     */
    public function getPeriodoNombre()
    {
        return $this->periodo_nombre;
    }

    /**
     * Set periodo_tipo
     *
     * @param string $periodoTipo
     * @return Registro
     */
    public function setPeriodoTipo($periodoTipo)
    {
        $this->periodo_tipo = $periodoTipo;
    
        return $this;
    }

    /**
     * Get periodo_tipo
     *
     * @return string 
     */
    public function getPeriodoTipo()
    {
        return $this->periodo_tipo;
    }

    /**
     * Set periodo_unidades
     *
     * @param integer $periodoUnidades
     * @return Registro
     */
    public function setPeriodoUnidades($periodoUnidades)
    {
        $this->periodo_unidades = $periodoUnidades;
    
        return $this;
    }

    /**
     * Get periodo_unidades
     *
     * @return integer 
     */
    public function getPeriodoUnidades()
    {
        return $this->periodo_unidades;
    }

    /**
     * Set periodo_actual
     *
     * @param integer $periodoActual
     * @return Registro
     */
    public function setPeriodoActual($periodoActual)
    {
        $this->periodo_actual = $periodoActual;
    
        return $this;
    }

    /**
     * Get periodo_actual
     *
     * @return integer 
     */
    public function getPeriodoActual()
    {
        return $this->periodo_actual;
    }

    /**
     * Set periodos_en_ejercicio
     *
     * @param integer $periodosEnEjercicio
     * @return Registro
     */
    public function setPeriodosEnEjercicio($periodosEnEjercicio)
    {
        $this->periodos_en_ejercicio = $periodosEnEjercicio;
    
        return $this;
    }

    /**
     * Get periodos_en_ejercicio
     *
     * @return integer 
     */
    public function getPeriodosEnEjercicio()
    {
        return $this->periodos_en_ejercicio;
    }

    /**
     * Set periodo_fecha_inicio
     *
     * @param \DateTime $periodoFechaInicio
     * @return Registro
     */
    public function setPeriodoFechaInicio($periodoFechaInicio)
    {
        $this->periodo_fecha_inicio = $periodoFechaInicio;
    
        return $this;
    }

    /**
     * Get periodo_fecha_inicio
     *
     * @return \DateTime 
     */
    public function getPeriodoFechaInicio()
    {
        return $this->periodo_fecha_inicio;
    }

    /**
     * Set periodo_fecha_final
     *
     * @param \DateTime $periodoFechaFinal
     * @return Registro
     */
    public function setPeriodoFechaFinal($periodoFechaFinal)
    {
        $this->periodo_fecha_final = $periodoFechaFinal;
    
        return $this;
    }

    /**
     * Get periodo_fecha_final
     *
     * @return \DateTime 
     */
    public function getPeriodoFechaFinal()
    {
        return $this->periodo_fecha_final;
    }

    /**
     * Set periodo_acumulado_actual
     *
     * @param float $periodoAcumuladoActual
     * @return Registro
     */
    public function setPeriodoAcumuladoActual($periodoAcumuladoActual)
    {
        $this->periodo_acumulado_actual = $periodoAcumuladoActual;
    
        return $this;
    }

    /**
     * Get periodo_acumulado_actual
     *
     * @return float 
     */
    public function getPeriodoAcumuladoActual()
    {
        return $this->periodo_acumulado_actual;
    }

    /**
     * Set periodo_acumulado_ejercicio
     *
     * @param float $periodoAcumuladoEjercicio
     * @return Registro
     */
    public function setPeriodoAcumuladoEjercicio($periodoAcumuladoEjercicio)
    {
        $this->periodo_acumulado_ejercicio = $periodoAcumuladoEjercicio;
    
        return $this;
    }

    /**
     * Get periodo_acumulado_ejercicio
     *
     * @return float 
     */
    public function getPeriodoAcumuladoEjercicio()
    {
        return $this->periodo_acumulado_ejercicio;
    }

    /**
     * Set periodo_acumulado_total
     *
     * @param float $periodoAcumuladoTotal
     * @return Registro
     */
    public function setPeriodoAcumuladoTotal($periodoAcumuladoTotal)
    {
        $this->periodo_acumulado_total = $periodoAcumuladoTotal;
    
        return $this;
    }

    /**
     * Get periodo_acumulado_total
     *
     * @return float 
     */
    public function getPeriodoAcumuladoTotal()
    {
        return $this->periodo_acumulado_total;
    }

    /**
     * Set ejercicio_nombre
     *
     * @param string $ejercicioNombre
     * @return Registro
     */
    public function setEjercicioNombre($ejercicioNombre)
    {
        $this->ejercicio_nombre = $ejercicioNombre;
    
        return $this;
    }

    /**
     * Get ejercicio_nombre
     *
     * @return string 
     */
    public function getEjercicioNombre()
    {
        return $this->ejercicio_nombre;
    }

    /**
     * Set ejercicio_tipo
     *
     * @param string $ejercicioTipo
     * @return Registro
     */
    public function setEjercicioTipo($ejercicioTipo)
    {
        $this->ejercicio_tipo = $ejercicioTipo;
    
        return $this;
    }

    /**
     * Get ejercicio_tipo
     *
     * @return string 
     */
    public function getEjercicioTipo()
    {
        return $this->ejercicio_tipo;
    }

    /**
     * Set ejercicio_unidades
     *
     * @param integer $ejercicioUnidades
     * @return Registro
     */
    public function setEjercicioUnidades($ejercicioUnidades)
    {
        $this->ejercicio_unidades = $ejercicioUnidades;
    
        return $this;
    }

    /**
     * Get ejercicio_unidades
     *
     * @return integer 
     */
    public function getEjercicioUnidades()
    {
        return $this->ejercicio_unidades;
    }

    /**
     * Set ejercicio_actual
     *
     * @param integer $ejercicioActual
     * @return Registro
     */
    public function setEjercicioActual($ejercicioActual)
    {
        $this->ejercicio_actual = $ejercicioActual;
    
        return $this;
    }

    /**
     * Get ejercicio_actual
     *
     * @return integer 
     */
    public function getEjercicioActual()
    {
        return $this->ejercicio_actual;
    }

    /**
     * Set ejercicios_en_mandato
     *
     * @param integer $ejerciciosEnMandato
     * @return Registro
     */
    public function setEjerciciosEnMandato($ejerciciosEnMandato)
    {
        $this->ejercicios_en_mandato = $ejerciciosEnMandato;
    
        return $this;
    }

    /**
     * Get ejercicios_en_mandato
     *
     * @return integer 
     */
    public function getEjerciciosEnMandato()
    {
        return $this->ejercicios_en_mandato;
    }

    /**
     * Set ejercicio_fecha_inicio
     *
     * @param \DateTime $ejercicioFechaInicio
     * @return Registro
     */
    public function setEjercicioFechaInicio($ejercicioFechaInicio)
    {
        $this->ejercicio_fecha_inicio = $ejercicioFechaInicio;
    
        return $this;
    }

    /**
     * Get ejercicio_fecha_inicio
     *
     * @return \DateTime 
     */
    public function getEjercicioFechaInicio()
    {
        return $this->ejercicio_fecha_inicio;
    }

    /**
     * Set ejercicio_fecha_final
     *
     * @param \DateTime $ejercicioFechaFinal
     * @return Registro
     */
    public function setEjercicioFechaFinal($ejercicioFechaFinal)
    {
        $this->ejercicio_fecha_final = $ejercicioFechaFinal;
    
        return $this;
    }

    /**
     * Get ejercicio_fecha_final
     *
     * @return \DateTime 
     */
    public function getEjercicioFechaFinal()
    {
        return $this->ejercicio_fecha_final;
    }

    /**
     * Set ejercicio_acumulado_actual
     *
     * @param float $ejercicioAcumuladoActual
     * @return Registro
     */
    public function setEjercicioAcumuladoActual($ejercicioAcumuladoActual)
    {
        $this->ejercicio_acumulado_actual = $ejercicioAcumuladoActual;
    
        return $this;
    }

    /**
     * Get ejercicio_acumulado_actual
     *
     * @return float 
     */
    public function getEjercicioAcumuladoActual()
    {
        return $this->ejercicio_acumulado_actual;
    }

    /**
     * Set ejercicio_acumulado_ejercicio
     *
     * @param float $ejercicioAcumuladoEjercicio
     * @return Registro
     */
    public function setEjercicioAcumuladoEjercicio($ejercicioAcumuladoEjercicio)
    {
        $this->ejercicio_acumulado_ejercicio = $ejercicioAcumuladoEjercicio;
    
        return $this;
    }

    /**
     * Get ejercicio_acumulado_ejercicio
     *
     * @return float 
     */
    public function getEjercicioAcumuladoEjercicio()
    {
        return $this->ejercicio_acumulado_ejercicio;
    }

    /**
     * Set ejercicio_acumulado_total
     *
     * @param float $ejercicioAcumuladoTotal
     * @return Registro
     */
    public function setEjercicioAcumuladoTotal($ejercicioAcumuladoTotal)
    {
        $this->ejercicio_acumulado_total = $ejercicioAcumuladoTotal;
    
        return $this;
    }

    /**
     * Get ejercicio_acumulado_total
     *
     * @return float 
     */
    public function getEjercicioAcumuladoTotal()
    {
        return $this->ejercicio_acumulado_total;
    }

    /**
     * Set factura_actual
     *
     * @param string $facturaActual
     * @return Registro
     */
    public function setFacturaActual($facturaActual)
    {
        $this->factura_actual = $facturaActual;
    
        return $this;
    }

    /**
     * Get factura_actual
     *
     * @return string 
     */
    public function getFacturaActual()
    {
        return $this->factura_actual;
    }

    /**
     * Set documento_actual
     *
     * @param string $documentoActual
     * @return Registro
     */
    public function setDocumentoActual($documentoActual)
    {
        $this->documento_actual = $documentoActual;
    
        return $this;
    }

    /**
     * Get documento_actual
     *
     * @return string 
     */
    public function getDocumentoActual()
    {
        return $this->documento_actual;
    }

    /**
     * Set recibo_actual
     *
     * @param string $reciboActual
     * @return Registro
     */
    public function setReciboActual($reciboActual)
    {
        $this->recibo_actual = $reciboActual;
    
        return $this;
    }

    /**
     * Get recibo_actual
     *
     * @return string 
     */
    public function getReciboActual()
    {
        return $this->recibo_actual;
    }
}