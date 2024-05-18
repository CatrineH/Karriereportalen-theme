document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('previewModal');
    const closeModal = modal ? modal.querySelector('.close') : null;
    const previewButton = document.getElementById('previewButton');
    const publishButton = document.getElementById('publishButton');
    const form = document.getElementById('job_form');
    const progressBars = document.querySelectorAll('.progress-bar');

    if (!modal || !closeModal || !previewButton || !publishButton || !form || progressBars.length < 3) {
        console.error('Required DOM elements not found.');
        return;
    }

    function updateProgressBar(stepIndex) {
        progressBars.forEach((bar, index) => {
            if (index < stepIndex) {
                bar.style.backgroundColor = '#C61932'; // Completed color
                bar.style.color = 'white';
            } else if (index === stepIndex) {
                bar.style.backgroundColor = '#C61932'; // Active color
                bar.style.color = 'white';
            } else {
                bar.style.backgroundColor = '#fff'; // Inactive color
                bar.style.color = 'black';
            }
        });
    }

    function updatePreviewContent() {
        const bannerInput = document.getElementById('bannerInput').files[0] ? URL.createObjectURL(document.getElementById('bannerInput').files[0]) : '';
        const logoInput = document.getElementById('logoInput').files[0] ? URL.createObjectURL(document.getElementById('logoInput').files[0]) : '';
        const postTitle = document.getElementById('postTitle').value;
        const jobTitle = document.getElementById('jobTitle').value;
        const employmentType = document.getElementById('jobType').selectedOptions[0].text;
        const workplace = document.getElementById('workplace').value;
        const sector = document.getElementById('sector').selectedOptions[0].text;
        const employer = document.getElementById('employer').value;
        const industry = document.getElementById('industry').selectedOptions[0].text;
        const deadline = document.getElementById('deadline').value;
        const numberOfPositions = document.getElementById('numberOfPositions').selectedOptions[0].text;
        const editorData = window.editorInstance.getData();
        const contactPerson = document.getElementById('contactPerson').value;
        const applicationPhone = document.getElementById('applicationPhone').value;
        const applicationEmail = document.getElementById('applicationEmail').value;
        const applicationLink = document.getElementById('applicationLink').value;

        const googleMapsUrl = `https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=${encodeURIComponent(workplace)}`;

        const previewBody = document.getElementById('preview_body');
        previewBody.innerHTML = `
            <div class="banner-container">
                <img id="bannerPreview" class="banner" src="${bannerInput}" alt="Banner">
            </div>
            <img id="logoPreview" class="logo" src="${logoInput}" alt="Logo">
            <div class="container" style="padding-top: 50px;">
                <div class="row">
                    <h2 style="padding: 25px;">${postTitle}</h2>
                    <h4 style="padding: 25px;">${jobTitle}</h4>
                    <p style="padding: 25px; font-weight: bold;">Søknadsfrist: ${deadline}</p>
                    <div class="col-6 col-sm-4 mt-4">
                        <ul>
                            <p style="font-weight: bold;">Arbeidsgiver: ${employer}</p>
                            <p style="font-weight: bold;">Sted: ${workplace}</p>
                            <p style="font-weight: bold;">Antall stillinger: ${numberOfPositions}</p>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-3 mt-4">
                        <ul>
                            <p style="font-weight: bold;">Ansettelsesform: ${employmentType}</p>
                            <p style="font-weight: bold;">Sektor: ${sector}</p>
                            <p style="font-weight: bold;">Bransje: ${industry}</p>
                        </ul>
                    </div>
                    <hr>
                    <div class="full-width description">
                        <p style="font-weight: bold;"><strong>Beskrivelse:</strong></p>
                        <h5 style="font-weight: bold;">${editorData}</h5>
                    </div>
                    <div class="col-8 col-sm-3 mt-2">
                        <ul>
                            <p style="font-weight: bold;">Kontakt person: ${contactPerson}</p>
                            <p style="font-weight: bold;">Kontakt telefon: ${applicationPhone}</p>
                            <p style="font-weight: bold;">Søknadslink: ${applicationLink}</p>
                            <p style="font-weight: bold;">søknads epost: ${applicationEmail}</p>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <div class="job-address">
                            <h6>Addresse: ${workplace}</h6>
                            <iframe width="80%" height="300" style="border:0" loading="lazy" allowfullscreen
                                src="${googleMapsUrl}">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>`;
    }

    function handlePreview(event) {
        event.preventDefault();
        updatePreviewContent();
        modal.style.display = 'block';
        updateProgressBar(1); // Update to preview step
    }

    function handlePublish(event) {
        event.preventDefault();
        if (confirm('Er du sikker på at du ønsker å publisere denne annonsen?')) {
            updateProgressBar(2); // Update to publishing step
            const formData = new FormData(form);
            formData.append('description', editorInstance.getData());
            formData.append('action', 'upload_job_post_form'); // Matches action hook in WordPress
            formData.append('security', ajax_object.nonce); // Security nonce

            fetch(ajax_object.ajax_url, {
                method: 'POST',
                body: formData,
            })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    console.log('Annonsen ble publisert:', data);
                    updateProgressBar(2); // Update to control step after successful publish
                    window.location.href = 'din-annonse'; // Redirect after publishing
                } else {
                    console.error('Det har skjedd en feil:', data);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }
    }

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
        updateProgressBar(0); // Revert to initial step
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
            updateProgressBar(0); // Revert to initial step
        }
    });

    previewButton.addEventListener('click', handlePreview);
    publishButton.addEventListener('click', handlePublish);

    ClassicEditor.create(document.querySelector('#editor'))
    .then((editor) => {
        window.editorInstance = editor;
    })
    .catch((error) => {
        console.error('Error initializing the CKEditor:', error);
    });

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
