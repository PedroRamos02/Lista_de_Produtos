<?php
    require_once("servidor.php");
    $comando = "SELECT * FROM produtos ORDER BY id DESC";
    $enviar= mysqli_query($conn, $comando);
    $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
?>

<table>
    <tr>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Quantidade</th>
    </tr>

<?php
foreach ($resultado as $produto) {
    $descricao=$produto['descricao'];
    $preco=$produto['preco'];
    $quantidade=$produto['quantidade'];

?>
<tr>
    <td><?=$descricao?></td>
    <td><?=$preco?></td>
    <td><?=$quantidade?></td>
</tr>
<?php
}
?>
</table>