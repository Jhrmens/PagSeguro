var Root="http://"+localhost/phporientadoaobjetos/PagSeguroTeste+"/";

$('#BotaoPagamento').on('click',function(event){
    event.preventDefault();

    $.ajax({
        url: Root+"Controllers/ControllerPagamentoDireto.php",
        type: 'POST',
        dataType:'html',
        success:function(data){
            $('#code').val(data);
            $('#FormPagamento').submit();
        }
    });
});