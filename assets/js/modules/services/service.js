const ServiceDetailModule = {

    async init() {

        const container =
            document.querySelector("#service-detail");

        const errorContainer =
            document.querySelector(
                "#service-detail-error"
            );


        if (!container) {
            return;
        }


        const params =
            new URLSearchParams(
                window.location.search
            );


        const serviceId =
            Number(params.get("id"));


        if (!serviceId) {

            this.showError(
                container,
                errorContainer
            );

            return;
        }


        try {

            const data =
                await DataStore.get("services");


            const service =
                data.items.find(
                    item =>
                        Number(item.id) === serviceId
                );


            if (!service) {

                this.showError(
                    container,
                    errorContainer
                );

                return;
            }


            this.render(
                container,
                service
            );


            this.updateMeta(service);

        } catch (error) {

            console.error(error);

            this.showError(
                container,
                errorContainer
            );
        }
    },


    render(container, service) {

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

                <a href="services.html">
                    الخدمات
                </a>

                <span aria-hidden="true">
                    /
                </span>

                <span>
                    ${service.title}
                </span>

            </nav>


            <div class="service-detail-layout">

                <div class="service-detail-number">
                    ${service.number}
                </div>


                <article class="service-detail-content">

                    <span class="service-card-category">
                        ${service.category}
                    </span>


                    <h1 class="property-detail-title">
                        ${service.title}
                    </h1>


                    <p class="service-detail-lead">
                        ${service.description}
                    </p>


                    <div class="service-detail-description">

                        <h2>
                            عن الخدمة
                        </h2>

                        <p>
                            نقدم من خلال هذه الخدمة حلولا
                            عقارية متخصصة مصممة وفق احتياجات
                            المشروع والمستثمر مع التركيز على
                            الجودة ودراسة الفرص وتحقيق قيمة
                            مستدامة على المدى الطويل.
                        </p>

                    </div>


                    <div class="service-detail-features">

                        <div>
                            <strong>
                                ${service.number}
                            </strong>

                            <span>
                                خدمة متخصصة
                            </span>
                        </div>


                        <div>
                            <strong>
                                ${service.category}
                            </strong>

                            <span>
                                مجال الخدمة
                            </span>
                        </div>


                        <div>
                            <strong>
                                احترافي
                            </strong>

                            <span>
                                نهج العمل
                            </span>
                        </div>

                    </div>


                    <div class="property-detail-actions">

                        <a
                            href="contact.html"
                            class="btn btn-primary"
                        >
                            اطلب هذه الخدمة
                        </a>

                        <a
                            href="services.html"
                            class="btn btn-secondary"
                        >
                            العودة إلى الخدمات
                        </a>

                    </div>

                </article>

            </div>

        `;
    },


    updateMeta(service) {

        document.title =
            `${service.title} | قالب التطوير العقاري`;


        const meta =
            document.querySelector(
                'meta[name="description"]'
            );


        if (meta) {

            meta.setAttribute(
                "content",
                `${service.title} - ${service.description}`
            );
        }
    },


    showError(
        container,
        errorContainer
    ) {

        container.innerHTML = "";


        if (errorContainer) {
            errorContainer.hidden = false;
        }
    }

};


window.ServiceDetailModule =
    ServiceDetailModule;