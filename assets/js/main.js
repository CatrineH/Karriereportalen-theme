
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

		const previewBody = document.getElementById('preview_body');
		previewBody.innerHTML = `
        <div class="banner-container"> 
            <img id="bannerPreview" class='banner' src='${bannerInput}' alt='Banner'>
            </div>
            <img id="logoPreview" class='logo' src='${logoInput}' alt='Logo'>
                <h1 style="margin-top: 50px;>${title}</h1>
            
            <hr style='margin-bottom: 50px; margin-top: 50px;'>
            <p style="font-style:Bold;">Detaljer</p>
            <div class='columnPreview'>
           
                <div><h6>${jobTitle}</h6></div>
                <div><p>Ansettelsesform: ${employmentType}</p></div>
                <div><p>Arbeidsted: ${workplace}</p></div>
            </div>
          
            <div class='columnPreview'>
                <div><p>Sektor: ${sector}</p></div>
                <div><p>Arbeidsgiver: ${employer}</p></div>
                <div><p>Bransje: ${industry}</p></div>
            </div>
            <hr style='margin-bottom: 20px; margin-top: 20px;'>
            <div class='full-width description'>
            <p style="font-style:Bold;">Beskrivelse</p>
                <div><div>${editorData}</div></div>
            </div>
            <div class='columnPreview'>
                <div><p>Frist: ${deadline}</p></div>
                <div><p>Antall stillinger: ${numberOfPositions}</p></div>
            </div>
        `;
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
