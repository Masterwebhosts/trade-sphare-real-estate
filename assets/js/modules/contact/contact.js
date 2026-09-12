const ContactModule = {

    form: null,
    status: null,

    init() {

        this.form = document.querySelector("#contact-form");
        this.status = document.querySelector("#contact-form-status");

        if (!this.form) {
            return;
        }

        this.form.addEventListener(
            "submit",
            (event) => this.handleSubmit(event)
        );

        this.form.addEventListener(
            "input",
            (event) => this.clearFieldError(event.target)
        );

        this.form.addEventListener(
            "change",
            (event) => this.clearFieldError(event.target)
        );
    },


    handleSubmit(event) {

        event.preventDefault();

        this.clearAllErrors();

        const formData = new FormData(this.form);

        const data = {
            name: String(formData.get("name") || "").trim(),
            email: String(formData.get("email") || "").trim(),
            phone: String(formData.get("phone") || "").trim(),
            type: String(formData.get("type") || "").trim(),
            message: String(formData.get("message") || "").trim()
        };


        const errors = this.validate(data);


        if (Object.keys(errors).length > 0) {

            this.showErrors(errors);

            this.setStatus(
                "Please review the required fields and correct the errors.",
                "error"
            );

            return;
        }


        this.handleValidForm(data);
    },


    validate(data) {

        const errors = {};


        if (data.name.length < 2) {

            errors.name =
                "Please enter a valid name.";
        }


        if (!this.isValidEmail(data.email)) {

            errors.email =
                "Please enter a valid email address.";
        }


        if (data.phone && data.phone.length < 7) {

            errors.phone =
                "Please enter a valid phone number.";
        }


        if (!data.type) {

            errors.type =
                "Please select an inquiry type.";
        }


        if (data.message.length < 10) {

            errors.message =
                "Please enter a message containing at least 10 characters.";
        }


        return errors;
    },


    isValidEmail(email) {

        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(
            email
        );
    },


    showErrors(errors) {

        Object.entries(errors).forEach(
            ([field, message]) => {

                const errorElement =
                    document.querySelector(
                        `[data-error-for="${field}"]`
                    );

                const fieldElement =
                    this.form.elements[field];


                if (errorElement) {
                    errorElement.textContent = message;
                }


                if (fieldElement) {
                    fieldElement.setAttribute(
                        "aria-invalid",
                        "true"
                    );
                }
            }
        );
    },


    clearFieldError(field) {

        if (!field || !field.name) {
            return;
        }

        const errorElement =
            document.querySelector(
                `[data-error-for="${field.name}"]`
            );


        if (errorElement) {
            errorElement.textContent = "";
        }


        field.removeAttribute("aria-invalid");


        if (
            this.status &&
            this.status.classList.contains("is-error")
        ) {
            this.status.textContent = "";
            this.status.className =
                "contact-form-status";
        }
    },


    clearAllErrors() {

        this.form
            .querySelectorAll(".form-error")
            .forEach((element) => {
                element.textContent = "";
            });


        this.form
            .querySelectorAll("[aria-invalid='true']")
            .forEach((element) => {
                element.removeAttribute(
                    "aria-invalid"
                );
            });


        if (this.status) {

            this.status.textContent = "";

            this.status.className =
                "contact-form-status";
        }
    },


    handleValidForm(data) {

        console.info(
            "Contact form validated:",
            data
        );


        this.setStatus(
            "Your form data has been successfully validated. The actual submission will be connected later.",
            "success"
        );
    },


    setStatus(message, type) {

        if (!this.status) {
            return;
        }


        this.status.textContent = message;

        this.status.className =
            `contact-form-status is-${type}`;
    }

};


window.ContactModule = ContactModule;