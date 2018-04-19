 <?php 
	require_once 'db.php';
	require_once 'system.php';
	
	function messages_all(){
            
            $query = db_query("SELECT * FROM messages ORDER BY dt DESC");
            
            return $query->fetchAll();
	}
	
	function messages_one($id){
        
            $query = db_query("SELECT * FROM messages WHERE id_message=:id",
            [
               'id' => $id
            ]);
    
            return $query->fetch();
	}

	function messages_add($name, $text){
		$query = db_query("INSERT INTO messages (name, text) VALUES (:n, :t)", [
				'n' => $name,
				't' => $text
			]);
	
		$db = db_connect();
		return $db->lastInsertId();
	}
