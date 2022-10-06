$(document).ready(function ()
{
    var id_evento = $('#id_categoria');

    $.ajax({
        url: '/categorias/ListarCategoriasJson',
        type: 'GET',
        success: function (data) {
            var html;

            html += '<option value="" >Selecionar</option>';

            for (var i = 0; i < data.length; i++) {
                if ($('#id_categoria').val() == data[i].id) {
                    html += '<option selected="" value="' + data[i].id + '" >' + data[i].descricao + '</option>';
                } else {
                    html += '<option value="' + data[i].id + '" >' + data[i].descricao + '</option>';
                }

            }
            $('#id_categoria').html(html).show();

        }
    });
});
