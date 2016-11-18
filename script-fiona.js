window.addEventListener("load", function() {

	var massageDivs = document.getElementsByClassName("content__title");
	for (var i = 0; i < massageDivs.length; i++) {
		
		massageDivs[i].addEventListener("click", displayContent);
	}

	function displayContent(event) {
		debugger;
		var background = document.getElementsByClassName("massage-background");
		background[0].style.display = "block";

		var content = document.getElementById(event.target.dataset.contentTitle);
		content.style.display = "block";
		}



	var closeWindows = document.getElementsByClassName("close-x");
	for (var i = 0; i < closeWindows.length; i++) {
		
		closeWindows[i].addEventListener("click", hideContent);
	}

	function hideContent(event) {
		debugger;
		var background = document.getElementsByClassName("massage-background");
		background[0].style.display = "none";

		var content = document.getElementById(event.target.dataset.contentTitle);
		content.style.display = "none";
		}

});
	