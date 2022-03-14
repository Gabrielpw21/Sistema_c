    <?php
    require_once "banco.php";


            $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);           

        
    if(!empty($dados['enviar'])){

        $conexao = Conexao::online();

    $query_contato = "INSERT INTO contatos (nome, email, assunto, mensagem, data) VALUES (:nome, :email, :assunto, :mensagem, :dataEnv)";
    
        $add_ctt = $conexao->prepare($query_contato);
        $add_ctt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        $add_ctt->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $add_ctt->bindParam(':assunto', $dados['assunto'], PDO::PARAM_STR);
        $add_ctt->bindParam(':mensagem', $dados['mensagem'], PDO::PARAM_STR);
        $add_ctt->bindParam(':dataEnv', $dados['dataEnv'], PDO::PARAM_STR);
         
        $add_ctt->execute();

        if($add_ctt->rowCount()){
            echo "<br><br><p>Mensagem enviada com sucesso!! xD</p>";
            header('Refresh: 3;index.php?pg=home');
        }else{
            echo "<p>Erro: Mensagem não enviada com sucesso :(</p>";
            
        }
    }
?>


<style>
 .container-ctt{
     background:rgba(204, 204, 204, 0.219);
     padding:70px 0;
 }

 input[type=text]{
    border-radius:10px;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
 }

 input[type=date]{
    border-radius:10px;
    
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
 }

 input[type=email]{
    border-radius:10px;
    
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
 }

 .botao{
     margin-top:-10px;
    margin-left:250px;
    padding:5px 15px;
    border-radius:7px;
    border: 0.5px solid #ccc;
    cursor:pointer;
    background:green;
    color:aliceblue;
     transition: all ease 0.3s;
 }   

 footer{
     background:red;
    border: 2px solid #fdea3c;
    height:154px;
 }
 .botao:hover{
     margin-top:-5px;
     transition: all ease 0.3s;
 }

 .footer-ctt{
     text-align:center;
 }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
<div class="container-fluid container-ctt">
    <div class="row">
        <div class="col-12">
            <div class="col-4 mx-auto ">
                <form action="" class="col-contato" method="post">
                    <input type="text" name="nome" class="form-control ctt" placeholder="Nome completo"><br>
                    <input type="email" name="email" class="form-control ctt" placeholder="Insira seu melhor e-mail"><br>
                    <input type="text" name="assunto" class="form-control ctt" placeholder="Assunto"><br>
                    <textarea name="mensagem" style="border-radius:10px;box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);" class="form-control ctt" placeholder="Insira sua mensagem" cols="30" rows="3"></textarea><br>
                    <input type="date" class="form-control ctt" name="dataEnv"><br>
                    <input type="submit" name="enviar"  class="botao" value="Enviar contato">
                </form>   
            </div>
        </div>        
    </div>
</div>


<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 footer-ctt">
                Copyright
            </div>
        </div>
    </div>
</footer>
</body>