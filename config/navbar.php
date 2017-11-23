<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "grid" => [
                "text"  => t("grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Site to showGrid()")
            ],

            "typography" => [
                "text"  => t("typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Site to typography")
            ],
            "theme-selector" => [
                "text"  => t("theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Site to theme-selector")
            ],
            "analysis" => [
                "text"  => t("analysis"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analysis"),
                "mark-if-parent" => true,
            ],
            "teman" => [
                "text"  => t("teman"),
                "url"   => $this->di->get("url")->create("teman"),
                "title" => t("Teman"),
                "mark-if-parent" => true,
            ],
            "images" => [
                "text"  => t("images"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Images"),
                "mark-if-parent" => true,
            ],
            "blogg" => [
                "text"  => t("blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blogg"),
                "mark-if-parent" => true,
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "grid" => [
                "text"  => t("grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("Site to showGrid()")
            ],

            "typography" => [
                "text"  => t("typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Site to typography")
            ],
            "theme" => [
                "text"  => t("theme"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Site to theme")
            ],
            "theme-selector" => [
                "text"  => t("theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Site to theme-selector")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
