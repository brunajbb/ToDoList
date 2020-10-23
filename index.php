<? php
// index sera o ponto central

requer  "src / classes / Tarefa.php" ;
requer  "src / classes / ArquivoTarefa.php" ;

// $ tarefa = nova Tarefa (0, "Teste", "Teste da classe tarefa", "22/10/2020");
// $ tarefa2 = nova Tarefa (1, "Teste 2", "Teste da classe tarefa 2", "23/10/2020");

// $ listaTarefas = [];
// $ listaTarefas [] = $ tarefa;
// $ listaTarefas [] = $ tarefa2;

$ arquivoTarefa = novo  ArquivoTarefa ( "tarefas.json" );
// $ arquivoTarefa-> salva ($ listaTarefas);

print_r ( $ arquivoTarefa -> le ());
