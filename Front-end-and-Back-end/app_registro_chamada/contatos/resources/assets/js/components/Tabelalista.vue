<template>

    <div>
        <a v-if="criar" v-bind:href="criar" class="btn btn-info">Criar contato</a>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th v-for="titulo in titulos">{{titulo}}</th>

                    <th>Ação</th>
                
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item,index) in itens">
                <td v-for="i in item">{{i}}</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>Endereço</td>


                <td v-if="detalhe || editar || deletar">
                    <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" v-bind:value="token">

                        <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-success" >Detalhe</a>
                        <a v-if="editar" v-bind:href="editar" class="btn btn-warning" >Editar</a>
                       
                       <a href="#" v-on:onclick="executaForm(index)" class="btn btn-danger">Deletar</a>

                    </form>
                    <span v-if="!token">
                        <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-success" >Detalhe</a>
                        <a v-if="editar" v-bind:href="editar" class="btn btn-warning" >Editar</a>
                        <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger" >Deletar</a>
                    </span>
                    <span v-if="token && !deletar">
                        <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-success" >Detalhe</a>
                        <a v-if="editar" v-bind:href="editar" class="btn btn-danger" >Editar</a>
                    </span>
                    
                </td>
                </tr>
                
            </tbody>
        </table>
    </div>
   
</template>

<script>
    export default {
        props:['titulos','itens','criar','detalhe','editar','deletar','token'],
        methods:{
            executaForm: function(index){
                document.getElementById('index').submit();
            }
        }
    }
</script>
