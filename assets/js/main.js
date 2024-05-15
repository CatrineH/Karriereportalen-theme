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

		const previewBody = document.getElementById('preview_body');
		previewBody.innerHTML = `
		<div class="banner-container">
		<img id="bannerPreview" class="banner" src="${bannerInput}" alt="Banner">
	</div>
	<img id="logoPreview" class="logo" src="${logoInput}" alt="Logo">
	
	<hr style="margin-bottom: 50px; margin-top: 50px;">
	<div><h1>${title}</h1></div>
	<div><h5>${jobTitle}</h5></div>
	<div class="columnPreview">
		
		<div>
			<div><p style="font-weight: bold;>Søknadsfrist: ${deadline}</p></div>
			<div><p style="font-weight: bold;">Ansettelsesform: ${employmentType}</p></div>
			<div><p style="font-weight: bold;">Arbeidsted: ${workplace}</p></div>
		</div>
	</div>
	
	<div class="columnPreview">
		<div><p style="font-weight: bold;>Sektor: ${sector}</p></div>
		<div><p style="font-weight: bold;>Arbeidsgiver: ${employer}</p></div>
		<div><p style="font-weight: bold;>Bransje: ${industry}</p></div>
		<div><p style="font-weight: bold;>Antall stillinger: ${numberOfPositions}</p></div>
	</div>
	
	<hr style="margin-bottom: 20px; margin-top: 20px;">
	<div class="full-width description">
		<p style="font-weight: bold;">Beskrivelse</p>
		<div>${editorData}</div>
	</div>
	
	<div class="columnPreview">
		<div><p style="font-weight: bold;>Antall stillinger: ${numberOfPositions}</p></div>
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

// PROGRESS STEPPER ANNONSE

// Define HTML elements for control and display
const progress = document.getElementById('progress-stepper');
const circles = document.querySelectorAll('.circle');
const steps = document.getElementById([
	'draftButton',
	'previewButton',
	'publishButton',
	'close',
]);
const stepButtons = steps.map((step) => document.getElementById(step));

let currentActive = 0; // Initialize current step at the first step

// Update the stepper status based on the current step
function updateStep(newStepIndex) {
	currentActive = newStepIndex;
	circles.forEach((circle, idx) => {
		if (idx <= currentActive) {
			circle.classList.add('active');
		} else {
			circle.classList.remove('active');
		}
	});

	// Update progress bar width
	const activeCircles = document.querySelectorAll('.active');
	progress.style.width =
		((activeCircles.length - 1) / (circles.length - 1)) * 100 + '%';

	// Update button states
	stepButtons.forEach((button, idx) => {
		button.disabled = idx === currentActive;
	});
}

// Attach event listeners to step buttons to handle navigation
stepButtons.forEach((button, idx) => {
	button.addEventListener('click', () => updateStep(idx));
});

// Initial update to set default states
updateStep(0);

// Sticky progress stepper logic
document.addEventListener('DOMContentLoaded', function () {
	const header = document.querySelector('header.container-fluid.sticky-top');
	const stepper = document.querySelector('.progress-container-stepper');

	function adjustStepper() {
		const headerWidth = header.offsetWidth;

		if (window.scrollY > header.offsetHeight) {
			stepper.style.width = headerWidth + 'px';
			stepper.style.position = 'fixed';
			stepper.style.top = '0';
			stepper.style.left = '0';
			stepper.style.right = '0';
		} else {
			stepper.style.width = '100%';
			stepper.style.position = 'static';
		}
	}

	adjustStepper();
	window.addEventListener('resize', adjustStepper);
	window.addEventListener('scroll', adjustStepper);
});
// Function to update the stepper to a specific step
function updateStep(newStepIndex) {
	currentActive = newStepIndex;
	circles.forEach((circle, idx) => {
		if (idx <= currentActive) {
			circle.classList.add('active');
		} else {
			circle.classList.remove('active');
		}
	});

	const activeCircles = document.querySelectorAll('.active');
	progress.style.width =
		((activeCircles.length - 1) / (circles.length - 1)) * 100 + '%';

	stepButtons.forEach((button, idx) => {
		button.disabled = idx === currentActive;
	});
}

// Function to handle closing the modal
function closeModal() {
	// Your modal close logic here
	// Example: if using Bootstrap, you might use:
	$('#myModal').modal('hide');

	// After closing the modal, reset the stepper to the first step
	updateStep(0);
}

// Add event listener for modal close button
document
	.getElementById('closeModalButton')
	.addEventListener('click', closeModal);

// Initialize the stepper to the first step
updateStep(0);
