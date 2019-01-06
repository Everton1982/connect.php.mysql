<?php

$conexao = mysqli_connect('localhost','root','', 'produtos');
$banco = mysqli_select_db($conexao,'produtos');
mysqli_set_charset($conexao,'utf8');
 
$sql = mysqli_query($conexao,"select * from produto") or die("Erro");
while($dados=mysqli_fetch_assoc($sql))
    {
        echo '<table class="table">';
        echo '<tr>';
        echo "<td>".$dados['id'].'</td>';
        echo "<td>".$dados['nome'].'</td>';
        echo "<td>".$dados['preco'].'</td>';
        echo "<td>".$dados['descricao'].'</td>';
        echo '</tr>';
        echo '</table>';
    }

?>