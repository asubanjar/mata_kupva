// Define form element
const form = document.getElementById("add_form2");

var validator = FormValidation.formValidation(form, {
    fields: {
        jenis_naskah_code: {
            validators: {
                notEmpty: {
                    message: "Jenis naskah mohon diisi.",
                },
            },
        },
        is_public: {
            validators: {
                notEmpty: {
                    message: "Hak akses mohon diisi.",
                },
            },
        },
        nomor_naskah: {
            validators: {
                notEmpty: {
                    message: "Nomor Surat Mohon diisi.",
                },
            },
        },
        tanggal_naskah: {
            validators: {
                notEmpty: {
                    message: "Tanggal Naskah Mohon diisi.",
                },
            },
        },
        classification_code: {
            validators: {
                notEmpty: {
                    message: "Kode Klasifikasi Mohon diisi.",
                },
            },
        },
        urgensi_code: {
            validators: {
                notEmpty: {
                    message: "Tingkat Urgensi Mohon diisi.",
                },
            },
        },
        sifat_code: {
            validators: {
                notEmpty: {
                    message: "Sifat Naskah Mohon diisi.",
                },
            },
        },
        hal: {
            validators: {
                notEmpty: {
                    message: "Perihal Naskah Mohon diisi.",
                },
            },
        },
        jabatan_to_code: {
            validators: {
                notEmpty: {
                    message: "Tujuan Naskah Mohon diisi.",
                },
            },
        },
        signer_id: {
            validators: {
                notEmpty: {
                    message: "Penandatangan Naskah Mohon diisi.",
                },
            },
        },
        jenjang: {
            validators: {
                notEmpty: {
                    message: "Jenjang Persetujuan Mohon diisi.",
                },
            },
        },
        ttd_page: {
            validators: {
                notEmpty: {
                    message: "Halaman Tandatangan Mohon diisi.",
                },
            },
        },
        signer_quantity: {
            validators: {
                notEmpty: {
                    message: "Jumlah Penandatangan Mohon diisi.",
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
const submitButton = document.getElementById("submitNaskahDinas");
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
