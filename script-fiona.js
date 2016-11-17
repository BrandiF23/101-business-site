window.addEventListener("load", function() {
	var swedishDiv = document.getElementById("content__swedish");
	swedishDiv.addEventListener("click", displaySwedish);

	function displaySwedish() {
		debugger;
		var modalElements = document.getElementsByClassName("swedish");
		// console.log(modalElements.length);
		for (var i = 0; i < modalElements.length; i++) {
			// console.log("Starting on index " + i + " of modalElements");
			modalElements[i].style.display = "block";
		}
	}

	var closeWindowSwedish = document.getElementById("close");
	closeWindowSwedish.addEventListener("click", hideSwedish);

	function hideSwedish() {
		var modalElements = document.getElementsByClassName("swedish");
		for (var i = 0; i < modalElements.length; i++) {
				modalElements[i].style.display = "none";
		}
	}

	var deepTissueDiv = document.getElementById("content__tissue");
	deepTissueDiv.addEventListener("click", displayTissue);

	function displayTissue() {
		debugger;
		var modalElements = document.getElementsByClassName("tissue");
		// console.log(modalElements.length);
		for (var i = 0; i < modalElements.length; i++) {
			// console.log("Starting on index " + i + " of modalElements");
			modalElements[i].style.display = "block";
		}
	}

	var closeWindowTissue = document.getElementById("close-tissue");
	closeWindowTissue.addEventListener("click", hideTissue);

	function hideTissue() {
		var modalElements = document.getElementsByClassName("tissue");
		for (var i = 0; i < modalElements.length; i++) {
				modalElements[i].style.display = "none";
		}
	}

	var deepStoneDiv = document.getElementById("content__stone");
	deepStoneDiv.addEventListener("click", displayStone);

	function displayStone() {
		debugger;
		var modalElements = document.getElementsByClassName("stone");
		// console.log(modalElements.length);
		for (var i = 0; i < modalElements.length; i++) {
			// console.log("Starting on index " + i + " of modalElements");
			modalElements[i].style.display = "block";
		}
	}

	var closeWindowStone = document.getElementById("close-stone");
	closeWindowStone.addEventListener("click", hideStone);

	function hideStone() {
		var modalElements = document.getElementsByClassName("stone");
		for (var i = 0; i < modalElements.length; i++) {
				modalElements[i].style.display = "none";
		}
	}
});