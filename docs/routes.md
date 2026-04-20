# App routes

These routes are defined in `routes/web.php` and handled by `App\Http\Controllers\TaskController`.

## List tasks

- **Method**: GET
- **Path**: `/`
- **Action**: show all tasks

## Add task

- **Method**: POST
- **Path**: `/add`
- **Form fields**:
  - `title` (string, required)

## Delete task

- **Method**: GET
- **Path**: `/delete/{id}`
- **Path params**:
  - `id` (task id)

## Edit/update (in code)

The controller and routes include edit/update endpoints:

- GET `/edit/{id}`
- POST `/update/{id}`

If you want to expose these in the UI, ensure the corresponding Blade view exists (e.g. an `edit` page) and link to it from the task list.
