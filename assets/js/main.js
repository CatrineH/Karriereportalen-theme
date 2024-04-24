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
  
  