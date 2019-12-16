<table>
            <tr>
                <th>Tarefa</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Concluída</th>
                <th>Opções</th>
            </tr>
            <?php foreach ($lista_tarefas as $tarefa) : ?>
                <tr>
                    <td id=""> <?php echo $tarefa['nome']; ?> </td> 
                    <td id=""> <?php echo $tarefa['descricao']; ?> </td>
                    <td id=""> <?php echo traduz_para_exibir($tarefa['prazo']); ?> </td>
                    <td id=""> <?php echo traduz_prioridade($tarefa['prioridade']); ?> </td>
                    <td id=""> <?php echo traduz_concluida($tarefa['concluida']); ?> </td>
                    <td>
                        <a href="editar.php?id=<?php echo $tarefa['id']; ?>">
                            Editar
                        </a>
                        <a href="remover.php?id=<?php echo $tarefa['id']; ?>">
                            Remover
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>