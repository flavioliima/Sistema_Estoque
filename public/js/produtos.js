$(document).ready(function ()
{
    $('#id_produto');

    $.ajax({
        url: '/estoques/ListarProdutosJson',
        type: 'GET',
        success: function (data) {
            var html;

            html += '<option value="" >Selecionar</option>';

            for (var i = 0; i < data.length; i++) {
                if ($('#id_produto').val() == data[i].id) {
                    html += '<option value="' + data[i].id + '" >' + data[i].nome_produto + '</option>';
                }

            }
            $('#id_produto').html(html).show();

        }
    });
});
