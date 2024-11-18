import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/sass/dashboard.scss",
                "resources/sass/manage-users.scss",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
