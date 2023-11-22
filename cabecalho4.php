<?php
include("conectadb3.php");
session_start();
// isset($_SESSION['nomeusuario'])?$nomeusuario = $_SESSION['nomeusuario']: "";
$nomeusuario = $_SESSION['nomeusuario'];
 
 
?>
 
<div>
 
<ul class="menu">
 
            <li><a href="cadastrousuario.php">CADASTRA USUÁRIO</a></li>
            <li><a href="cadastroproduto.php">CADASTRA PRODUTOS</a></li>
            <li><a href="listardeusuario.php">LISTAR USUÁRIO</a></li>
            <li><a href="listarproduto.php">LISTAR PRODUTO</a></li>
            <li><a href="listarclientes.php">LISTAR CLIENTES</a></li>
            <li><a href="encomendas.php">ENCOMENDAS</a></li>
            <li><a href="fornecedor.php">FORNECEDORES</a></li>
            <li class="menuloja"><a href="logout.php">SAIR</a></li>
 
            <?php
                if($nomeusuario != null) {
            ?>
                    <li class="profile">OLÁ  <?= strtoupper($nomeusuario) ?></li>
            <?php
                } else {
            ?>
                    <li class="profile">OLÁ  <?= strtoupper($nomeusuario) ?></li>
            <?php
                    echo "<script>window.alert('USUÁRIO NÃO AUTENTICADO'); window.location.href='login.php';</script>";
                }
            ?>
           
</ul>
</div>