const DataStore = {
    async get(resource) {
        const response = await fetch(`data/${resource}.json`, {
            headers: {
                Accept: "application/json"
            }
        });

        if (!response.ok) {
            throw new Error(
                `Unable to load data resource: ${resource}`
            );
        }

        return response.json();
    }
};

window.DataStore = DataStore;