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
        this.initMobileMenu();
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
    },


    initMobileMenu() {

        const toggle =
            document.querySelector(
                ".site-menu-toggle"
            );

        const menuWrapper =
            document.querySelector(
                ".site-menu-wrapper"
            );

        if (!toggle || !menuWrapper) {
            return;
        }


        const menuLinks =
            menuWrapper.querySelectorAll(
                ".site-menu a"
            );


        const closeMenu = () => {

            toggle.setAttribute(
                "aria-expanded",
                "false"
            );

            toggle.setAttribute(
                "aria-label",
                "Open navigation menu"
            );

            menuWrapper.classList.remove(
                "is-open"
            );
        };


        const openMenu = () => {

            toggle.setAttribute(
                "aria-expanded",
                "true"
            );

            toggle.setAttribute(
                "aria-label",
                "Close navigation menu"
            );

            menuWrapper.classList.add(
                "is-open"
            );
        };


        toggle.addEventListener(
            "click",
            () => {

                const isOpen =
                    toggle.getAttribute(
                        "aria-expanded"
                    ) === "true";

                if (isOpen) {

                    closeMenu();

                } else {

                    openMenu();
                }
            }
        );


        menuLinks.forEach((link) => {

            link.addEventListener(
                "click",
                () => {
                    closeMenu();
                }
            );

        });


        document.addEventListener(
            "keydown",
            (event) => {

                if (
                    event.key === "Escape" &&
                    toggle.getAttribute(
                        "aria-expanded"
                    ) === "true"
                ) {

                    closeMenu();

                    toggle.focus();
                }
            }
        );


        window.addEventListener(
            "resize",
            () => {

                if (window.innerWidth > 768) {
                    closeMenu();
                }

            }
        );
    }

};


window.SiteComponents = SiteComponents;