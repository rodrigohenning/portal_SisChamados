<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Descrição</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Substitua o loop abaixo com a lógica para obter chamados em aberto do banco de dados
    for ($i = 1; $i <= 5; $i++) {
        echo "<tr>
                <td>$i</td>
                <td>Chamado $i</td>
                <td>Descrição do chamado $i</td>
                <td>Aberto</td>
              </tr>";
    }
    ?>
    </tbody>
</table>
