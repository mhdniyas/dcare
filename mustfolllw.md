# Laravel Professional Development Guidelines

## 10 Must-Follow Instructions for Each Step of Laravel Development

1.  **Use UUID or Slug Instead of ID in URLs**
    -   Never expose incremental IDs in URLs. Use UUIDs (`Str::uuid()`)
        or SEO-friendly slugs.
    -   Example: `/product/{product:slug}` instead of `/product/1`.
2.  **Always Separate Request Validation**
    -   Use Form Request classes for validation and authorization.
    -   Keeps controllers clean and ensures consistent validation.
3.  **Use Service or Action Classes for Business Logic**
    -   Avoid putting business logic in controllers or models.
    -   Create `app/Services/` or `app/Actions/` to encapsulate logic.
4.  **Make Reusable Components and Partials**
    -   Extract common UI elements into Blade components and `partials`.
    -   Example: `<x-card>` or `@include('partials.footer')`.
5.  **Keep Controllers Thin and Focused**
    -   Controllers should only handle routing, delegate logic, and
        return responses.
6.  **Use Repositories for Data Access**
    -   Keep database logic in dedicated repository classes to maintain
        a clean separation of concerns.
7.  **Implement Form Requests and Policies for Security**
    -   Use authorization checks via Policies or Gates.
    -   Never handle sensitive logic directly in controllers.
8.  **Optimize for Production Early**
    -   Use caching (`config:cache`, `route:cache`, Redis) and optimize
        queries (avoid N+1, use eager loading).
9.  **Follow Proper Folder and Module Organization**
    -   Use feature-based modular structure: `app/Modules/Orders`,
        `app/Modules/Products`, etc.
    -   Each module should have its own controller, model, service, and
        view.
10. **Implement Testing, Logging, and Error Handling**
    -   Write feature and unit tests.
    -   Use centralized logging (Monolog, Sentry) and global exception
        handling for production reliability.

------------------------------------------------------------------------

### Bonus Tips

-   Use `.env` securely (never commit to git).
-   Maintain consistent coding style with Laravel Pint.
-   Always use version control and CI/CD pipelines.
-   Deploy via Laravel Forge or Envoyer for reliability.
