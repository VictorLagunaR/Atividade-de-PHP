<?php 

$nome = $_POST['nome'];
$senha = $_POST['password'];

    if ($nome == "etecia" && $senha == "etecia238") {
        
        echo "Autenticação realizada com sucesso";
        }
    else {
        echo "<h2>Você não tem autorização para visualizar está página</h2>";
    }

?>