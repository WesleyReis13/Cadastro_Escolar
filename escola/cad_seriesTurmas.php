<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro de Séries, Turmas e Disciplinas</title>
</head>
<body>
<form>
    <h2>Cadastro de Série</h2>
  <div class="form-group">
    <label for="serie">Série:</label>
    <input type="text" class="form-control" id="serie" name="serie" required>
  </div>
  <div class="form-group">
    <h2>Cadastro de Turma</h2>
    <label for="turma">Turma:</label>
    <input type="text" name="turma" id="turma" required>
    <br>
    <label for="serie_turma" name="serie_turma" >Série:</label>
    <select class="form-control" id="serie_turma" required>
      <option value="1">1ª Série</option>
      <option value="2">2ª Série</option>
      
      <!-- Adicione as opções para outras séries -->
    </select>
  </div>
  <div class="form-group">
    <h2>Cadastro de Disciplina</h2>
    <label for="disciplina">Disciplina:</label>
    <input type="text" id="disciplina" name="disciplina" required>
    <br>
    <label for="professor">Professor:</label>
        <input type="text" id="professor" name="professor" required>
        <br>
        <label for="turma_disciplina">Turma:</label>
        <select id="turma_disciplina" name="turma_disciplina" required>
            <option value="1">1ª Série - Turma A</option>
            <option value="2">1ª Série - Turma B</option>
            <!-- Adicione as opções para outras turmas -->
        </select>
        <br>

        <input type="submit" value="Cadastrar">
    
  </div>
  
  </div>
</form>
</body>
</html>