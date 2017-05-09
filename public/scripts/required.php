<?php 
// Sistema de Validação em JavaScript;
// Desenvolvido por Alexandro Martins;
?>
<script type="text/javascript">

	//Mascará Input Form Validate

	$(function(){
            $(".cepcontrol").mask("99 999 - 999");
            $(".telfixo").mask("(99) 9999 - 9999");
			$(".telcell").mask("(99) 9 9999 - 9999");
            $(".datanasc").mask("99 / 99 / 9999");
            });
</script>