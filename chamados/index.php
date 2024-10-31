<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <title>Sistema de Chamados</title>
</head>
<body>
  <header>
    <h1>Sistema de Chamados</h1>
    <nav>
      <ul>
        <li><a href="#">Chamados em Aberto</a></li>
        <li><a href="#">Chamados em Andamento</a></li>
        <li><a href="#">Abrir Chamado</a></li>
        <li><a href="#">Admin</a></li>
      </ul>
    </nav>
  </header>

  <section class="chamados-lista">
    <h2>Chamados em Aberto</h2>
    <table>
      <thead>
        <tr>
          <th>Setor Solicitante</th>
          <th>Nome</th>
          <th>Data</th>
          <th>Problema</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <!-- Exemplo de chamado -->
        <tr>
          <td>TI</td>
          <td>João da Silva</td>
          <td>2023-11-09</td>
          <td>Problema na impressora</td>
          <td>Em Aberto</td>
        </tr>
        <!-- Adicione mais chamados conforme necessário -->
        <tr>
          <td>Outro Setor</td>
          <td>Maria Oliveira</td>
          <td>2023-11-10</td>
          <td>Problema no software</td>
          <td>Em Andamento</td>
        </tr>
      </tbody>
    </table>
  </section>
</body>
</html>
