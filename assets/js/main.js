document.addEventListener("DOMContentLoaded", function() {
    const previewButton = document.getElementById("previewButton");
    const modal = document.getElementById("previewModal");
    const closeModal = document.querySelector(".close");
    const modalBody = document.getElementById("modal-body");

    previewButton.addEventListener("click", function(event) {
        event.preventDefault(); 
        const formData = {
            annonsetittel: document.getElementById("post_title").value,
            stillingstittel: document.getElementById("job_title").value,
            ansettelsesform: document.getElementById("employment_type").value,
            arbeidsted: document.getElementById("workplace").value,
            sektor: document.getElementById("sector").value,
            arbeidsgiver: document.getElementById("employer").value,
            bransje: document.getElementById("industry").value,
            frist: document.getElementById("deadline").value,
            antstillinger: document.getElementById("antstillinger").value,
            beskrivelse: ClassicEditor.instances.editor.getData(), 
            søkelink: document.getElementById("contact_person").value,
            epost: document.getElementById("application_email").value,
            telefon: document.getElementById("phone").value
        };

        let previewHTML = `
            <h3>${formData.annonsetittel}</h3>
            <p>Stillingstittel: ${formData.stillingstittel}</p>
            <p>Ansettelsesform: ${formData.ansettelsesform}</p>
            <p>Arbeidsted: ${formData.arbeidsted}</p>
            <p>Sektor: ${formData.sektor}</p>
            <p>Arbeidsgiver: ${formData.arbeidsgiver}</p>
            <p>Bransje: ${formData.bransje}</p>
            <p>Frist: ${formData.frist}</p>
            <p>Antall stillinger: ${formData.antstillinger}</p>
            <p>Beskrivelse: ${formData.beskrivelse}</p>
            <p>Søkelink: ${formData.søkelink}</p>
            <p>Epost: ${formData.epost}</p>
            <p>Telefon: ${formData.telefon}</p>
        `;

        modalBody.innerHTML = previewHTML;
        modal.style.display = "block";
    });

    closeModal.addEventListener("click", function() {
        modal.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});
    // Hente bilde i form
    ["bannerInput", "logoInput"].forEach((id) => {
        const input = document.getElementById(id);
        const image = document.getElementById(id.replace("Input", "Preview"));
        input.addEventListener("change", function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => (image.src = e.target.result);
                reader.readAsDataURL(file);
            }
        });
    });

