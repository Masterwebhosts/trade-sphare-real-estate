const ProjectDetailModule = {

    async init() {

        const container =
            document.querySelector("#project-detail");

        const errorContainer =
            document.querySelector(
                "#project-detail-error"
            );


        if (!container) {
            return;
        }


        const params =
            new URLSearchParams(
                window.location.search
            );


        const projectId =
            Number(params.get("id"));


        if (!projectId) {

            this.showError(
                container,
                errorContainer
            );

            return;
        }


        try {

            const data =
                await DataStore.get("projects");


            const project =
                data.items.find(
                    item =>
                        Number(item.id) === projectId
                );


            if (!project) {

                this.showError(
                    container,
                    errorContainer
                );

                return;
            }


            this.render(
                container,
                project
            );


            this.updateMeta(project);

        } catch (error) {

            console.error(error);

            this.showError(
                container,
                errorContainer
            );
        }
    },


    render(container, project) {

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

                <a href="projects.html">
                    Projects
                </a>

                <span aria-hidden="true">
                    /
                </span>

                <span>
                    ${project.title}
                </span>

            </nav>


            <div class="property-detail-grid">

                <div class="property-detail-media">

                    <img
                        src="${project.image}"
                        alt="${project.title}"
                    >

                    <span class="property-detail-badge">
                        ${project.status}
                    </span>

                </div>


                <article class="property-detail-content">

                    <div class="property-detail-meta">

                        <span>
                            ${project.category}
                        </span>

                        <span>
                            ${project.status}
                        </span>

                    </div>


                    <h1 class="property-detail-title">
                        ${project.title}
                    </h1>


                    <p class="property-detail-location">
                        ${project.location}
                    </p>


                    <div class="property-detail-description">

                        <h2>
                            About the Project
                        </h2>

                        <p>
                            ${project.description}
                        </p>

                    </div>


                    <div class="project-detail-highlights">

                        <div>
                            <span>
                                Category
                            </span>

                            <strong>
                                ${project.category}
                            </strong>
                        </div>


                        <div>
                            <span>
                                Status
                            </span>

                            <strong>
                                ${project.status}
                            </strong>
                        </div>


                        <div>
                            <span>
                                Location
                            </span>

                            <strong>
                                ${project.location}
                            </strong>
                        </div>

                    </div>


                    <div class="property-detail-actions">

                        <a
                            href="contact.html"
                            class="btn btn-primary"
                        >
                            Inquire About This Project
                        </a>

                        <a
                            href="projects.html"
                            class="btn btn-secondary"
                        >
                            Back to Projects
                        </a>

                    </div>

                </article>

            </div>

        `;
    },


    updateMeta(project) {

        document.title =
            `${project.title} | Real Estate Development`;


        const description =
            `${project.title} - ${project.description}`;


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


window.ProjectDetailModule =
    ProjectDetailModule;