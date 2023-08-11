import "./bootstrap";

import jQuery from "jquery";
import Alpine from "alpinejs";
import * as bootstrap from "bootstrap";

import "./modules/sidebar";
import "./modules/theme";
import "./modules/feather";

window.Alpine = Alpine;
window.$ = jQuery;
window.bootstrap = bootstrap;

Alpine.start();
