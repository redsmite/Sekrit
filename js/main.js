// Get Company Name
function changeCompanyName(firstText,secondText){	
	var companyName= firstText+" "+secondText;
	document.getElementById("first-text").innerHTML = firstText;
	document.getElementById("second-text").innerHTML = secondText;
	document.getElementById("company").innerHTML = companyName;
	document.title= companyName;
}

//sideMenu
function openSlideMenu(){
	document.getElementById('side-menu').style.width='90px';
	document.getElementById('side-menu').marginleft='90px';
}

function closeSlideMenu(){
	document.getElementById('side-menu').style.width='0';
	document.getElementById('side-menu').marginleft='0';
}

// Create modal
function modal(){
	// Get modal element
	var modal = document.getElementById('simpleModal');
	// Get open modal button
	var modalBtn = document.getElementById('modalBtn');
	//Get close Button
	var closeBtn = document.getElementById('closeBtn');

	// Listen for open click
	modalBtn.addEventListener('click',openModal);

	// Listen for close click
	closeBtn.addEventListener('click',closeModal);

	// Listen for outside click
	window/addEventListener('click',outsideClick);


	//function to open modal
	function openModal(){
		modal.style.display = 'block';
	}

	//function to close modal
	function closeModal(){
		modal.style.display = 'none';
	}

	function outsideClick(e){
		if(e.target==modal){
		modal.style.display = 'none';
		}
	}
}

// Pseudo Main Method

changeCompanyName('This','Company');
modal();