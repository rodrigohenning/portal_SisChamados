<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistema de Chamados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Adicione aqui seus próprios estilos CSS -->
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Chamados em Aberto</h2>
            <!-- Tabela de chamados em aberto -->
            <?php include 'chamados_em_aberto.php'; ?>
        </div>
        <div class="col-md-4">
            <div>
                <a href="abrir_chamado.php" class="btn btn-primary">Abrir Chamado</a>
            </div>
            <div class="mt-3">
                <a href="admin_login.php" class="btn btn-success">Administrar</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Adicione aqui seus próprios scripts JS -->

</body>
</html>
