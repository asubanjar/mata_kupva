// Define form element
const form = document.getElementById("add_form");

var validator = FormValidation.formValidation(form, {
    fields: {
        status_peserta: {
            validators: {
                notEmpty: {
                    message: "Status Peserta Mohon diisi",
                },
            },
        },
        instansi_peserta: {
            validators: {
                notEmpty: {
                    message: "Instansi Peserta Mohon diisi",
                },
            },
        },
        pembiayaan_anggaran: {
            validators: {
                notEmpty: {
                    message: "Pembiayaan Anggaran Mohon diisi",
                },
            },
        },
        "tanggal[]": {
            validators: {
                choice: {
                    min: 1,
                    message: "Tanggal Harus dipilih minimal 1",
                },
            },
        },
    },

    plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: ".fv-row",
            eleInvalidClass: "",
            eleValidClass: "",
        }),
    },
});

// Submit button handler
const submitButton = document.getElementById("submitPeserta");
submitButton.addEventListener("click", function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            if (status == "Valid") {
                // Show loading indication
                submitButton.setAttribute("data-kt-indicator", "on");

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute("data-kt-indicator");

                    form.submit(); // Submit form
                }, 1000);
            }
        });
    }
});
