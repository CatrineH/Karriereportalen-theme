document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("upload-form");
    const previewBtn = document.getElementById("previewButton");
    const modal = document.getElementById("previewModal");
    const closeModal = document.getElementsByClassName("close")[0];

    // Forhåndsvisningsknappen aktiverer modalen og laster data
    previewBtn.onclick = function () {
        modal.style.display = "block";
        loadPreviewData();
    };

    // Lukkeknapper for modalen
    closeModal.onclick = function () {
        modal.style.display = "none";
    };
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

    // Last inn forhåndsvisningsdata
    function loadPreviewData() {
        var formData = new FormData(form);
        formData.append("action", "preview_job_ad"); // Denne handlingen må håndteres i WordPress

        fetch(ajax_object.ajax_url, {
            method: "POST",
            body: formData,
            credentials: "same-origin",
        })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                document.getElementById("modal-body").innerHTML = data.html;
            } else {
                document.getElementById("modal-body").innerHTML =
                    "<p>Det oppsto en feil under generering av forhåndsvisningen: " +
                    data.message +
                    "</p>";
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            document.getElementById("modal-body").innerHTML =
                "<p>Det oppsto en teknisk feil: " + error.message + "</p>";
        });
    }

    // Håndter opplasting av form
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(this);
        formData.append("action", "handle_job_form_upload");
        formData.append("security", ajax_object.nonce);

        fetch(ajax_object.ajax_url, {
            method: "POST",
            body: formData,
            credentials: "same-origin",
        })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                alert("Opplasting vellykket. Banner ID: " + data.ids.banner_id + ", Logo ID: " + data.ids.logo_id);
            } else {
                alert("Feil ved opplasting: " + data.message);
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            alert("Feil ved forespørsel: " + error.message);
        });
    });

    // Bilde forhåndsvisning
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
});




$(document).ready(function() {
    $('#bannerPreview').draggable({
        axis: 'y',  // Begrenser bevegelsen til vertikal akse
        cursor: 'ns-resize',  // Endrer markør for bedre visuell indikasjon
        containment: "parent",  // Holder bevegelsen innenfor bannerområdet
        drag: function(event, ui) {
            // Justeringskode for å håndtere hvordan bildet beveger seg
            var moveY = ui.position.top - $(this).data('startTop');
            $(this).css('top', moveY + 'px');
        },
        start: function(event, ui) {
            $(this).data('startTop', ui.position.top);
        },
        stop: function() {
            // Kan inkludere kode for å låse inn endelig posisjon ved stopp
        }
    });

    $('#bannerInput').change(function(e) {
        if (e.target.files && e.target.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#bannerPreview').attr('src', e.target.result);
                // Resentrer bildet for å forhindre uønskede effekter ved nytt bilde
                $('#bannerPreview').css({
                    top: '50%',
                    transform: 'translateY(-50%)'
                });
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });
});






