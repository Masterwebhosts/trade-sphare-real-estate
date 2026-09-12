const PropertiesFilter = {
    items: [],
    filteredItems: [],

    elements: {
        form: null,
        search: null,
        type: null,
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
            const data = await DataStore.get("properties");

            this.items = Array.isArray(data.items)
                ? data.items
                : [];

            this.filteredItems = [...this.items];

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
            document.querySelector("#properties-filters");

        this.elements.search =
            document.querySelector("#property-search");

        this.elements.type =
            document.querySelector("#property-type");

        this.elements.status =
            document.querySelector("#property-status");

        this.elements.location =
            document.querySelector("#property-location");

        this.elements.reset =
            document.querySelector("#property-reset");

        this.elements.list =
            document.querySelector("#properties-list");

        this.elements.count =
            document.querySelector("#properties-count");

        this.elements.empty =
            document.querySelector("#properties-empty");

        this.elements.emptyReset =
            document.querySelector("#property-empty-reset");

        this.elements.error =
            document.querySelector("#properties-error");
    },

    populateFilters() {
        this.populateSelect(
            this.elements.type,
            this.uniqueValues("type")
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

        this.elements.type?.addEventListener(
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

        const type =
            this.elements.type?.value || "";

        const status =
            this.elements.status?.value || "";

        const location =
            this.elements.location?.value || "";

        this.filteredItems = this.items.filter(
            property => {

                const searchableText = [
                    property.title,
                    property.type,
                    property.location,
                    property.status,
                    property.condition
                ]
                    .filter(Boolean)
                    .join(" ")
                    .toLowerCase();

                const matchesSearch =
                    !search ||
                    searchableText.includes(search);

                const matchesType =
                    !type ||
                    property.type === type;

                const matchesStatus =
                    !status ||
                    property.status === status;

                const matchesLocation =
                    !location ||
                    property.location === location;

                return (
                    matchesSearch &&
                    matchesType &&
                    matchesStatus &&
                    matchesLocation
                );
            }
        );

        this.render();
    },

    reset() {
        if (this.elements.form) {
            this.elements.form.reset();
        }

        this.filteredItems = [...this.items];

        this.render();
    },

    render() {
        const list = this.elements.list;

        if (!list) {
            return;
        }

        list.innerHTML = this.filteredItems
            .map(property =>
                PropertiesModule.card(property)
            )
            .join("");

        const count =
            this.filteredItems.length;

        this.elements.count.textContent =
            `${count} ${count === 1 ? "Property" : "Properties"}`;

        const isEmpty = count === 0;

        this.elements.empty.hidden = !isEmpty;
        list.hidden = isEmpty;
    }
};

window.PropertiesFilter = PropertiesFilter;