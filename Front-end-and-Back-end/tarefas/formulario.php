        <form action="" id="">
            <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">
            <fieldset>
                <legend>Nova tarefa</legend>
                <label for="">
                    Tarefa:
                    <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>" />
                </label>
                <label for="">
                    Descrição:
                    <textarea name="descricao" >
                        <?php echo $tarefa['nome']; ?>
                    </textarea>
                </label>
                    <label for="">
                    Prazo:(Opcional)
                    <input type="text" name="prazo" value="<?php echo traduz_para_exibir($tarefa['prazo']); ?>"/>
                </label>
                <fieldset>
                    <legend>Prioridade:</legend>
                    <label for="">
                        <input type="radio" name="prioridade" value="1" 
                            <?php ($tarefa['prioridade'] == 1) 
                            ? 'checked'
                            : ''; 
                            ?> />
                        Baixa
                        <input type="radio" name="prioridade" value="2"
                        <?php ($tarefa['prioridade'] == 2) 
                            ? 'checked'
                            : ''; 
                            ?> />
                        Média
                        <input type="radio" name="prioridade" value="3" 
                        <?php ($tarefa['prioridade'] == 3) 
                            ? 'checked'
                            : ''; 
                            ?> />
                        Alta
                    </label>
                </fieldset>
                <label for="">
                    Tarefa concuída:
                    <input type="checkbox" name="concluida" value="1"
                    <?php ($tarefa['concluida'] == 1) 
                            ? 'checked'
                            : ''; 
                            ?> />
                </label>
                <input type="submit" value="
                <?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>" />    
                </fieldset>
        </form>