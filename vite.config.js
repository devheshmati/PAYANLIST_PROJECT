import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/accordion.js",
                "resources/js/hamburger-menu.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
