const ProjectsModule = {
    async render(selector) {
        const container = document.querySelector(selector);

        if (!container) {
            return;
        }

        try {
            const data = await DataStore.get("projects");

            container.innerHTML = data.items
                .map(project => this.card(project))
                .join("");

        } catch (error) {
            console.error(error);

            container.innerHTML = `
                <p class="data-error">
                    تعذر تحميل المشاريع حاليا.
                </p>
            `;
        }
    },

    card(project) {
        return `
            <article class="project-card">

                <a
                    href="project.html?id=${project.id}"
                    class="project-card-media"
                >

                    <img
                        src="${project.image}"
                        alt="${project.title}"
                        loading="lazy"
                    >

                    <span class="project-card-status">
                        ${project.status}
                    </span>

                </a>

                <div class="project-card-body">

                    <span class="project-card-category">
                        ${project.category}
                    </span>

                    <h3 class="project-card-title">
                        ${project.title}
                    </h3>

                    <p class="project-card-description">
                        ${project.description}
                    </p>

                    <div class="project-card-location">
                        ${project.location}
                    </div>

                    <a
                        href="project.html?id=${project.id}"
                        class="project-card-link"
                    >
                        اكتشف المشروع
                        <span aria-hidden="true">←</span>
                    </a>

                </div>

            </article>
        `;
    }
};

window.ProjectsModule = ProjectsModule;