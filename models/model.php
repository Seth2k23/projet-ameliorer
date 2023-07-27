<?php
session_start();
/**
 * THIS FILE HELP TO MANAGE THE LOGIC UNDER OUR DATABASE ACTIONS
 **/
  class Model{
  // Database object class
    
    private function conn(){
    // Create and return a database connection stream
        
          $data_base_connector = new PDO('mysql:host=localhost; dbname=exam20; charset=utf8', 'seth', 'seth');             return $data_base_connector;

    }

    public function add($table, $fields, $values, $data){
    // create and save a database object
      $db = $this->conn();
      $create_request = $db->prepare('INSERT INTO '.$table.'('.$fields.') VALUES('.$values.')');
      $create_request->execute($data);

    }

      

    public function afficher($table, $field)
    {
          // get and return a database object
      $db=$this->conn();
      $read_request=$db->query('SELECT '.$field.' FROM '.$table.'');
      return $read_request;
    }

    public function afficherou($table, $field, $sfield, $data)
    {
          // get and return a database object
      $db=$this->conn();
      $read_request=$db->prepare('SELECT '.$field.' FROM '.$table.' WHERE '.$sfield.'=?');
      $read_request->execute($data);
      return $read_request;
    }

    public function afficherour($table, $field, $sfield, $value)
    {
          // get and return a database object
      $db=$this->conn();
      $read_request=$db->prepare('SELECT '.$field.' FROM '.$table.' WHERE '.$sfield.'=? ORDER BY rand()');
      $read_request->execute($value);
      return $read_request;
    }

    public function afficheou($table, $field, $sfield, $value)
    {
          // get and return a database object
      $db=$this->conn();
      $read_request=$db->prepare('SELECT '.$field.' FROM '.$table.' WHERE '.$sfield.'=?');
      $read_request->execute($value);
      $r = $read_request->fetchAll(PDO::FETCH_ASSOC);
      return $r;
    }
    
    public function afficherous($table, $field, $sfield1, $sfield2, $values)
    {
          // get and return a database object
      $db=$this->conn();
      $read_request=$db->prepare('SELECT '.$field.' FROM '.$table.' WHERE '.$sfield1.'=? OR '.$sfield2.'=?');
      $read_request->execute($values);
      $tt=$read_request->fetch();
      return $tt;
    }

      public function afficherand($table, $field, $sfield1, $sfield2, $values)
    {
          // get and return a database object
      $db=$this->conn();
      $read_request=$db->prepare('SELECT '.$field.' FROM '.$table.' WHERE '.$sfield1.'=? AND '.$sfield2.'=?');
      $read_request->execute($values);
      return $read_request;
    }

   

      public function afficherandnot($table, $field, $sfield1, $sfield2, $values)
    {
          // get and return a database object
      $db=$this->conn();
      $read_request=$db->prepare('SELECT '.$field.' FROM '.$table.' WHERE '.$sfield1.'=? AND '.$sfield2.'!=?');
      $read_request->execute($values);
      return $read_request;
    }

       public function afficherjont($table, $field, $sfield1, $sfield2, $sfield3, $values)
    {
          
      $db=$this->conn();
      $read_request=$db->prepare('SELECT '.$field.' FROM '.$table.' WHERE  '.$sfield1.'= '.$sfield2.' AND '.$sfield3.'=?');
      $read_request->execute($values);
      return $read_request;
    }

      public function update($table, $field, $sfield, $values)
    {
          
      $db=$this->conn();
      $read_request=$db->prepare('UPDATE '.$table.' SET '.$field.'=? WHERE  '.$sfield.'=?');
      $read_request->execute($values);
      return $read_request;
    }

    public function updatee($nomprojet,$dateLancement,$duree,$codelocalite,$codeprojet)
    {
          
      $db=$this->conn();
      $read_request=$db->prepare('UPDATE projet(nomprojet,dateLancement,duree,codelocalite) set nomprojet=?,dateLancement=?,duree=?,codelocalite=? where codeProjet=?');
      $read_request->execute(array($nomprojet,$dateLancement,$duree,$codelocalite,$codeprojet));
      return $read_request;
    }

       public function delet($table, $field,  $values)
    {
          
      $db=$this->conn();
      //$read_request=$db->query('DELETE FROM '.$table.' WHERE '.$field.'='.$values.'');

      $read_request=$db->prepare('DELETE FROM '.$table.' WHERE '.$field.'=?');
      $read_request->execute($values);
      return $read_request;
    }

       public function deletdouble($table, $field,  $sfield,  $values)
    {
          
      $db=$this->conn();
      //$read_request=$db->query('DELETE FROM '.$table.' WHERE '.$field.'='.$values.'');

      $read_request=$db->prepare('DELETE FROM '.$table.' WHERE '.$field.'=? AND '.$sfield.'=?');
      $read_request->execute($values);
      return $read_request;
    }

  }

?>