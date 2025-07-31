import "./bootstrap";
import "./accordion";
import "./hamburger-menu";

import.meta.glob(["../fonts/**"]);
import Chart from "chart.js/auto";
import Sortable from "sortablejs";

window.Chart = Chart;
window.Sortable = Sortable;
