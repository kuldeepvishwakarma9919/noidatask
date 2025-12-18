Project Overview

Responsive landing page converted from Figma
Lead submission form
Data storage in MySQL database

Admin dashboard for CRUD operations
http://127.0.0.1:8000/admin/dashboard


REST APIs for CRUD
Create manual routes/api.php
register bootstrap/app.php __DIR__.'/../routes/api.php', 
create, read, update, delete

Laravel best practices (Resource Controller, Validation)


Landing Page

Pixel-perfect UI converted from Figma
Fully responsive (Mobile / Tablet / Desktop)
Form as per Figma design


Form Functionality

On submit, data is stored in MySQL database
Laravel validation applied
Success / Error message displayed

CRUD Dashboard url: admin/dashboard

View records in a table
Create new record
Edit existing record
Delete record


REST API

CRUD APIs implemented using Laravel:

Read Api:
curl --location 'http://127.0.0.1:8000/api/leads' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImFHbWZ6ajI4VzFYRTcyUXlYbDlrSFE9PSIsInZhbHVlIjoiNW9GREVSTFlBK2tya3NxUVV3WDBxUzhzbmZmWkc4WGdtRXRwWEFESlRTWWxWdUtZaFF1QTNEYVVVd0xkVGlzOTZLaWhuMEhLVER4b3MyUlVjaWlJdFYxZEt1MTdOVkhWWFlQeEF4dnd5SlpOSmJLcHJHZzIrTHp3a0MrL3VGTGMiLCJtYWMiOiJhNTE2ZTVmOGM4MGI0MGY2NDhlNjJmYTk4MzRhMGQ1YzAyNDkyMTM2NTdiYzJmODdkYjUwM2E4ZDAwMTdiN2E4IiwidGFnIjoiIn0%3D; laravel-session=eyJpdiI6IlMwYkgwZzJ0TXM1QmVBcW9LTzNFTUE9PSIsInZhbHVlIjoiY1A3a2lGL2tDRGYxaktKQW1RS2RtRUJqT2JqRWtRU2llZ2M3RUd2ZjFUNlBaN3lOZDJjUXl5MjVhZzdYWGgrNnNzZGdNdHNEVlh6UW4vOWg5blYwK3EvaGVpYTRnUmhTT213MncwYTFKbENiVW1qTSs5cC9YN1VqMitiVUMxTG8iLCJtYWMiOiJiNzE5OWE2NGRlMDQwZTgzYjJjYTkzZDRiMzFiZjU3OTQxMjk1MzJiOGMwNTY1MjhlZTBmZTI3N2Q3OTIwNTc3IiwidGFnIjoiIn0%3D'

Update APi:
curl --location 'http://127.0.0.1:8000/api/leads/5' \
--header 'Accept: application/json' \
--header 'Content-Type: multipart/form-data' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImFHbWZ6ajI4VzFYRTcyUXlYbDlrSFE9PSIsInZhbHVlIjoiNW9GREVSTFlBK2tya3NxUVV3WDBxUzhzbmZmWkc4WGdtRXRwWEFESlRTWWxWdUtZaFF1QTNEYVVVd0xkVGlzOTZLaWhuMEhLVER4b3MyUlVjaWlJdFYxZEt1MTdOVkhWWFlQeEF4dnd5SlpOSmJLcHJHZzIrTHp3a0MrL3VGTGMiLCJtYWMiOiJhNTE2ZTVmOGM4MGI0MGY2NDhlNjJmYTk4MzRhMGQ1YzAyNDkyMTM2NTdiYzJmODdkYjUwM2E4ZDAwMTdiN2E4IiwidGFnIjoiIn0%3D; laravel-session=eyJpdiI6IlMwYkgwZzJ0TXM1QmVBcW9LTzNFTUE9PSIsInZhbHVlIjoiY1A3a2lGL2tDRGYxaktKQW1RS2RtRUJqT2JqRWtRU2llZ2M3RUd2ZjFUNlBaN3lOZDJjUXl5MjVhZzdYWGgrNnNzZGdNdHNEVlh6UW4vOWg5blYwK3EvaGVpYTRnUmhTT213MncwYTFKbENiVW1qTSs5cC9YN1VqMitiVUMxTG8iLCJtYWMiOiJiNzE5OWE2NGRlMDQwZTgzYjJjYTkzZDRiMzFiZjU3OTQxMjk1MzJiOGMwNTY1MjhlZTBmZTI3N2Q3OTIwNTc3IiwidGFnIjoiIn0%3D' \
--form 'name="Jusr Upds nenj"' \
--form 'business_name="jnwdurw"' \
--form 'email="hbeffbh@gmail.com"' \
--form 'phone="7458785412"' \
--form 'attachment=@"/C:/Users/Kuldeep Vishwakarma/OneDrive/Desktop/no_img.jpg"' \
--form 'message="udwu3r"' \
--form '_method="PUT"'

Create Api:

curl --location 'http://127.0.0.1:8000/api/leads' \
--header 'Accept: application/json' \
--header 'Content-Type: multipart/form-data' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImFHbWZ6ajI4VzFYRTcyUXlYbDlrSFE9PSIsInZhbHVlIjoiNW9GREVSTFlBK2tya3NxUVV3WDBxUzhzbmZmWkc4WGdtRXRwWEFESlRTWWxWdUtZaFF1QTNEYVVVd0xkVGlzOTZLaWhuMEhLVER4b3MyUlVjaWlJdFYxZEt1MTdOVkhWWFlQeEF4dnd5SlpOSmJLcHJHZzIrTHp3a0MrL3VGTGMiLCJtYWMiOiJhNTE2ZTVmOGM4MGI0MGY2NDhlNjJmYTk4MzRhMGQ1YzAyNDkyMTM2NTdiYzJmODdkYjUwM2E4ZDAwMTdiN2E4IiwidGFnIjoiIn0%3D; laravel-session=eyJpdiI6IlMwYkgwZzJ0TXM1QmVBcW9LTzNFTUE9PSIsInZhbHVlIjoiY1A3a2lGL2tDRGYxaktKQW1RS2RtRUJqT2JqRWtRU2llZ2M3RUd2ZjFUNlBaN3lOZDJjUXl5MjVhZzdYWGgrNnNzZGdNdHNEVlh6UW4vOWg5blYwK3EvaGVpYTRnUmhTT213MncwYTFKbENiVW1qTSs5cC9YN1VqMitiVUMxTG8iLCJtYWMiOiJiNzE5OWE2NGRlMDQwZTgzYjJjYTkzZDRiMzFiZjU3OTQxMjk1MzJiOGMwNTY1MjhlZTBmZTI3N2Q3OTIwNTc3IiwidGFnIjoiIn0%3D' \
--form 'name="Jusr Upds nenj"' \
--form 'business_name="jnwdurw"' \
--form 'email="hbeffbh@gmail.com"' \
--form 'phone="7458785412"' \
--form 'attachment=@"/C:/Users/Kuldeep Vishwakarma/OneDrive/Desktop/no_img.jpg"' \
--form 'message="udwu3r"'

Delete Api:
curl --location --request DELETE 'http://127.0.0.1:8000/api/leads/6' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImFHbWZ6ajI4VzFYRTcyUXlYbDlrSFE9PSIsInZhbHVlIjoiNW9GREVSTFlBK2tya3NxUVV3WDBxUzhzbmZmWkc4WGdtRXRwWEFESlRTWWxWdUtZaFF1QTNEYVVVd0xkVGlzOTZLaWhuMEhLVER4b3MyUlVjaWlJdFYxZEt1MTdOVkhWWFlQeEF4dnd5SlpOSmJLcHJHZzIrTHp3a0MrL3VGTGMiLCJtYWMiOiJhNTE2ZTVmOGM4MGI0MGY2NDhlNjJmYTk4MzRhMGQ1YzAyNDkyMTM2NTdiYzJmODdkYjUwM2E4ZDAwMTdiN2E4IiwidGFnIjoiIn0%3D; laravel-session=eyJpdiI6IlMwYkgwZzJ0TXM1QmVBcW9LTzNFTUE9PSIsInZhbHVlIjoiY1A3a2lGL2tDRGYxaktKQW1RS2RtRUJqT2JqRWtRU2llZ2M3RUd2ZjFUNlBaN3lOZDJjUXl5MjVhZzdYWGgrNnNzZGdNdHNEVlh6UW4vOWg5blYwK3EvaGVpYTRnUmhTT213MncwYTFKbENiVW1qTSs5cC9YN1VqMitiVUMxTG8iLCJtYWMiOiJiNzE5OWE2NGRlMDQwZTgzYjJjYTkzZDRiMzFiZjU3OTQxMjk1MzJiOGMwNTY1MjhlZTBmZTI3N2Q3OTIwNTc3IiwidGFnIjoiIn0%3D'

 

