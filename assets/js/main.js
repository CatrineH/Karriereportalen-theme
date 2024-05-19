document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('previewModal');
    const closeModal = modal ? modal.querySelector('.close') : null;
    const previewButton = document.getElementById('previewButton');
    const publishButton = document.getElementById('publishButton');
    const form = document.getElementById('job_form');
    const progressBars = document.querySelectorAll('.progress-bar');
    const addContactButton = document.getElementById('addContactButton');
    const contactContainer = document.getElementById('contactContainer');

    if (!modal || !closeModal || !previewButton || !publishButton || !form || progressBars.length < 3) {
        console.error('Required DOM elements not found.');
        return;
    }

    let contactCounter = 1;

    addContactButton.addEventListener('click', function () {
        contactCounter++;
        const newContactEntry = document.createElement('div');
        newContactEntry.classList.add('input-group', 'mt-2');
        newContactEntry.innerHTML = `
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa-solid fa-user-group"></i>
                </span>
            </div>
            <input id="contactPerson${contactCounter}" name="contactPerson[]" type="text" placeholder="Kontaktperson" class="form-control input-md">
            <input id="applicationPhone${contactCounter}" name="applicationPhone[]" type="tel" placeholder="Telefonnummer" class="form-control input-md">
        `;
        contactContainer.appendChild(newContactEntry);
    });

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
        const applicationEmail = document.getElementById('applicationEmail').value;
        const applicationLink = document.getElementById('applicationLink').value;

        const googleMapsUrl = `https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=${encodeURIComponent(workplace)}`;

        let contactInfo = '';
        for (let i = 1; i <= contactCounter; i++) {
            const contactPerson = document.getElementById(`contactPerson${i}`).value;
            const applicationPhone = document.getElementById(`applicationPhone${i}`).value;
            if (contactPerson || applicationPhone) {
                contactInfo += `
                    <p style="font-weight: bold;">Kontakt person: <span style="font-weight: normal;">${contactPerson}</span></p>
                    <p style="font-weight: bold;">Kontakt telefon: <span style="font-weight: normal;">${applicationPhone}</span></p>
                `;
            }
        }

        const previewBody = document.getElementById('preview_body');
        previewBody.innerHTML = `
            <div class="banner-container">
                <img id="bannerPreview" class="banner" src="${bannerInput}" alt="Banner">
            </div>
            <img id="logoPreview" class="logo" src="${logoInput}" alt="Logo">
            <div class="container" style="padding-top: 50px;">
                <div class="row">
                    <h2 style="padding: 25px;">${postTitle}</h2>
                    <h4 style="padding: 25px; color: #9E182F;">${jobTitle}</h4>
                    <p style="padding: 20px; font-weight: bold;">Søknadsfrist: <span style="font-weight: normal;">${deadline}</span></p>
                    <div class="col-6 col-sm-4 mt-4">
                        <ul>
                            <p style="font-weight: bold;">Arbeidsgiver: <span style="font-weight: normal;">${employer}</span></p>
                            <p style="font-weight: bold;">Sted: <span style="font-weight: normal;">${workplace}</span></p>
                            <p style="font-weight: bold;">Antall stillinger: <span style="font-weight: normal;">${numberOfPositions}</span></p>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 mt-4">
                        <ul>
                            <p style="font-weight: bold;">Ansettelsesform: <span style="font-weight: normal;">${employmentType}</span></p>
                            <p style="font-weight: bold;">Sektor: <span style="font-weight: normal;">${sector}</span></p>
                            <p style="font-weight: bold;">Bransje: <span style="font-weight: normal;">${industry}</span></p>
                        </ul>
                    </div>
                    <hr>
                    <div class="full-width">
                        <p style="font-weight: bold;"><strong>Beskrivelse:</strong></p>
                        <h5 style="font-weight: bold;"><span style="font-weight: normal;">${editorData}</span></h5>
                    </div>
                    <hr>
                    <div class="full-width">
                        <p style="font-weight: bold;"><strong>Kontakt informasjon</strong></p>
                        <ul>
                            ${applicationLink ? `<p style="font-weight: bold;">Søknadslink: <span style="font-weight: normal;">${applicationLink}</span></p>` : ''}
                            ${applicationEmail ? `<p style="font-weight: bold;">søknads epost: <span style="font-weight: normal;">${applicationEmail}</span></p>` : ''}
                        </ul>
                    </div>
                    <div class="full-width">
                        ${contactInfo}
                    </div>
                    <hr>
                    <div class="job-address">
                        <h6 style="font-weight: bold;">Addresse: <span style="font-weight: normal;">${workplace}</span></h6>
                        <iframe width="80%" height="300" style="border:0" loading="lazy" allowfullscreen
                            src="${googleMapsUrl}">
                        </iframe>
                    </div>
                </div>
            </div>`;
    }

    function handlePreview(event) {
        event.preventDefault();
        updatePreviewContent();
        modal.style.display = 'block';
        updateProgressBar(1); // Oppdater til forhåndsvisningssteget
    }

    function handlePublish(event) {
        event.preventDefault();
        if (!confirm('Er du sikker på at du ønsker å publisere denne annonsen?')) {
            return; // Brukeren valgte å avbryte, fortsett ikke med publiseringen
        }

        updateProgressBar(2); // Oppdater til publiseringssteget
        const formData = new FormData(form);
        formData.append('description', editorInstance.getData());
        formData.append('action', 'upload_job_post_form'); // Matcher action hook i WordPress
        formData.append('security', ajax_object.nonce); // Security nonce

        fetch(ajax_object.ajax_url, {
            method: 'POST',
            body: formData,
        })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                console.log('Annonsen ble publisert:', data);
                updateProgressBar(2); // Oppdater til kontrollsteget etter vellykket publisering
                window.location.href = 'din-annonse'; // Omdiriger etter publisering
            } else {
                console.error('Det har skjedd en feil:', data);
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
        updateProgressBar(0); // Tilbake til startsteget
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
            updateProgressBar(0); // Tilbake til startsteget
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
