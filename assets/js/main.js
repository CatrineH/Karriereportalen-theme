// Funksjon for å gå til neste trinn
function goToStep(stepNumber) {
	// Skjul alle trinn
	document.querySelectorAll(".registration-step").forEach(function (step) {
		step.style.display = "none";
	});

	// Vis nåværende trinn
	document.querySelector("#step-" + stepNumber).style.display = "block";
}

// AJAX-funksjon for å sende data til serveren
function sendRegistrationStepData(formData, stepNumber) {
	// Send data med AJAX til en WordPress action hook (tilrettelegger for server-side PHP)
	// På suksess, gå til neste trinn
	goToStep(stepNumber + 1);
}

// Event listeners for knapper eller skjemaer
document
	.querySelector("#registration-step-1-form")
	.addEventListener("submit", function (e) {
		e.preventDefault();
		var formData = new FormData(this);
		sendRegistrationStepData(formData, 1);
	});

document.addEventListener("DOMContentLoaded", function () {
	const modal = document.querySelector(".modal-brg-api");
	const modalBg = document.querySelector(".popup-bg-darkred");

	// Vis modal og bakgrunn
	modal.style.display = "block";
	modalBg.style.display = "block";

	// Håndter lukking av modal
	document.querySelectorAll(".button-ja, .button-nei").forEach((button) => {
		button.addEventListener("click", function () {
			modal.style.display = "none";
			modalBg.style.display = "none";
		});
	});
});


// Job-post custom file input label change
document.addEventListener('DOMContentLoaded', function () {
	var jobImageInput = document.getElementById('job-image');
	jobImageInput.addEventListener('change', function(event) {
	  var inputFile = event.target;
	  var label = inputFile.nextElementSibling;
	  label.textContent = inputFile.files[0].name;
	});
  });

  // Handle the custom file input label change
jQuery(document).ready(function($) {
    $(document).on('change', '.custom-file-input', function(event) {
        $(this).next('.custom-file-label').html(event.target.files[0].name);
    })
});

  