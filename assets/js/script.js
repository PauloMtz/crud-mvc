/* função jQuery para manipular o modal */
$(function() {

	// chama as classes dos links que carregarão modal, nos eventos de click
	$('.modal_ajax').on('click', function(e) {
		
		// previne o evento de click
		e.preventDefault();

		$('.modal').html('Carregando...');

		// carrega o modal
		$('.modal_bg').show();

		// mostra mensagem enquanto carrega
		// $('.modal').html('Carregando...'); /* essa mensagem deve ser antes de carregar */

		// pega o link onde carregará o modal
		var link = $(this).attr('href');

		// carrega o conteúdo via ajax
		$.ajax({
			url: link,
			type: 'GET',
			success: function(html) {
				$('.modal').html(html);
			}
		});
	});
});