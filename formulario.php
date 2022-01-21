<?php

    /*
    Toda instrução em PHP precisa de ponto e vírgula no final!  
    Toda variável no PHP precisa começar com o símbolo de $! O computador só entende que é uma variável quando a palavra começa com $!
    Agora, nós escrevemos o código, o Apache interpreta e manda o código interpretado para o navegador! NAvegador só interpreta HTML, CSS e JavaScript! 
    Todo o texto, o Apache apenas manda para o navegador e se tiver tags html nesse texto, o navegador as interpreta!
    */

    //Printa conteúdo na tela! MAIS USADO!
    echo('Testando PHP!');

    //Printa conteúdo na tela também!
    print_r('Testando Outra Forma de Escrever na Tela!');

    //isset - permite verificar a existência de uma variável ou de um objeto
    //Validação para identificar se o botão foi clicado e disponibilizado na ação do GET 
    
    if(isset($_GET[("btnSalvar")])) 
    {

        // Recuperando dados do formulário via GET e Declaração de Variáveis
        $nome = $_GET['txtNome'];
        $cidade = $_GET['sltCidade'];
        $sexo = $_GET['rdoSexo'];
        $observacao = $_GET['txtObservacao'];

        //Variáveis foram criadas e definidas como null para resolver o problema de variável indefinida na exibição de dados
        $idiomaPortugues = null;
        $idiomaIngles = null;
        $idiomaEspanhol = null;
        $idiomaFrances = null;

        if(isset($_GET['ckbPortugues'])){
            $idiomaPortugues = $_GET['ckbPortugues']; 
        }

        if(isset($_GET['ckbIngles'])){
            $idiomaIngles = $_GET['ckbIngles']; 
        }

        if(isset($_GET['ckbEspanhol'])){
            $idiomaEspanhol = $_GET['ckbEspanhol']; 
        }

        if(isset($_GET['ckbFrances'])){
            $idiomaFrances = $_GET['ckbFrances']; 
        }

        //Para concatenar você deve usar o "."
     echo('<br>'.'<b>Nome:</b> '. $nome .'<br>');
     echo('<b>Cidade:</b> '. $cidade .'<br>');
     echo('<b>Sexo:</b> '. $sexo .'<br>');
     echo('<b>OBS:</b> '. $observacao .'<br>');
     echo('<b>Idiomas:</b> '. $idiomaPortugues. $idiomaIngles. $idiomaEspanhol.  $idiomaFrances.'<br>');

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        textarea{
            resize: none;
        }
        /* Quando você estiliza a página no próprio HTML, você deve colocar o style na própria tag que será estilizada ou no head como está sendo feito agora! */
    </style>
</head>
<body>
    
    <!-- 
        GET - permite retirar os dados do formulário e disponiblizar na URL da página e só possível ver os dados na URL!     
        POST - permite retirar os dados do formulário e disponiblizar em variáveis locais e só é possível ver os dados usando PHP!
        
        action - É utilizado para exemplificar em qual arquivo ou página será disponibilizado os dados do FORM

        input type="text" - permite colocar ema caixa do tipo texto 
            size ="" permite especificar o tamanho da caixa
            maxlength - permite configurar a quantidade de caractéres que poderão ser digitados na caixa de texto

        <selection> - permite criar uma lista de opções 
            <option> - é através dela que podemos criar itens dentro da lista
                <option value=""> o atributo value é obrigatório para que o formulário consiga resgatar o valor do item selecionado pelo usuário e disponibilizar para o back-end 
                O que irá para o Back-End não será o conteúdo que está dentro da tag option, o que chegará será o que está dentro do atributo value!
                Geralmente o que estará dentro do value será o código que representará o número da cidade no Banco de Dados!

        <input type="radio" - permite criar opções de escolha. Para configurar o radio para que ele permita selecionar apenas uma opção é obrigatório que todas as inputs 
        que perterçam ao conjunto tenham o mesmo nome.         
    -->
    
    <form name="frmCadastro" method="GET" action="formulario.php">
        
        Nome: <input type="text" name="txtNome" size="50" maxlength="30">
        <br>
        <br>
        
        Cidade: 
        <select name="sltCidade">
            <option value="empty" selected>Selecione um Item</option>
            <option value="jandira">Jandira</option>
            <option value="barueri">Barueri</option>
            <option value="itapevi">Itapevi</option>
            <option value="cararapicuiba">Cararapicuíba</option>
            <option value="osasco">Osasco</option>
        </select> 
        <br>
        <br>
        
        Sexo:
        <input type="radio" name="rdoSexo" value="F"> Feminino
        <input type="radio" name="rdoSexo" value="M"> Masculino 
        <input type="radio" name="rdoSexo" value="O"> Outro 
        <br>
        <br>

        Idiomas:
        <input type="checkbox" name="ckbPortugues" value="portuguese" checked> Português
        <input type="checkbox" name="ckbIngles" value="english"> Inglês
        <input type="checkbox" name="ckbEspanhol" value="spanish"> Espanhol
        <input type="checkbox" name="ckbFrances" value="french"> Francês
        <br>
        <br>

        Observação: 
        <textarea name="txtObservacao" cols="30" rows="5"></textarea>
        <!-- Quando usamos <textarea>, não podemos deixar nenhum espaço entre a tag de abertura e a de fechamemento, ou seja, não podemos pular uma linha ou dar espaço entre as tags, pois se você fizer isso 
            esses espaços ficaram dentro da área de texto quando o usuário for utilizar o formulário! -->
        
        <br>
        <br>

        <input type="submit" name="btnSalvar" value="Salvar">    
        <input type="reset" name="btnLimpar" value="Limpar">
        <!-- <input type="submit"> - permite retirar os dados do formulário através do próprio HTML, fazendo um submit nos dados!
        
            <input type="button"> - somente será possível retirar os dados do formulário através do JavaScript!

            <input type="reset"> - permite limpar todos os elementos do formulário!
        -->

    </form>
</body>
</html>