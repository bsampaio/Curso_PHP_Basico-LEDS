<?php
  $turma = array(
    "Professor" => array(
      "nome" => "Paulo",
      "idade" => 30,
      "qtdReprovados" => 1000,
    ),
    "Alunos" => array(
      "Breno", "Phillipe",
      "Marcos", "André"
    )
  );

  echo $turma["Professor"]["nome"];
?>
