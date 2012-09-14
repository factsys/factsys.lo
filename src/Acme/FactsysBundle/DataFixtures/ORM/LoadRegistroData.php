<?php
// src/Acme/FactsysBundle/DataFixtures/ORM/LoadRegistroData.php
namespace Acme\FactsysBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Acme\FactsysBundle\Entity\Registro;

class LoadRegistroData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {        
        /**
         *             ->add('rfc')
            ->add('nombre_municipio')
            ->add('direccion')
            ->add('ciudad')
            ->add('estado')
            ->add('pais')
            ->add('telefono')
            ->add('fax')
            ->add('contacto')
            ->add('sha_key')
            ->add('estatuto')
            ->add('fecha_alta')
            ->add('fecha_ult_mvto')
            ->add('fecha_caduca')
            ->add('notas')
            ->add('periodo_nombre')
            ->add('periodo_tipo')
            ->add('periodo_unidades')
            ->add('periodo_actual')
            ->add('periodos_en_ejercicio')
            ->add('periodo_fecha_inicio')
            ->add('periodo_fecha_final')
            ->add('periodo_acumulado_actual')
            ->add('periodo_acumulado_ejercicio')
            ->add('periodo_acumulado_total')
            ->add('ejercicio_nombre')
            ->add('ejercicio_tipo')
            ->add('ejercicio_unidades')
            ->add('ejercicio_actual')
            ->add('ejercicios_en_mandato')
            ->add('ejercicio_fecha_inicio')
            ->add('ejercicio_fecha_final')
            ->add('ejercicio_acumulado_actual')
            ->add('ejercicio_acumulado_ejercicio')
            ->add('ejercicio_acumulado_total')
            ->add('factura_actual')
            ->add('documento_actual')
            ->add('recibo_actual')
         */
 
        // Calcula Fin de Evaluacion
        $expiradate = new \DateTime('today');
        $expiradate->add(new \DateInterval('P6M'));
        $pri_ejercicio= new \DateTime(date('Y-1-1 00:00:00.00'));
        $fin_ejercicio= new \DateTime(date('Y-12-31 23:59:59'));
        $pri_periodo= new \DateTime(date('Y-1-1 00:00:00'));
        $fin_periodo= new \DateTime(date('Y-2-1 23:59:59'));
        $fin_periodo->modify('-1 days');
        //echo strtotime('t', 'today');
        //for ($i = 1; $i <= 10; $i++) {
        //$fin_periodo= new \DateTime('-'.$i.' month');
        //print_r($pri_periodo);
        //print_r($fin_periodo);
        //echo $fin_periodo['date'];
        //}
        //echo $pri_ejercicio->date;
        //echo $fin_ejercicio->date;
        
//        echo $pri_periodo;
//        echo $fin_periodo;
//
        $nuevoRegistro = new Registro();
        $nuevoRegistro->setRfc('XXXX000000XXXXXX00'); //18 caracteres
        $nuevoRegistro->setNombreMunicipio('Honorable Municipio de Prueba');
        $nuevoRegistro->setDireccion('Avenida Principal #1');
        $nuevoRegistro->setCiudad('Una Ciudad');
        $nuevoRegistro->setEstado('Ese Estado');
        $nuevoRegistro->setPais('México');
        $nuevoRegistro->setTelefono('01 800 00 0 00 00');
        $nuevoRegistro->setFax('01 800 00 0 00 00');
        $nuevoRegistro->setContacto('CP: Anononimo Email: Anonimo@factsys.local');
        /* <?php
        function gen_unique_id($id = NULL, $salt = NULL, $length = NULL){
            $id = ($id == NULL) ? uniqid(hash("sha512",rand()), TRUE) : $id;
            $code = hash("sha512", $id.$salt);
            return $length == NULL ? $code : substr($code, 0, $length);
        }
         */
        $nuevoRegistro->setShakey('Periodo Evaluacion');
        $nuevoRegistro->setEstatuto(True);
        $nuevoRegistro->setFechaAlta(new \DateTime('today'));
        $nuevoRegistro->setFechaCaduca($expiradate);
        $nuevoRegistro->setFechaUltMvto(new \DateTime('today'));
        $nuevoRegistro->setPeriodoTipo('month');
        $nuevoRegistro->setPeriodoUnidades(1);
        $nuevoRegistro->setPeriodoActual(1);
        $nuevoRegistro->setPeriodosEnEjercicio(12);
        $nuevoRegistro->setPeriodoFechaInicio($pri_periodo);
        $nuevoRegistro->setPeriodoFechaFinal($fin_periodo);
        $nuevoRegistro->setPeriodoAcumuladoActual(0.00);
        $nuevoRegistro->setPeriodoAcumuladoEjercicio(0.00);
        $nuevoRegistro->setPeriodoAcumuladoTotal(0.00);
        ## 
        $nuevoRegistro->setEjercicioTipo('year'); // años
        $nuevoRegistro->setEjercicioUnidades(1);  //cada 1 año
        $nuevoRegistro->setEjercicioActual(1); //primer ejercicio de 3
        $nuevoRegistro->setEjerciciosEnMandato(3); //3 años de verdugo
        $nuevoRegistro->setEjercicioFechaInicio($pri_ejercicio);
        $nuevoRegistro->setEjercicioFechaFinal($fin_periodo);
        $nuevoRegistro->setEjercicioAcumuladoActual(0.00);
        $nuevoRegistro->setEjercicioAcumuladoEjercicio(0.00);
        $nuevoRegistro->setEjercicioAcumuladoTotal(0.00);
        $nuevoRegistro->setDocumentoActual('000-000-0000001');
        $nuevoRegistro->setFacturaActual('000-000-0000001');
        $nuevoRegistro->setReciboActual('000-000-0000001');

        $nuevoRegistro->setEjercicioNombre('Ejercicio ('.$nuevoRegistro->getEjercicioActual().' de '.$nuevoRegistro->getEjerciciosEnMandato().'): '.$pri_ejercicio->format('Y-m-d').' al '.$fin_ejercicio->format('Y-m-d'));
        $nuevoRegistro->setNotas('Evaluacion Vence: '.$expiradate->format('Y-m-d')." ,Contactar nuestro agente de ventas para precios y licencias, Gracias por Evaluar este Programa.");
        $nuevoRegistro->setPeriodoNombre('Periodo ('.$nuevoRegistro->getPeriodoActual().' de '.$nuevoRegistro->getPeriodosEnEjercicio().'): '.$pri_periodo->format('Y-m-d').' al '.$fin_periodo->format('Y-m-d'));
 

        
        $manager->persist($nuevoRegistro);
        $manager->flush();
    }
}