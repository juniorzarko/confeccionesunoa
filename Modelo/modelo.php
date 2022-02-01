<?php
include_once 'Modelo/conexionBD.php';

class UserModel {

  public $id;
  public $nombre;
  public $usuario;
  public $clave;
  public $email;
  public $estado;

  function __construct (){

	$this->id=null;//$id;

	}


	function UserModelParam($objUserModel){

		$this->id=null;//$id;
		$this->nombre=$objUserModel['nombre'];
		$this->usuario=$objUserModel['usuario'];
		$this->clave=$objUserModel['clave'];
		$this->email=$objUserModel['email'];
		$this->estado=$objUserModel['estado'];
	//	var_dump($this->nombre);
	}


  public function setId($id){
		$this->id = $id;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
  public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

  public function setClave($clave){
		$this->clave = $clave;
	}
  public function setEmail($email){
		$this->email = $email;
	}

  public function setEstado($estado){
		$this->nombre = $estado;
	}
  
  public function getNombre(){
		return $this->nombre;
	}

  public function getUsuario(){
		//print_r($this->usuario);
		return $this->usuario;
	}

  public function getClave(){
		return $this->clave;
	}
  public function getEmail(){
		return $this->email;
	}

  public function getEstado(){
		return $this->estado;
	}

}


class Tb_lote {

	public $id;
	public $codigoLote;
	public $nombre;
	public $cantidad;
	public $fechaCreacion;

	function __construct(){
		$this->id = null;

	}

	function tb_loteParams($param){
	//	$this->id = $param['id'];
		$this->codigoLote = $param['codigoLote'];
		$this->nombre = $param['nombre'];
		$this->cantidad = $param['cantidad'];
		$this->fechaCreacion =$param['fechaCreacion'];

	}

		/**
		 * Get the value of id
		 */
		public function getId()
		{
		return $this->id;
		}

		/**
		 * Set the value of id
		 *
		 * @return  self
		 */
		public function setId($id)
		{
		$this->id = $id;

		return $this;
		}

		/**
		 * Get the value of codigoLote
		 */
		public function getCodigoLote()
		{
		return $this->codigoLote;
		}

		/**
		 * Set the value of codigoLote
		 *
		 * @return  self
		 */
		public function setCodigoLote($codigoLote)
		{
		$this->codigoLote = $codigoLote;

		return $this;
		}

		/**
		 * Get the value of cantidad
		 */
		public function getCantidad()
		{
		return $this->cantidad;
		}

		/**
		 * Set the value of cantidad
		 *
		 * @return  self
		 */
		public function setCantidad($cantidad)
		{
		$this->cantidad = $cantidad;

		return $this;
		}

		/**
		 * Get the value of fechaCreacion
		 */
		public function getFechaCreacion()
		{
		return $this->fechaCreacion;
		}

		/**
		 * Set the value of fechaCreacion
		 *
		 * @return  self
		 */
		public function setFechaCreacion($fechaCreacion)
		{
		$this->fechaCreacion = $fechaCreacion;

		return $this;
		}
}

class tb_operacion{

	public $id;
	public $fecha;
	public $nombre;


	/**
	 * Constructores de clase.
	 * 
	 */
	function __construct (){

		$this->id=null;
	//	$this->id_modulo=new Tb_modulos(); //$id;
	
	}

	function tb_operacion($param){
		$this->fecha = $param["fecha"];
		$this->nombre = $param["nombre"];

	}
		/**
		 * Get the value of id
		 *
		 * @return 	public
		 */
		public function getId()
		{
			return $this->id;
		}

		/**
		 * Set the value of id
		 *
		 * @param public $id
		 *
		 * @return self
		 */
		public function setId($id)
		{
			$this->id = $id;

			return $this;
		}

		/**
		 * Get the value of fecha
		 *
		 * @return 	public
		 */
		public function getFecha()
		{
			return $this->fecha;
		}

		/**
		 * Set the value of fecha
		 *
		 * @param public $fecha
		 *
		 * @return self
		 */
		public function setFecha($fecha)
		{
			$this->fecha = $fecha;

			return $this;
		}

		/**
		 * Get the value of nombre
		 *
		 * @return 	public
		 */
		public function getNombre()
		{
			return $this->nombre;
		}

		/**
		 * Set the value of nombre
		 *
		 * @param public $nombre
		 *
		 * @return self
		 */
		public function setNombre($nombre)
		{
			$this->nombre = $nombre;

			return $this;
		}


}

class Tb_modulos{

	public $id;
	public $fecha;
	public $descripcion;
	public $costoxprenda;
	public $id_operacion;


	function __construct (){

		$this->id=null;//$id;
		$this->id_operacion= new tb_operacion;

	}
	function ParamModulos($param){
	//	 $this->id=$param['id'];
		 $this->fecha=$param['fecha'];
		 $this->descripcion=$param['descripcion'];
		 $this->costoxprenda=$param['costoxprenda'];

	}



		/**
		 * Get the value of id
		 */
		public function getId()
		{
		return $this->id;
		}

		/**
		 * Set the value of id
		 *
		 * @return self
		 */
		public function setId($id)
		{
		$this->id = $id;

		return $this;
		}

		/**
		 * Get the value of descripcion
		 */
		public function getDescripcion()
		{
		return $this->descripcion;
		}

		/**
		 * Set the value of descripcion
		 *
		 * @return self
		 */
		public function setDescripcion($descripcion)
		{
		$this->descripcion = $descripcion;

		return $this;
		}

			/**
			 * Get the value of fecha
			 */
			public function getFecha()
			{
			return $this->fecha;
			}

			/**
			 * Set the value of fecha
			 *
			 * @return self
			 */
			public function setFecha($fecha)
			{
			$this->fecha = $fecha;

			return $this;
			}
			
			/**
			 * Get the value of precioxprenda
			 */
			public function getPrecioxprenda()
			{
			return $this->precioxprenda;
			}

		/**
		 * Set the value of precioxprenda
		 *
		 * @return self
		 */
		public function setCostoxprenda($costoxprenda)
		{
		$this->costoxprenda = $costoxprenda;

		return $this;
		}
		
				

		
}

class tb_mod_prendas{

	public $id;
	public $fecha_mvto;
	public $id_operaciones;
	public $codigoOperador;
	public $nombreOperador;
	public $unidad_hora;
	public $unidadTotalDia;
	public $salarioDia;
	public $total;
	public $observaciones;
	public $id_operario;
	public $id_lote;


	/**
	 * Se insertaran los contrustores de la clase
	 */

	function __construct (){

		$this->id=null;//$id;
	
	}
				/**
				 * Get the value of id
				 *
				 * @return 	public
				 */
				public function getId()
				{
					return $this->id;
				}

				/**
				 * Set the value of id
				 *
				 * @param 	public $id
				 *
				 * @return self
				 */

				public function setId($id)
				{
					$this->id = $id;

					return $this;
				}

				/**
				 * Get the value of fecha_mvto
				 *
				 * @return 	public
				 */
				public function getFechaMvto()
				{
					return $this->fecha_mvto;
				}

				/**
				 * Set the value of fecha_mvto
				 *
				 * @param public $fecha_mvto
				 *
				 * @return self
				 */
				public function setFechaMvto($fecha_mvto)
				{
					$this->fecha_mvto = $fecha_mvto;

					return $this;
				}


				/**
				 * Get the value of id_operaciones
				 *
				 * @return 	public
				 */
				public function getIdOperaciones()
				{
					return $this->id_operaciones;
				}

				/**
				 * Set the value of id_operaciones
				 *
				 * @param  	public $id_operaciones
				 *
				 * @return self
				 */
				public function setIdOperaciones($id_operaciones)
				{
					$this->id_operaciones = $id_operaciones;

					return $this;
				}

				/**
				 * Get the value of codigoOperador
				 *
				 * @return 	public
				 */
				public function getCodigoOperador()
				{
					return $this->codigoOperador;
				}

				/**
				 * Set the value of codigoOperador
				 *
				 * @param public $codigoOperador
				 *
				 * @return self
				 */
				public function setCodigoOperador($codigoOperador)
				{
					$this->codigoOperador = $codigoOperador;

					return $this;
				}

				/**
				 * Get the value of nombreOperador
				 *
				 * @return 	public
				 */
				public function getNombreOperador()
				{
					return $this->nombreOperador;
				}

				/**
				 * Set the value of nombreOperador
				 *
				 * @param public $nombreOperador
				 *
				 * @return self
				 */
				public function setNombreOperador($nombreOperador)
				{
					$this->nombreOperador = $nombreOperador;

					return $this;
				}

				/**
				 * Get the value of unidad_hora
				 *
				 * @return 	public
				 */
				public function getUnidadHora()
				{
					return $this->unidad_hora;
				}

				/**
				 * Set the value of unidad_hora
				 *
				 * @param public $unidad_hora
				 *
				 * @return self
				 */
				public function setUnidadHora($unidad_hora)
				{
					$this->unidad_hora = $unidad_hora;

					return $this;
				}

				/**
				 * Get the value of unidadTotalDia
				 *
				 * @return 	public
				 */
				public function getUnidadTotalDia()
				{
					return $this->unidadTotalDia;
				}

				/**
				 * Set the value of unidadTotalDia
				 *
				 * @param public $unidadTotalDia
				 *
				 * @return self
				 */
				public function setUnidadTotalDia($unidadTotalDia)
				{
					$this->unidadTotalDia = $unidadTotalDia;

					return $this;
				}

				/**
				 * Get the value of salarioDia
				 *
				 * @return 	public
				 */
				public function getSalarioDia()
				{
					return $this->salarioDia;
				}

				/**
				 * Set the value of salarioDia
				 *
				 * @param public $salarioDia
				 *
				 * @return self
				 */
				public function setSalarioDia($salarioDia)
				{
					$this->salarioDia = $salarioDia;

					return $this;
				}

				/**
				 * Get the value of total
				 *
				 * @return 	public
				 */
				public function getTotal()
				{
					return $this->total;
				}

				/**
				 * Set the value of total
				 *
				 * @param public $total
				 *
				 * @return self
				 */
				public function setTotal($total)
				{
					$this->total = $total;

					return $this;
				}

				/**
				 * Get the value of observaciones
				 *
				 * @return 	public
				 */
				public function getObservaciones()
				{
					return $this->observaciones;
				}

				/**
				 * Set the value of observaciones
				 *
				 * @param public $observaciones
				 *
				 * @return self
				 */
				public function setObservaciones($observaciones)
				{
					$this->observaciones = $observaciones;

					return $this;
				}

				/**
				 * Get the value of id_operario
				 *
				 * @return 	public
				 */
				public function getIdOperario()
				{
					return $this->id_operario;
				}

				/**
				 * Set the value of id_operario
				 *
				 * @param public $id_operario
				 *
				 * @return self
				 */
				public function setIdOperario($id_operario)
				{
					$this->id_operario = $id_operario;

					return $this;
				}

				/**
				 * Get the value of id_lote
				 *
				 * @return 	public
				 */
				public function getIdLote()
				{
					return $this->id_lote;
				}

				/**
				 * Set the value of id_lote
				 *
				 * @param public $id_lote
				 *
				 * @return self
				 */
				public function setIdLote($id_lote)
				{
					$this->id_lote = $id_lote;

					return $this;
				}
}



class tb_operario{

	public $id;
	public $nombre;
	public $apellido;
	public $direccion;
	public $telefono;
	public $cargo;
	public $email;

	function __construct (){

		$this->id=null;//$id;
	
	}

	function tb_operario($operario){
		$this->id=null;//$id;
		$this->nombre=$operario['nombre'];
		$this->apellido=$operario['apellido'];
		$this->direccion=$operario['direccion'];
		$this->telefono=$operario['telefono'];
		$this->cargo=$operario['cargo'];
		$this->email=$operario['email'];
	}
				/**
				 * Get the value of id
				 *
				 * @return 	public
				 */
				public function getId()
				{
					return $this->id;
				}

				/**
				 * Set the value of id
				 *
				 * @param public $id
				 *
				 * @return self
				 */
				public function setId($id)
				{
					$this->id = $id;

					return $this;
				}

				/**
				 * Get the value of Nombre
				 *
				 * @return 	public
				 */
				public function getNombre()
				{
					return $this->nombre;
				}

				/**
				 * Set the value of Nombre
				 *
				 * @param public $Nombre
				 *
				 * @return self
				 */
				public function setNombre($Nombre)
				{
					$this->nombre = $Nombre;

					return $this;
				}

				/**
				 * Get the value of apellido
				 *
				 * @return 	public
				 */
				public function getApellido()
				{
					return $this->apellido;
				}

				/**
				 * Set the value of apellido
				 *
				 * @param public $apellido
				 *
				 * @return self
				 */
				public function setApellido( $apellido)
				{
					$this->apellido = $apellido;

					return $this;
				}

				/**
				 * Get the value of direccion
				 *
				 * @return 	public
				 */
				public function getDireccion()
				{
					return $this->direccion;
				}

				/**
				 * Set the value of direccion
				 *
				 * @param public $direccion
				 *
				 * @return self
				 */
				public function setDireccion($direccion)
				{
					$this->direccion = $direccion;

					return $this;
				}

				/**
				 * Get the value of telefono
				 *
				 * @return 	public
				 */
				public function getTelefono()
				{
					return $this->telefono;
				}

				/**
				 * Set the value of telefono
				 *
				 * @param public $telefono
				 *
				 * @return self
				 */
				public function setTelefono( $telefono)
				{
					$this->telefono = $telefono;

					return $this;
				}

				/**
				 * Get the value of cargo
				 *
				 * @return 	public
				 */
				public function getCargo()
				{
					return $this->cargo;
				}

				/**
				 * Set the value of cargo
				 *
				 * @param public $cargo
				 *
				 * @return self
				 */
				public function setCargo($cargo)
				{
					$this->cargo = $cargo;

					return $this;
				}

				/**
				 * Get the value of email
				 *
				 * @return 	public
				 */
				public function getEmail()
				{
					return $this->email;
				}

				/**
				 * Set the value of email
				 *
				 * @param public $email
				 *
				 * @return self
				 */
				public function setEmail($email)
				{
					$this->email = $email;

					return $this;
				}
}

class tb_transaccionesAPP{

	public $id;
	public $id_usuario;
	public $fecha;
	public $nombre;
	public $salario;
	public $unidades;
	public $id_modulo;

	function __construct (){

		$this->id=null;//$id;

	}


		/**
		 * Get the value of id
		 */
		public function getId()
		{
			return $this->id;
		}

		/**
		 * Set the value of id
		 */
	
		public function setId($id)
		{
		$this->id = $id;

		return $this;
		}

		/**
		 * Get the value of id_usuario
		 */
		public function getIdUsuario()
		{
		return $this->id_usuario;
		}

		/**
		 * Set the value of id_usuario
		 *
		 * @return self
		 */
		public function setIdUsuario($id_usuario)
		{
		$this->id_usuario = $id_usuario;

		return $this;
		}

		/**
		 * Get the value of fecha
		 */
		public function getFecha()
		{
		return $this->fecha;
		}


	
		public function setFecha($fecha)
		{
		$this->fecha = $fecha;

		return $this;
		}

		/**
		 * Get the value of nombre
		 */
		public function getNombre()
		{
		return $this->nombre;
		}

		/**
		 * Set the value of nombre
		 *
		 * @return self
		 */
		public function setNombre($nombre)
		{
		$this->nombre = $nombre;

		return $this;
		}

		/**
		 * Get the value of salario
		 */
		public function getSalario()
		{
		return $this->salario;
		}

		/**
		 * Set the value of salario
		 *
		 * @return self
		 */
		public function setSalario($salario)
		{
		$this->salario = $salario;

		return $this;
		}

		/**
		 * Get the value of unidades
		 */
		public function getUnidades()
		{
		return $this->unidades;
		}

		/**
		 * Set the value of unidades
		 *
		 * @return self
		 */
		public function setUnidades($unidades)
		{
		$this->unidades = $unidades;

		return $this;
		}

		/**
		 * Get the value of id_modulo
		 */
		public function getIdModulo()
		{
		return $this->id_modulo;
		}

		/**
		 * Set the value of id_modulo
		 *
		 * @return self
		 */
		public function setIdModulo($id_modulo)
		{
		$this->id_modulo = $id_modulo;

		return $this;


		}


			}


?>