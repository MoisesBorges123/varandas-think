(function () {
	"use strict";

	var slideMenu = $('.side-menu');

	// Toggle Sidebar
	$(document).on('click','[data-toggle="sidebar"]',function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});
	
	$(".app-sidebar").hover(function() {
		if ($('.app').hasClass('sidenav-toggled')) {
			$('.app').addClass('sidenav-toggled1');
		}
	}, function() {
		if ($('.app').hasClass('sidenav-toggled')) {
			$('.app').removeClass('sidenav-toggled1');
		}
	});
  
	// Activate sidebar slide toggle
	//
	// Delegado em document (não bind direto nos elementos): o Varandas usa
	// Livewire wire:navigate, e o sidebar é re-renderizado (não persistido)
	// a cada navegação para manter a classe "ativo" correta — delegação
	// garante que o clique continue funcionando mesmo se o morph do
	// Livewire substituir os nós ao invés de só atualizar atributos.
	$(document).on('click', "[data-toggle='slide']", function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			slideMenu.find("[data-toggle='slide']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	$(document).on('click', "[data-toggle='sub-slide']", function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			slideMenu.find("[data-toggle='sub-slide']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
		$('.slide.active').addClass('is-expanded');
	});
	
	// Set initial active toggle
	$("[data-toggle='slide.'].is-expanded").parent().toggleClass('is-expanded');
	$("[data-toggle='sub-slide.'].is-expanded").parent().toggleClass('is-expanded');
	

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();

	// ______________Active Class
	//
	// Removido: o cálculo de "ativo" deste tema (baseado em comparar
	// window.location.href uma única vez) conflitava com o cálculo do
	// servidor (Blade, via request()->is(...) em cada render) — o Varandas
	// usa Livewire wire:navigate, então essa classe precisa ser recalculada
	// a cada navegação, o que só o Blade faz corretamente. Ver
	// resources/views/components/layouts/template/admitro/partials/sidebar.blade.php.

})();