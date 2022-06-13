<form action="" method="post">
    <input name="nome" placeholder="Digite seu Nome:"/>
    <br/>
    <input name="cidade" placeholder="Digite sua Cidade:"/>
    <br/>
    <button>Enviar</button>
</form>

<?php
    if($_POST){
        echo "Olá ".$_POST["nome"];
    }
?>