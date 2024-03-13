// Define form element
const form = document.getElementById("add_form");

var validator = FormValidation.formValidation(form, {
    fields: {
        no_nodis: {
            validators: {
                notEmpty: {
                    message: "Nomor Nodis Mohon diisi.",
                },
            },
        },
        tgl_nodis: {
            validators: {
                notEmpty: {
                    message: "Tanggal Nodis Mohon diisi.",
                },
            },
        },
        dasar_penugasan: {
            validators: {
                notEmpty: {
                    message: "Dasar Penugasan Mohon diisi.",
                },
            },
        },
        perihal_nodis: {
            validators: {
                notEmpty: {
                    message: "Perihal Nodis Mohon diisi.",
                },
            },
        },
        detail_penugasan: {
            validators: {
                notEmpty: {
                    message: "Detail Penugasan Mohon diisi.",
                },
            },
        },
        nama_kegiatan_id: {
            validators: {
                notEmpty: {
                    message: "Nama Kegiatan Mohon diisi.",
                },
            },
        },
        jenis_transportasi: {
            validators: {
                notEmpty: {
                    message: "Jenis Transportasi Mohon diisi.",
                },
            },
        },
        jenis_pembiayaan: {
            validators: {
                notEmpty: {
                    message: "Jenis Pembiayaan Mohon diisi.",
                },
            },
        },
        jenis_perjadin_id: {
            validators: {
                notEmpty: {
                    message: "Jenis Perjadin Mohon diisi.",
                },
            },
        },
        nama_kota: {
            validators: {
                notEmpty: {
                    message: "Nama Kota Mohon diisi.",
                },
            },
        },
        tgl_st_start: {
            validators: {
                notEmpty: {
                    message: "Tanggal Perjalanan Dinas Mohon diisi.",
                },
            },
        },
        detail_kegiatan: {
            validators: {
                notEmpty: {
                    message: "Detail Kegiatan Mohon diisi.",
                },
            },
        },
        target_kinerja: {
            validators: {
                notEmpty: {
                    message: "Target Kinerja Mohon diisi.",
                },
            },
        },
        kode_akun: {
            validators: {
                notEmpty: {
                    message: "Kode Akun Mohon diisi.",
                },
            },
        },
        nama_akun: {
            validators: {
                notEmpty: {
                    message: "Nama Akun Mohon diisi.",
                },
            },
        },
        pagu_anggaran: {
            validators: {
                notEmpty: {
                    message: "Pagu Anggaran Mohon diisi.",
                },
                numeric: {
                    message: "Pagu Anggaran Harus Berupa Angka.",
                    decimalSeparator: ",",
                },
            },
        },
        realisasi: {
            validators: {
                notEmpty: {
                    message: "Realisasi Mohon diisi.",
                },
                numeric: {
                    message: "Realisasi Harus Berupa Angka.",
                    decimalSeparator: ",",
                },
            },
        },
        perkiraan_anggaran: {
            validators: {
                notEmpty: {
                    message: "Perkiraan Anggaran Mohon diisi.",
                },
                numeric: {
                    message: "Perkiraan Anggaran Harus Berupa Angka.",
                    decimalSeparator: ",",
                },
            },
        },
        nama_negara: {
            validators: {
                notEmpty: {
                    message: "Nama Negara Mohon diisi.",
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
        excluded: new FormValidation.plugins.Excluded({
            excluded: function (field, ele, eles) {
                const selectElement = document.querySelector(
                    'select[name="jenis_pembiayaan"]',
                );
                const pembiayaan = selectElement ? selectElement.value : "";

                const selectElement2 = document.querySelector(
                    'select[name="jenis_perjadin_id"]',
                );
                const perjadin = selectElement2 ? selectElement2.value : "";

                if (
                    ((field === "kode_akun" ||
                        field === "nama_akun" ||
                        field === "pagu_anggaran" ||
                        field === "realisasi" ||
                        field === "perkiraan_anggaran") &&
                        pembiayaan !== "Biaya PPATK") ||
                    (field === "jenis_pembiayaan" &&
                        pembiayaan === "Biaya PPATK")
                ) {
                    return true;
                }

                if (
                    (field === "nama_negara" &&
                        perjadin !== "9B652C20-66F7-4F38-9DA0-3C34C9C96ED4") ||
                    (field === "nama_kota" &&
                        perjadin === "9B652C20-66F7-4F38-9DA0-3C34C9C96ED4")
                ) {
                    return true;
                }

                return false;
            },
        }),
    },
});

// Submit button handler
const submitButton = document.getElementById("submitPerjadin");
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
