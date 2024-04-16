// Define form element
const form = document.getElementById("add_form2");
console.log(form);

var validator = FormValidation.formValidation(form, {
    fields: {
        jenis_naskah: {
            validators: {
                notEmpty: {
                    message: "Jenis naskah mohon diisi.",
                },
            },
        },
    },
    fields: {
        is_public: {
            validators: {
                notEmpty: {
                    message: "Hak akses mohon diisi.",
                },
            },
        },
    },
    fields: {
        no_surat: {
            validators: {
                notEmpty: {
                    message: "Nomor surat mohon diisi.",
                },
            },
        },
    },
    fields: {
        tgl_naskah: {
            validators: {
                notEmpty: {
                    message: "Tanggal surat mohon diisi.",
                },
            },
        },
    },
    fields: {
        kode_klasifikasi: {
            validators: {
                notEmpty: {
                    message: "Tanggal surat mohon diisi.",
                },
            },
        },
    },
    fields: {
        tingkat_urgensi: {
            validators: {
                notEmpty: {
                    message: "Tanggal surat mohon diisi.",
                },
            },
        },
    },
    fields: {
        tingkat_urgensi: {
            validators: {
                notEmpty: {
                    message: "Tanggal surat mohon diisi.",
                },
            },
        },
    },
    fields: {
        sifat: {
            validators: {
                notEmpty: {
                    message: "Sifat naskah mohon diisi.",
                },
            },
        },
    },
    fields: {
        sifat: {
            validators: {
                notEmpty: {
                    message: "Perihal mohon diisi.",
                },
            },
        },
    },
    fields: {
        ttd_naskah: {
            validators: {
                notEmpty: {
                    message: "Penandatangan naskah mohon diisi.",
                },
            },
        },
    },
    fields: {
        jenjang: {
            validators: {
                notEmpty: {
                    message: "Jenjang mohon diisi.",
                },
            },
        },
    },
    fields: {
        hal_ttd: {
            validators: {
                notEmpty: {
                    message: "Halaman tandatangan mohon diisi.",
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

console.log(submitButton);
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
