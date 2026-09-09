const ServicesModule = {

    async render(selector) {

        const container =
            document.querySelector(selector);

        if (!container) {
            return;
        }

        try {

            const data =
                await DataStore.get("services");

            container.innerHTML =
                data.items
                    .map(service =>
                        this.card(service)
                    )
                    .join("");

        } catch (error) {

            console.error(error);

            container.innerHTML = `
                <p class="data-error">
                    تعذر تحميل الخدمات حاليا.
                </p>
            `;
        }
    },


    card(service) {

        return `
            <article class="service-card">

                <div
                    class="service-card-icon"
                    aria-hidden="true"
                >
                    ${service.number}
                </div>

                <div class="service-card-body">

                    <span class="service-card-category">
                        ${service.category}
                    </span>

                    <h3 class="service-card-title">
                        ${service.title}
                    </h3>

                    <p class="service-card-description">
                        ${service.description}
                    </p>

                    <a
                        href="service.html?id=${service.id}"
                        class="service-card-link"
                    >
                        تعرف على الخدمة
                        <span aria-hidden="true">←</span>
                    </a>

                </div>

            </article>
        `;
    }

};


window.ServicesModule =
    ServicesModule;