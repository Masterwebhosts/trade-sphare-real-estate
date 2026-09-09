const DataStore = {

    async get(resource) {

        const baseUrl =
            window.TRADE_SPHARE_CONFIG?.dataUrl || "";

        const response = await fetch(
            `${baseUrl}${resource}.json`,
            {
                headers: {
                    Accept: "application/json"
                }
            }
        );

        if (!response.ok) {

            throw new Error(
                `Unable to load data resource: ${resource}`
            );
        }

        return response.json();
    }

};

window.DataStore = DataStore;
