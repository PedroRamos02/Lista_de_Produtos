<?php
    require_once("servidor.php");

    if (isset($_GET['enviar'])) {
        if(!empty($_GET['descricao']) || !empty($_GET['preco']) || !empty($_GET['quantidade'])) {
            $descricao=$_GET['descricao'];
            $preco=$_GET['preco'];
            $quantidade=$_GET['quantidade'];

            $comando="INSERT INTO produtos(descricao, preco, quantidade) VALUES ('$descricao', '$preco', '$quantidade')";
            $enviar=mysqli_query($conn, $comando);

        
        }
    }
?>