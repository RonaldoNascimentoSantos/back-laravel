   $(function() {
        $('#estado').change(function() {
            var estado_id = $(this).val();
            if (estado_id) {
                $.ajax({
                    url: '/cidades/' + estado_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#cidade').empty();
                        $('#cidade').append('<option value="">Selecione uma cidade</option>');

                        $.each(data, function(index, cidade) {
                            $('#cidade').append('<option value="' + cidade.nome + '">' + cidade.nome + '</option>');
                        });

                        $('#cidade').prop('disabled', false);
                    }
                });
            } else {
                $('#cidade').empty();
                $('#cidade').append('<option value="">Selecione um estado primeiro</option>');
                $('#cidade').prop('disabled', true);
            }
        });
});


