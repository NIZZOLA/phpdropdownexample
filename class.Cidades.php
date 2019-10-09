<?php
class Cidades  {
    private $id;
    private $uf;
    private $nome;
	
	private $db;

		function __construct() {
			$dsn = 'mysql:dbname=aulatlbd;host=127.0.0.1';
			$user = 'root';
			$password = '';

			$this->db = new PDO($dsn,$user, $password);

		}
	  
		/*
      public static function getInstance() {
        // Se o a instancia não existe eu faço uma
        if(!isset( self::$instancia )){
            try {
                self::$instancia = new Cidades();
            } catch ( PDOException $e ) {
                $e->getMessage();  
            }
        }
        // Se já existe instancia na memória eu retorno ela
        return self::$instancia;
      }*/
	  
	  public function query( $sql )
	  {

			return $db->query( $sql );
	  }
	  


    function setCodigo( $codigo )
    {
		$this->codigo = $codigo;
    }
	function setNome( $nome )
	{
		$this->nome = $nome;
	}
	function setUf( $uf )
	{
		$this->uf = $uf;
	}
	
	function setMsgerro( $erro )
	{
		$this->msgerro = $erro;
	}
	
	function getCodigo( )
	{
		return $this->codigo;
	}
	function getNome()
	{
		return $this->nome;
	}
	function getUf()
	{
		return $this->uf;
	}
	
	function getExibir()
	{
		return $this->exibir;
	}
	
	function setExibir($exib )
	{
		$this->exibir = $exib;
	}

	function getMsgerro()
	{
		return $this->msgerro;
	}

	function getNomebycod( $codigo )
	{
		$this->carregadados($codigo);
		return $this->getNome();
	}
	

	
	function lista( $ordem )
	{
	 $sql = 'select * from cidades order by '.$ordem;
//	 echo $sql;
	 return $db->query($sql);
	}

	function pesquisa1( $id )
	{
	 $sql = 'select * from cidades where id='.$id;
	 echo $sql;
	 return $db->query($sql);
	}
	
	function comboestadual( $estado, $nome, $default  )
	{
	 $sql = "select * from cidades where uf='".$estado."' order by nome";
//     $sql = "select * from cidades order by nome";
//	 echo $sql;
	 $tabela = $this->db->query($sql);
	 if (isset($tabela))
		 {
//	     if ($nome != '')
//		   {
//		    echo "<select name='".$nome."'>";
//		   }
		 if ($default == '' )
		   {   echo "<option selected value=''>--selecione--</option>";   }  

		 while ($tbcid = $tabela->fetchObject()): 
		 
		      if ($default != $tbcid->id) 
			     {?>
					<option value="<?php echo $tbcid->id; ?>"><?php echo $tbcid->nome; ?></option>
				<?php
				 }
		     else
			     {?>
					<option selected value="<?php echo $tbcid->id; ?>"><?php echo $tbcid->nome; ?></option>
				<?php
				 }
			 endwhile; 
//		  if ($nome != '' )
//		   {	 echo "</select>";   }
		 }
		
	 }
	
	function carregadados( $id )
	{
	 $sql = "select * from cidades where id='".$id."'";

	 if ( $base = $db->query($sql) )
	    {

     	  while ($row = $base->fetch())
		  {
			$this->setCodigo( $row['id'] );
			$this->setNome( $row['nome'] );
			$this->setUf( $row['uf'] );
		  }
	    }
	}
	
	function grava()
	{
    	if ( $this->getCodigo() == '' )
		   {
		     $sql = "insert into cidades ( nome, exibir )  values (  '".$this->getNome()."' , ".(int)$this->exibir." )";
		   }
		else
		   {
			   $sql = "update cidades set nome='".$this->getNome()."' where id=".$this->getCodigo();
		   }
//		   echo $sql;
		   
		if ( $db->query( $sql ) )
		    {
				
				return true;
			}
	   return false;
	}
	
	function deleta($id)
	{
	    $sql = "select * from cidades where id=".$id;
		if ( $res = $db->query( $sql ) )
		   {
			 $tab = $res->fetchObject();
		   }
		else
		   {
			   $this->setMsgerro( "Erro na consulta da homenagem !" );
			   return false;
		   }
		
		$sql = "delete from cidades where id=".$id;
		if ( $db->query( $sql ) )
		    return true;  
			
		return false;
	}
	
	
}

