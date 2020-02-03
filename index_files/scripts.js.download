jQuery( document ).ready( function ( $ ) {
	'use strict';
	/*
	|--------------------------------------------------------------------------
	| Developer mode
	|--------------------------------------------------------------------------
	|
	| Set to true - it will allow printing in the console. Alsways check for this
	| variables when running tests so you dont forget about certain console.logs.
	| Id needed for development testing this variable should be used.
	|
	*/
	const devMode = function() {
		return true;
	};

	// Disable console.log for production site.
	if ( ! devMode() ) {
		console.log = function() {};
	}

	$('.portraits-container').off('click');
	$('.portraits-container').click(function(){
		if ($(this).hasClass('is-active')) {
			$(this).parents('.portraits-item').removeClass('is-active')
			$(this).removeClass('is-active');
		} else {
			$('.portraits-container').removeClass('is-active');
			$('.portraits-item').removeClass('is-active');
			$(this).parents('.portraits-item').addClass('is-active')
			$(this).addClass("is-active");

			// pick info from the portrait
			handlePortraits();
		}
	});

	// Handle the information from the portrait, assign to the board
	function handlePortraits() {
		if (! $('.board-informational-main').hasClass('is-activated')) {
			$('.board-informational-main').addClass('is-activated');
		}

		var selectedPortrait = $('.portraits-item.is-active');
		var selectedThumb = $(selectedPortrait).find('img').attr('src');
		var selectedTitle = (selectedPortrait).find('.portrait-content h4').text();

		var selectedTypeof = $(selectedPortrait).find('.portraits-hidden .portrait-board-typeof').text();
		var selectedEarnedDate = $(selectedPortrait).find('.portraits-hidden .portrait-board-earned').text();
		var selectedDesc = $(selectedPortrait).find('.portraits-hidden .portrait-board-desc').text();
		var selectedMainTitle = $(selectedPortrait).find('.portraits-hidden .portrait-board-title').text();

		$('.board-title-small').text(selectedTitle);
		$('.board-icon img').attr('src', selectedThumb);
		$('.board-title').text(selectedMainTitle);
		$('.board-description').text(selectedDesc);
		$('.board-earned-date').text(selectedEarnedDate);
		$('.board-type').text(selectedTypeof);

		console.log(selectedTypeof);

	} 
});