<script type="text/javascript">

	function val(){
		
		var inc_ass         = form1.inc_ass.value;
		var inc_nome        = form1.inc_nome.value;
		var inc_email       = form1.inc_email.value;
		var inc_cidade      = form1.inc_cidade.value;
		var inc_end         = form1.inc_end.value;
		var inc_num         = form1.inc_num.value;
		var inc_cep         = form1.inc_cep.value;
		var inc_telfix      = form1.inc_telfix.value;
		var inc_telcel      = form1.inc_telcel.value;
		var inc_msg         = form1.inc_msg.value;
		
		if(form1.inc_ass.selectedIndex == 0){
		alert('Informe o Assunto para o Contato!');
		form1.inc_ass.focus();
		return false;
			}
		else if(inc_nome == ""){
		alert('Por Favor Preencha o seu Nome!');
		form1.inc_nome.focus();
		return false;
			}
		else if(inc_email == ""){
		alert('Por Favor Informe um Endereço de E-mail Válido!');
		form1.inc_email.focus();
		return false;
			}
		else if(inc_cidade == ""){
		alert('Por Favor Informe a sua Cidade!');
		form1.inc_cidade.focus();
		return false;
			}
		else if(inc_end == ""){
		alert('Informe aqui o seu Endereço corretamente!');
		form1.inc_end.focus();
		return false;	
			}	
		else if(inc_num == ""){
		alert('Ops!!! Você esqueceu de Informar o Número!');
		form1.inc_num.focus();
		return false;	
			}
		else if(inc_cep == ""){
		alert('Informe o Cep de sua Rua!');
		form1.inc_cep.focus();
		return false;	
			}
		else if(inc_telfix == ""){
		alert('Informe o Número de Telefone Fixo para Contato!');
		form1.inc_telfix.focus();
		return false;	
			}	
		else if(inc_telcel == ""){
		alert('Informe o Número de Contato Celular!');
		form1.inc_telcel.focus();
		return false;	
			}	
		else if(form1.inc_internet.selectedIndex == 0){
		alert('Digas-nos como nos Conheceu!');
		form1.inc_internet.focus();
		return false;	
			}	
		else if(inc_msg == ""){
		alert('Descreva sua Mensagem ou as suas Dúvidas!');
		form1.inc_msg.focus();
		return false;	
			}	
			return true;	
		}

</script>