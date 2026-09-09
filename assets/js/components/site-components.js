const SiteComponents = {

    async load(selector, file) {

        const container =
            document.querySelector(selector);

        if (!container) {
            return;
        }

        try {

            const response = await fetch(
                `components/${file}`,
                {
                    headers: {
                        Accept: "text/html"
                    }
                }
            );

            if (!response.ok) {

                throw new Error(
                    `Unable to load component: ${file}`
                );
            }

            const html =
                await response.text();

            container.outerHTML = html;

        } catch (error) {

            console.error(
                "Component loading failed:",
                error
            );
        }
    },


    async init() {

        await this.load(
            "#site-header",
            "header.html"
        );

        await this.load(
            "#site-footer",
            "footer.html"
        );

        this.setCurrentYear();
        this.setActiveNavigation();
    },


    setCurrentYear() {

        const year =
            document.querySelector(
                "[data-current-year]"
            );

        if (year) {
            year.textContent =
                new Date().getFullYear();
        }
    },


    setActiveNavigation() {

        const currentPage =
            window.location.pathname
                .split("/")
                .pop() || "index.html";


        document
            .querySelectorAll(".site-menu a")
            .forEach((link) => {

                const href =
                    link.getAttribute("href");

                if (
                    href === currentPage ||
                    (
                        currentPage === "" &&
                        href === "index.html"
                    )
                ) {

                    link.setAttribute(
                        "aria-current",
                        "page"
                    );

                } else {

                    link.removeAttribute(
                        "aria-current"
                    );
                }
            });
    }

};


window.SiteComponents = SiteComponents;