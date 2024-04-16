// Zapewnienie 'strict mode' dla całego skryptu
"use strict";

// Importowanie konfiguracji Bootstrap (js)
import './bootstrap';

// Importowanie stylów Bootstrap
import 'bootstrap/dist/css/bootstrap.css';

// Import i inicjalizacja Alpine.js
import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Start Alpine.js
Alpine.start();
