# Action menu Bug Report

Seed some users to populate a table with some rows
```bash
php artisan db:seed --class=UserSeeder
```
Goto /admin/users and click the 3 dots on the last row of the table.

Action group menu is cut off and no way to scroll down.
![img.png](img.png)

Filament 3 used some kind of flip magic to make the menu appear from bottom up not top down.

