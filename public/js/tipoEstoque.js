$(document).ready(function ()
{
    var id_categoria = $('#id_tipo_estoque');

    $.ajax({
        url: '/estoques/ListarTipoEstoquesJson',
        type: 'GET',
        success: function (data) {
            var html;

            html += '<option value="" >Selecionar</option>';

            for (var i = 0; i < data.length; i++) {
                if ($('#id_tipo_estoque').val() == data[i].id) {
                    html += '<option selected="" value="' + data[i].id + '" >' + data[i].descricao + '</option>';
                } else {
                    html += '<option value="' + data[i].id + '" >' + data[i].descricao + '</option>';
                }

            }
            $('#id_tipo_estoque').html(html).show();

        }
    });
});
