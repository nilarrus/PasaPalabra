// estructura por concretar
    
function inicio() {
	$('.welcome-user').hide();
	$('.question-controls').show();
}
window.onload = function() {
	$('.question-controls').hide();
	$('.end-game').hide();
	$('#begin').on("click",inicio);
};
