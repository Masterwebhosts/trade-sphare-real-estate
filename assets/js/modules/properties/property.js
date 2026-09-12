const PropertyDetailModule = {

    async init() {

        const container =
            document.querySelector("#property-detail");

        const errorContainer =
            document.querySelector("#property-detail-error");

        if (!container) {
            return;
        }

        const params =
            new URLSearchParams(window.location.search);

        const propertyId =
            Number(params.get("id"));

        if (!propertyId) {
            this.showError(
                container,
                errorContainer
            );

            return;
        }

        try {

            const data =
                await DataStore.get("properties");

            const property =
                data.items.find(
                    item => Number(item.id) === propertyId
                );

            if (!property) {

                this.showError(
                    container,
                    errorContainer
                );

                return;
            }

            this.render(
                container,
                property
            );

            this.updateMeta(property);

        } catch (error) {

            console.error(error);

            this.showError(
                container,
                errorContainer
            );
        }
    },


    render(container, property) {

        container.innerHTML = `

            <nav
                class="property-breadcrumbs"
                aria-label="Breadcrumb navigation"
            >

                <a href="index.html">
                    Home
                </a>

                <span aria-hidden="true">
                    /
                </span>

                <a href="properties.html">
                    Properties
                </a>

                <span aria-hidden="true">
                    /
                </span>

                <span>
                    ${property.title}
                </span>

            </nav>


            <div class="property-detail-grid">

                <div class="property-detail-media">

                    <img
                        src="${property.image}"
                        alt="${property.title}"
                    >

                    <span class="property-detail-badge">
                        ${property.status}
                    </span>

                </div>


                <article class="property-detail-content">

                    <div class="property-detail-meta">

                        <span>
                            ${property.type}
                        </span>

                        <span>
                            ${property.condition}
                        </span>

                    </div>


                    <h1 class="property-detail-title">
                        ${property.title}
                    </h1>


                    <p class="property-detail-location">
                        ${property.location}
                    </p>


                    <div class="property-detail-price">

                        <span>
                            Price
                        </span>

                        <strong>
                            ${property.price.toLocaleString("en-US")}
                            ${property.currency}
                        </strong>

                    </div>


                    <div class="property-detail-specs">

                        <div>
                            <strong>
                                ${property.bedrooms}
                            </strong>

                            <span>
                                Bedrooms
                            </span>
                        </div>


                        <div>
                            <strong>
                                ${property.bathrooms}
                            </strong>

                            <span>
                                Bathrooms
                            </span>
                        </div>


                        <div>
                            <strong>
                                ${property.area}
                            </strong>

                            <span>
                                m²
                            </span>
                        </div>

                    </div>


                    <div class="property-detail-description">

                        <h2>
                            About the Property
                        </h2>

                        <p>
                            ${this.description(property)}
                        </p>

                    </div>


                    <div class="property-detail-actions">

                        <a
                            href="contact.html"
                            class="btn btn-primary"
                        >
                            Request Property Information
                        </a>

                        <a
                            href="properties.html"
                            class="btn btn-secondary"
                        >
                            Back to Properties
                        </a>

                    </div>

                </article>

            </div>

        `;
    },


    description(property) {

        return `
            ${property.title} is a ${property.type}
            ${property.condition ? `in ${property.condition} condition` : ""}
            located in ${property.location}.
            It has an area of ${property.area} m²
            and includes ${property.bedrooms} bedrooms
            and ${property.bathrooms} bathrooms.
            The property is currently available with the status:
            ${property.status}.
        `;
    },


    updateMeta(property) {

        document.title =
            `${property.title} | Real Estate Development`;

        const description =
            `Details of ${property.title} in ${property.location}, with an area of ${property.area} m² and ${property.bedrooms} bedrooms.`;

        const meta =
            document.querySelector(
                'meta[name="description"]'
            );

        if (meta) {
            meta.setAttribute(
                "content",
                description
            );
        }
    },


    showError(container, errorContainer) {

        container.innerHTML = "";

        if (errorContainer) {
            errorContainer.hidden = false;
        }
    }
};


window.PropertyDetailModule =
    PropertyDetailModule;