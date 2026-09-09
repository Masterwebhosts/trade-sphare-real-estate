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
                aria-label="مسار التنقل"
            >

                <a href="index.html">
                    الرئيسية
                </a>

                <span aria-hidden="true">
                    /
                </span>

                <a href="properties.html">
                    العقارات
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
                            السعر
                        </span>

                        <strong>
                            ${property.price.toLocaleString("ar-SA")}
                            ${property.currency}
                        </strong>

                    </div>


                    <div class="property-detail-specs">

                        <div>
                            <strong>
                                ${property.bedrooms}
                            </strong>

                            <span>
                                غرف نوم
                            </span>
                        </div>


                        <div>
                            <strong>
                                ${property.bathrooms}
                            </strong>

                            <span>
                                حمامات
                            </span>
                        </div>


                        <div>
                            <strong>
                                ${property.area}
                            </strong>

                            <span>
                                م²
                            </span>
                        </div>

                    </div>


                    <div class="property-detail-description">

                        <h2>
                            نبذة عن العقار
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
                            اطلب معلومات عن العقار
                        </a>

                        <a
                            href="properties.html"
                            class="btn btn-secondary"
                        >
                            العودة إلى العقارات
                        </a>

                    </div>

                </article>

            </div>

        `;
    },


    description(property) {

        return `
            ${property.title} هو عقار ${property.type}
            ${property.condition ? `بحالة ${property.condition}` : ""}
            يقع في ${property.location}.
            تبلغ مساحته ${property.area} م²
            ويضم ${property.bedrooms} غرف نوم
            و${property.bathrooms} حمامات.
            العقار متاح حاليا بحالة:
            ${property.status}.
        `;
    },


    updateMeta(property) {

        document.title =
            `${property.title} | قالب التطوير العقاري`;

        const description =
            `تفاصيل ${property.title} في ${property.location} بمساحة ${property.area} م² و${property.bedrooms} غرف نوم.`;

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