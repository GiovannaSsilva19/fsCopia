<!--  -->
    
        
        <?php
        $servername = "localhost";
        $username = "root";
        $passoword = "";
        $database = "fseletro";

        $conn = mysqli_connect($servername,$username,$passoword, $database);
        
         if (!$conn) {
             die("deu ruim". mysqli_connect_error());
         }
         
        if(isset($_GET['nome']) && isset($_GET['email'])){
             $nome = $_GET['nome'];
             $email = $_GET['email'];

           $sql = "insert into mensagemok (nome,email) values('$nome','$email')";
             $result = $conn->query($sql); 

             if($result){
                 echo "cadastro realizado com sucesso: $nome,$email";
                 $array =array('um' => '$nome','dois'=>'$email');
                 print_r($array);
                 json_encode($array);
                 print_r($array);
             } else {
                 echo "";
             }
             
         }
        

	

   



