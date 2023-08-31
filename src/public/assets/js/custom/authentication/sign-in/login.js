FormValidation.formValidation(document.getElementById("kt_sign_in_form"), {
    fields: {
        username: {
            validators: {
                notEmpty: {
                    message: "Username wajib diisi",
                },
            },
        },
        password: {
            validators: {
                notEmpty: {
                    message: "Password Wajib diisi",
                },
            },
        },
    },

    plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: ".fv-row",
            eleInvalidClass: "",
            eleValidClass: "",
        }),
        // Validate fields when clicking the Submit button
        submitButton: new FormValidation.plugins.SubmitButton(),
        // Submit the form when all fields are valid
        defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
    },
});
