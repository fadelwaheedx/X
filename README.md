# MikroTik Wizard - EcoSys Modular Monolith

This repository contains a Laravel-based modular monolith that follows the EcoSys "Brain & Limbs" architecture shown in the reference diagram. The application is intentionally organized around clear domain modules so that the identity kernel (Brain) governs contracts while the operational limbs remain decoupled.

> **Note:** Package installation is not performed in this environment because outbound network access is blocked. Run `composer install` locally to pull the Laravel framework and dev tools.

## Architecture Overview

- **Brain (Identity Kernel):** Owns shared identity and governance capabilities such as SSO, ACL, audit logging, offline tokens, and the contracts API.
- **Limbs (Operational Modules):**
  - **Borders:** Entry workflows, manifests, and import controls.
  - **Commercial Registry:** Business identity, capital requirements, and licensing.
  - **Market Monitoring:** Price signals, inspections, reconciliation.
  - **HRMS/HRIS:** HR records, account linkage, and lifecycle triggers (leave, suspension, termination).
- **Shared Kernel:** Cross-cutting contracts and support utilities that modules can depend on without tight coupling.

All modules live under `modules/<ModuleName>` and expose their own routes, controllers, and providers. Module discovery is declarative through `config/modules.php`, and the application registers each module provider via `App\Providers\ModuleServiceProvider`.

## Getting Started

1. Install dependencies (requires internet access):
   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan serve
   ```
2. Verify module wiring by hitting the baseline endpoints:
   - `GET /` returns the modular manifest and app metadata.
   - `GET /api/brain/status` shows the kernel capabilities.
   - `GET /api/borders/manifests`, `GET /api/commercial-registry/businesses`, `GET /api/market-monitoring/signals`, `GET /api/hrms/lifecycle-events` expose limb placeholders.

## Modular Conventions

- **Autoloading:** PSR-4 namespaces `Modules\` and `App\` are defined in `composer.json`.
- **Providers:** Each module contains a `Providers/<Module>ServiceProvider` that loads its routes.
- **Routing:** Module routes live inside `modules/<Module>/Routes` and are loaded with `api` middleware and a module-specific prefix.
- **Contracts:** Shared interfaces go into `modules/Shared/Contracts` so limbs can depend on abstractions governed by the Brain.
- **Testing:** A lightweight PHPUnit suite (`tests/Feature/ModulesManifestTest.php`) asserts that the module manifest stays aligned with the Brain & Limbs model.

## Development Practices

- Keep business logic inside modules; avoid cross-module coupling except through shared contracts or events defined in the Brain.
- Add new modules by:
  1. Creating `modules/<Module>/Providers`, `Routes`, and `Http/Controllers` directories.
  2. Adding a `<Module>ServiceProvider` that registers the module routes.
  3. Extending `config/modules.php` with the module metadata and provider class.
  4. Wiring DTOs, services, and migrations inside the module folder.
- Run formatting (`composer format`), static analysis (`composer analyse`), and tests (`composer test`) locally after installing dependencies.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.
