function val() {

    var input_curso    = form1.input_curso.value;
    var input_hora     = form1.input_hora.value;
    var input_data     = form1.input_data.value;
    var input_nome     = form1.input_nome.value;
    var input_nasc     = form1.input_nasc.value;
    var input_ender    = form1.input_ender.value;
    var input_num      = form1.input_num.value;
    var input_compl    = form1.input_compl.value;
    var input_cep      = form1.input_cep.value;
    var input_bairro   = form1.input_bairro.value;
    var input_munic    = form1.input_munic.value;
    var input_tel      = form1.input_tel.value;
    var input_email    = form1.input_email.value;
    var input_facebook = form1.input_facebook.value;
    var input_cel      = form1.input_cel.value;
    var input_pesquisa = form1.input_pesquisa.value;
    var input_valores  = form1.input_valores.value;
    var input_duvidas = form1.input_duvidas.value;

    if(form1.input_curso.selectedIndex == 0){
        alert('Informe o Curso que você deseja Fazer!');
        form1.input_curso.focus();
        return false;
    }
    else if(form1.input_hora.selectedIndex == 0){
        alert('Selecione o Horário Disponivel para o seu Curso!');
        form1.input_hora.focus();
        return false;
    }
    else if(form1.input_data.selectedIndex == 0){
        alert('Marque a Data de Início do Curso!');
        form1.input_data.focus();
        return false;
    }
    else if(input_nome == ""){
        alert('Por Favor Preencha o seu Nome!');
        form1.input_nome.focus();
        return false;
    }
    else if(input_nasc == ""){
        alert('É Obrigatório informar sua data de nascimento!');
        form1.input_nasc.focus();
        return false;
    }
    else if(input_ender == ""){
        alert('Informe corretamente o seu endereço!');
        form1.input_ender.focus();
        return false;
    }
    else if(input_num == ""){
        alert('Ops! você não pode esquecer de informar o numero de sua residência!');
        form1.input_num.focus();
        return false;
    }
    else if(input_compl == ""){
        alert('Se você mora em apto, fundos informe aqui o complemento! ou digite 0 para processeguir!');
        form1.input_compl.focus();
        return false;
    }
    else if(input_cep == ""){
        alert('Informe o CEP de sua rua, avenida ou travessa!');
        form1.input_cep.focus();
        return false;
    }
    else if(input_bairro == ""){
        alert('Informe o Bairro em que você Mora!');
        form1.input_bairro.focus();
        return false;
    }
    else if(input_munic == ""){
        alert('Informe o seu Município!');
        form1.input_munic.focus();
        return false;
    }
    else if(input_tel == ""){
        alert('É Preciso Informar um Telefone Residencial!');
        form1.input_tel.focus();
        return false;
    }
    else if(input_email == ""){
        alert('Informe um E-mail Válido para Realização e Confirmação de sua Matrícula!');
        form1.input_email.focus();
        return false;
    }
    else if(input_facebook == ""){
        alert('Informe seu Perfil do Facebook, caso não tenha facebook repita seu E-mail!');
        form1.input_facebook.focus();
        return false;
    }
    else if(input_cel == ""){
        alert('É Necessário Informar o número de celular ou Whatsapp!');
        form1.input_cel.focus();
        return false;
    }
    else if(form1.input_pesquisa.selectedIndex == 0){
        alert('Informe como ficou sabendo da Megavale Soluções!');
        form1.input_pesquisa.focus();
        return false;
    }
    else if(form1.input_valores.selectedIndex == 0){
        alert('Informe a Forma de Pagamento!');
        form1.input_valores.focus();
        return false;
    }
    else if(input_duvidas == ""){
        alert('Alguma Dúvida? ou Escreva desejo receber informações pelo E-mail!');
        form1.input_duvidas.focus();
        return false;
    }

    else if (isset($_POST['g-recaptcha-response'])) {
        $captcha_data = $_POST['g-recaptcha-response'];
    }

    // Se nenhum valor foi recebido, o usuário não realizou o captcha
    if (!$captcha_data) {
        echo "Por favor, confirme o captcha.";
        exit;
    }

    $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LesIhcUAAAAAKWQf0winRZU2fIHZkybiMLDZn1G&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);

    if ($resposta.success) {
        echo "Obrigado por deixar sua mensagem!";
    } else {
        echo "Usuário mal intencionado detectado. A mensagem não foi enviada.";
        exit;
    }

}
