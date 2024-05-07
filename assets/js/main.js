// Hjelp fra ChatGPT - Get API Brrg.no mal
// It's important to mention that making API requests from the client side exposes the API endpoint directly within the client's browser, which could be a security concern. Make sure that this endpoint doesn't expose sensitive data or can't be abused for harmful activities. If there are such concerns, consider proxying the request through a backend server that you control, where you can also implement additional security measures like API keys or tokens.

// User fills out the form and submits the organisasjonsnummer.
// The form submission triggers a JavaScript function that prevents the default form submission action.
// The JavaScript function makes an asynchronous API call with the organisasjonsnummer.
// If the API call is successful and the organisasjonsnummer is valid (based on API response), the JavaScript function then redirects the user to reg-form-2.
// If the API call is not successful or the organisasjonsnummer is not valid, the user is shown an error message and remains on the current page.

  
document.getElementById('apiForm').addEventListener('submit', function(event) {
	event.preventDefault(); // Prevent the default form submission
  
	const organisationNumber = document.getElementById('organisationNumber').value;
	// API endpoint with query parameter for organization number
	const apiUrl = `https://data.brreg.no/enhetsregisteret/api/enheter/${organisationNumber}`;
  
	fetch(apiUrl)
	.then(response => response.json())
	.then(data => {
	  // Check if the API call was correct by examining the response data
	  if (data && data.organisasjonsnummer) {
		// Redirect to second registration form page if API response is successful
		window.location.href = `${window.location.origin}/reg-form-2`;
	  } else {
		// Handle unsuccessful API interaction
		alert('Organisasjonsnummeret er ikke gyldig. Vennligst prøv igjen.');
	  }
	})
	.catch((error) => {
	  console.error('Error:', error);
	  alert('Det oppstod en feil ved forespørselen. Vennligst prøv igjen.');
	});
  });
  




  // Hente bildefiler til annonseringsskjema
  function previewImage(inputId, imgId) {
    var file = document.getElementById(inputId).files[0];
    if (!file) {
        document.getElementById(imgId).src = "";
        return;
    }

    var reader = new FileReader();
    
    reader.onload = function(e) {
		console.log("Bilde lastet: ", e.target.result);  // kan fjerne denne linjen, kun til test
        var image = new Image();
        image.src = e.target.result;
        image.onload = function() {
            document.getElementById(imgId).src = image.src;
			document.getElementById(imgId).style.display = 'block';
        };
    };

    reader.onerror = function() {
        console.error("Det oppsto en feil ved lasting av filen! Sjekk størrelsen på filen din og prøv igjen.");
        document.getElementById(imgId).src = "";
    };
    
    reader.readAsDataURL(file);
}

document.addEventListener('DOMContentLoaded', function () {
    var bannerInput = document.getElementById('Banner');
    var logoInput = document.getElementById('logo');
    var bannerImage = document.getElementById('bannerPreview');
    var logoImage = document.getElementById('logoPreview');
    var bannerCropper, logoCropper;

    function initCropper(imgElement, inputElement, aspectRatio) {
        if (inputElement) {
            inputElement.addEventListener('change', function (event) {
                var files = event.target.files;
                if (files && files.length > 0) {
                    var fileReader = new FileReader();
                    fileReader.onload = function () {
                        imgElement.src = fileReader.result;
                        imgElement.style.display = 'block';
                        if (imgElement === bannerImage) {
                            if (bannerCropper) bannerCropper.destroy();
                            bannerCropper = new Cropper(imgElement, { aspectRatio: aspectRatio });
                        } else {
                            if (logoCropper) logoCropper.destroy();
                            logoCropper = new Cropper(imgElement, { aspectRatio: aspectRatio });
                        }
                    };
                    fileReader.readAsDataURL(files[0]);
                }
            });
        }
    }

    initCropper(bannerImage, bannerInput, 950 / 200);
    initCropper(logoImage, logoInput, 1);
});
