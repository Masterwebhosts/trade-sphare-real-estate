const ProjectsFilter = {

    items: [],
    filteredItems: [],

    elements: {
        form: null,
        search: null,
        category: null,
        status: null,
        location: null,
        reset: null,
        list: null,
        count: null,
        empty: null,
        emptyReset: null,
        error: null
    },


    async init() {

        this.cacheElements();

        if (!this.elements.list) {
            return;
        }

        try {

            const data =
                await DataStore.get("projects");

            this.items =
                Array.isArray(data.items)
                    ? data.items
                    : [];

            this.filteredItems =
                [...this.items];

            this.populateFilters();

            this.bindEvents();

            this.render();

        } catch (error) {

            console.error(error);

            this.elements.error.hidden = false;

            this.elements.count.textContent = "";
        }
    },


    cacheElements() {

        this.elements.form =
            document.querySelector(
                "#projects-filters"
            );

        this.elements.search =
            document.querySelector(
                "#project-search"
            );

        this.elements.category =
            document.querySelector(
                "#project-category"
            );

        this.elements.status =
            document.querySelector(
                "#project-status"
            );

        this.elements.location =
            document.querySelector(
                "#project-location"
            );

        this.elements.reset =
            document.querySelector(
                "#project-reset"
            );

        this.elements.list =
            document.querySelector(
                "#projects-list"
            );

        this.elements.count =
            document.querySelector(
                "#projects-count"
            );

        this.elements.empty =
            document.querySelector(
                "#projects-empty"
            );

        this.elements.emptyReset =
            document.querySelector(
                "#project-empty-reset"
            );

        this.elements.error =
            document.querySelector(
                "#projects-error"
            );
    },


    populateFilters() {

        this.populateSelect(
            this.elements.category,
            this.uniqueValues("category")
        );

        this.populateSelect(
            this.elements.status,
            this.uniqueValues("status")
        );

        this.populateSelect(
            this.elements.location,
            this.uniqueValues("location")
        );
    },


    uniqueValues(key) {

        return [
            ...new Set(
                this.items
                    .map(item => item[key])
                    .filter(Boolean)
            )
        ].sort((a, b) =>
            a.localeCompare(b, "en")
        );
    },


    populateSelect(select, values) {

        if (!select) {
            return;
        }

        values.forEach(value => {

            const option =
                document.createElement("option");

            option.value = value;

            option.textContent = value;

            select.appendChild(option);
        });
    },


    bindEvents() {

        this.elements.form?.addEventListener(
            "submit",
            event => {

                event.preventDefault();

                this.applyFilters();
            }
        );


        this.elements.search?.addEventListener(
            "input",
            () => this.applyFilters()
        );


        this.elements.category?.addEventListener(
            "change",
            () => this.applyFilters()
        );


        this.elements.status?.addEventListener(
            "change",
            () => this.applyFilters()
        );


        this.elements.location?.addEventListener(
            "change",
            () => this.applyFilters()
        );


        this.elements.reset?.addEventListener(
            "click",
            () => this.reset()
        );


        this.elements.emptyReset?.addEventListener(
            "click",
            () => this.reset()
        );
    },


    applyFilters() {

        const search =
            this.elements.search?.value
                .trim()
                .toLowerCase() || "";

        const category =
            this.elements.category?.value || "";

        const status =
            this.elements.status?.value || "";

        const location =
            this.elements.location?.value || "";


        this.filteredItems =
            this.items.filter(project => {

                const searchableText = [
                    project.title,
                    project.category,
                    project.status,
                    project.location,
                    project.description
                ]
                    .filter(Boolean)
                    .join(" ")
                    .toLowerCase();


                const matchesSearch =
                    !search ||
                    searchableText.includes(search);


                const matchesCategory =
                    !category ||
                    project.category === category;


                const matchesStatus =
                    !status ||
                    project.status === status;


                const matchesLocation =
                    !location ||
                    project.location === location;


                return (
                    matchesSearch &&
                    matchesCategory &&
                    matchesStatus &&
                    matchesLocation
                );
            });


        this.render();
    },


    reset() {

        if (this.elements.form) {
            this.elements.form.reset();
        }

        this.filteredItems =
            [...this.items];

        this.render();
    },


    render() {

        const list =
            this.elements.list;

        if (!list) {
            return;
        }


        list.innerHTML =
            this.filteredItems
                .map(project =>
                    ProjectsModule.card(project)
                )
                .join("");


        const count =
            this.filteredItems.length;


        this.elements.count.textContent =
            `${count} ${count === 1 ? "Project" : "Projects"}`;


        const isEmpty =
            count === 0;


        this.elements.empty.hidden =
            !isEmpty;

        list.hidden =
            isEmpty;
    }
};


window.ProjectsFilter =
    ProjectsFilter;