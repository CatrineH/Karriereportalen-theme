// PREVIEW ANNONSE

document.addEventListener('DOMContentLoaded', function () {
	const previewButton = document.getElementById('previewButton');
	const modal = document.getElementById('previewModal');
	const closeModal = modal.querySelector('.close');

	previewButton.addEventListener('click', function (event) {
		event.preventDefault();
		if (!window.editorInstance) {
			console.error('Editor has not been initialized.');
			return;
		}

		// Dynamically update modal content
		updatePreviewContent();

		// Display the modal
		modal.style.display = 'block';
	});

	closeModal.addEventListener('click', function () {
		modal.style.display = 'none';
	});

	window.addEventListener('click', function (event) {
		if (event.target === modal) {
			modal.style.display = 'none';
		}
	});

	function updatePreviewContent() {
		const bannerInput = document.getElementById('bannerPreview').src;
		const logoInput = document.getElementById('logoPreview').src;
		const title = document.getElementById('post_title').value;
		const jobTitle = document.getElementById('job_title').value;

		const employmentTypeSelect = document.getElementById('employment_type');
		const employmentType =
			employmentTypeSelect.options[employmentTypeSelect.selectedIndex].text;

		const workplace = document.getElementById('workplace').value;

		const sectorSelect = document.getElementById('sector');
		const sector = sectorSelect.options[sectorSelect.selectedIndex].text;

		const employer = document.getElementById('employer').value;

		const industrySelect = document.getElementById('industry');
		const industry = industrySelect.options[industrySelect.selectedIndex].text;

		const deadline = document.getElementById('deadline').value;

		const numberOfPositionsSelect =
			document.getElementById('numberOfPositions');
		const numberOfPositions =
			numberOfPositionsSelect.options[numberOfPositionsSelect.selectedIndex]
				.text;

		const editorData = window.editorInstance.getData();


	// ------------------------ TESTING --------------------------//
	const previewBody = document.getElementById('preview_body');
	previewBody.innerHTML = `
	<div class="banner-container">
	<img id="bannerPreview" class="banner" src="${bannerInput}" alt="Banner">
</div>
<img id="logoPreview" class="logo" src="${logoInput}" alt="Logo">
	<div class="container" style="padding-top: 50px;">
	<div class="row" >
	<h2 style="padding: 25px;">${title} </h2> 
	<h4 style="padding: 25px;">${jobTitle}</h4>
	<p style="padding: 25px; font-weight: bold;">Søknadsfrist: ${deadline} </p>

	<div class="col-6 col-sm-4 mt-4">
		<ul>
		<p style="font-weight: bold;">Arbeidsgiver: ${employer} </p>
		<p style="font-weight: bold;"> Sted: ${workplace}</p>
		<p style="font-weight: bold;">Antall stillinger: ${numberOfPositions} </p>
		</ul>
	</div>

	<div class="col-6 col-sm-3 mt-4" >
		<ul> 
		<p style="font-weight: bold;">Ansettelsesform: ${employmentType} </p>
		<p style="font-weight: bold;">Sektor: ${sector} </p>
		<p style="font-weight: bold;">Bransje: ${industry} </p>
		</ul>
	</div>
	
<hr>

<div class="full-width description">
	<p style="font-weight: bold;><strong>Beskrivelse: </strong></p>
	   <h5 style="font-weight: bold;">Beskrivelse: ${editorData} </h5>
	<!-- <div><?= nl2br(htmlspecialchars($description)) ?></div> -->
</div>


<hr>
<!-- Google Maps Embed -->
<div>
	<div class="job-address">
		<h6>Addresse: ${workplace}</h6>
<iframe width="80%"
		height="300"
		style="border:0"
		loading="lazy"
		allowfullscreen
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1995.9878953729372!2d10.753945316406016!3d59.90924448187622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416e61f267f039%3A0x7e92605fd3231e9a!2sDronning%20Eufemias%20gate%2010%2C%200191%20Oslo%2C%20Norway!5e0!3m2!1sen!2sus!4v1609435345436!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
		 <!-- src="<?= $mapsUrl ?>">  -->
</iframe>
	`	
	;
	}

	ClassicEditor.create(document.querySelector('#editor'))
		.then((editor) => {
			window.editorInstance = editor;
		})
		.catch((error) => {
			console.error('Error initializing the CKEditor:', error);
		});

	// Bilde og logo upload
	['bannerInput', 'logoInput'].forEach((id) => {
		const input = document.getElementById(id);
		const preview = document.getElementById(id.replace('Input', 'Preview'));
		input.onchange = function () {
			const file = input.files[0];
			if (file) {
				const reader = new FileReader();
				reader.onload = function (e) {
					preview.src = e.target.result;
				};
				reader.readAsDataURL(file);
			}
		};
	});
});

// PROGRESS STEPPER ANNONSE

document.addEventListener('DOMContentLoaded', function() {
    const previewButton = document.getElementById('previewButton');
    const closeModalButton = document.querySelector('.modal .close'); 
    const progressBars = document.querySelectorAll('.progress-bar');
    const modal = document.getElementById('previewModal');

    // Function to update progress bar styling
    function updateProgressBar(stepIndex) {
        progressBars.forEach((bar, index) => {
            if (index < stepIndex) {
                bar.style.backgroundColor = '#C61932'; // Active color
                bar.style.color = 'white';
            } else {
                bar.style.backgroundColor = '#fff'; // Inactive color
                bar.style.color = 'black';
            }
        });
    }

    // Event listener to open modal and update progress bar
    previewButton.addEventListener('click', function() {
        modal.style.display = 'block';
        updateProgressBar(2); // Assuming index 0 is 'Ny stillingsannonse', 1 is 'Forhåndsvis'
    });

    // Event listener to close modal and revert progress bar
    closeModalButton.addEventListener('click', function() {
        modal.style.display = 'none';
        updateProgressBar(1); // Revert to 'Ny stillingsannonse'
    });

    // If clicking outside the modal content closes the modal
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            updateProgressBar(1); // Revert to 'Ny stillingsannonse'
        }
    });
});


// PUBLISERE ANNONSE

const publishButton = document.getElementById('publishButton');
publishButton.addEventListener('click', function(event) {
    event.preventDefault();
    const formData = new FormData();
	updateProgressBar(3); 
    // Legge til form data til formData object
    formData.append('action', 'upload_job_post_form');  // Matcher action hook in WordPress
    formData.append('security', ajax_object.nonce);  // Security nonce
    formData.append('title', document.getElementById('post_title').value);
   	formData.append('jobTitle', document.getElementById('jobTitle').value);
   	formData.append('employer', document.getElementById('employer').value);
   	formData.append('workplace', document.getElementById('workplace').value);
	formData.append('numberOfPositions', document.getElementById('numberOfPositions').value);
	formData.append('employmentType', document.getElementById('employmentType').value);
	formData.append('sector', document.getElementById('sector').value);
	formData.append('industry', document.getElementById('industry').value);
	formData.append('description', document.getElementById('editor').value);
	formData.append('banner', document.getElementById('bannerInput').files[0]);
	formData.append('logo', document.getElementById('logoInput').files[0]);


    
    fetch(ajax_object.ajax_url, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.success) {
            console.log('Annonsen ble publisert:', data);
            
        } else {
            console.error('Det har skjedd en feil:', data);
            // Handle errors here
        }
    });
});
