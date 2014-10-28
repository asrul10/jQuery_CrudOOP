<?php 

class CRUD extends mysqli
{   
    private $host  = 'localhost';
    private $user  = 'root';
    private $pass  = '';
    private $db    = 'barangnya';
     
    public function __construct() {
        parent::__construct($this->host,  $this->user,  $this->pass,  $this->db);
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }

    public function get_data($table,$orderBy='',$orderType='desc',$limit ='') {
        $dat = array();
        if($table !=''){           
            $q = $this->create_query($table,$orderBy,$orderType,$limit);
            if($q){
                while ($data = $q->fetch_array()){
                    $dat[] = $data;
                }
                $q->free();
            }                            
        }
        return $dat;
    }

    public function create_query($table,$orderBy='',$orderType='desc',$limit =''){
         if($table !=''){
            $sql = "SELECT * FROM ".$table;
            if(!empty($orderBy)){
                $sql .= " ORDER BY ".$orderBy." ".$orderType;
            }         
            if (!empty ($limit)) {
                $sql .= " limit ".$limit;
            }
            $q = $this->query($sql);
         }
         else{
             $q = false;
         }
         return $q;
    }

    public function total_row($table,$orderBy='',$orderType='desc',$limit =''){
     $num = 0;
     if($table !=''){           
            $q = $this->create_query($table,$orderBy,$orderType,$limit);
            if($q){
                $num = $q->num_rows;
                $q->free();
            }                            
        }
        return $num;
    }
 
    public function insert($table,$data){
        if(is_array($data)){
            foreach ($data as $key =>$val){
                $vals[] = "'".$this->real_escape_string($val)."'";
                $keys[] = $key;
            }
        }
        $field = implode(', ',$keys);
        $value = implode(', ',$vals);       
        $sql = "INSERT INTO ".$table." (".$field.") VALUES (".$value.")";
        $query = $this->query($sql);
        if($query){
            $id = $this->insert_id;          
        }
        else {
            $id = 0;
        }      
        return $id;
    }
    public function delete($table,$where = array(),$type=''){
        $sql = "DELETE FROM ".$table;
        if(!empty($where)){
            $sql .= $this->_where($where,$type);
        }
        $q = $this->query($sql);
        $row = $this->affected_rows;
        return $row;
    }
    public function update($table,$data,$where=array(),$type=''){
        $sql = "UPDATE ".$table;
        if(is_array($data)){
            foreach ($data as $key =>$val){
                $vals = "'".$val."'";               
                $param[] = $key." = ".$vals;
                }
        }
        $param = implode(', ', $param);
        $sql .= " SET ".$param;
        if(!empty($where)){
            $sql .= $this->_where($where,$type);           
        }      
        $q = $this->query($sql);
        $row =  $this->affected_rows;
        return $row;
    }
    public function get_data_by($table,$where=array(),$type=''){
        $sql = "SELECT * FROM ".$table;
        if(!empty($where)){
           $sql .= $this->_where($where, $type);
        }       
        $q = $this->query($sql);
        $dat = array();
        if($q){
            while($data = $q->fetch_array()){
                $dat[] = $data;
             }
        }       
        return $dat;
    }
    function _has_operator($str)
 {
            $str = trim($str);
            if ( ! preg_match("/(\s|<|>|!|=|is null|is not null)/i", $str))
            {
                    return FALSE;
            }
            return TRUE;
 }
   function _where($where,$type=''){
       $sql = " WHERE ";
       if(is_array($where)){          
           foreach ($where as $k=>$v){
               if(!is_integer($v)){
                   $v = "'".addslashes($v)."'";
               }
               if(!$this->_has_operator($k)){
                   $k .= "=";
               }
               $val[]=$k.$v;              
           }
           if(count($val)>1){
               if(empty($type)){
                   $type = "AND";
               }
               $val = implode(" ".$type." ", $val);
           }
           else {
               $val = implode("", $val);
           }
       }
       $sql .= $val;
       return $sql;
   }  
}
?>