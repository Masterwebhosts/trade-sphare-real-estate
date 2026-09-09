const PropertiesModule = {
    async render(selector) {
        const container = document.querySelector(selector);

        if (!container) {
            return;
        }

        try {
            const data = await DataStore.get("properties");

            container.innerHTML = data.items
                .map(property => this.card(property))
                .join("");

        } catch (error) {
            console.error(error);

            container.innerHTML = `
                <p class="data-error">
                    تعذر تحميل العقارات حاليا.
                </p>
            `;
        }
    },

    card(property) {
        return `
            <article class="property-card">

                <a href="property.html?id=${property.id}"
                   class="property-card-media">

                    <img
                        src="${property.image}"
                        alt="${property.title}"
                        loading="lazy"
                    >

                    <span class="property-card-badge">
                        ${property.status}
                    </span>

                </a>

                <div class="property-card-body">

                    <div class="property-card-meta">
                        <span>${property.type}</span>
                        <span>${property.condition}</span>
                    </div>

                    <h3 class="property-card-title">
                        ${property.title}
                    </h3>

                    <p class="property-card-location">
                        ${property.location}
                    </p>

                    <div class="property-card-specs">
                        <span>${property.bedrooms} غرف</span>
                        <span>${property.bathrooms} حمامات</span>
                        <span>${property.area} م²</span>
                    </div>

                    <div class="property-card-footer">

                        <strong class="property-card-price">
                            ${property.price.toLocaleString("ar-SA")}
                            ${property.currency}
                        </strong>

                        <a
                            href="property.html?id=${property.id}"
                            class="property-card-link"
                        >
                            التفاصيل
                        </a>

                    </div>

                </div>

            </article>
        `;
    }
};

window.PropertiesModule = PropertiesModule;