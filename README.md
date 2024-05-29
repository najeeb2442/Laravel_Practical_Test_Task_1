Task 1. Perform crud operations
Please create a simple example to create product, read product, update product and delete product operations with a database using Laravel models, controllers and views.

Model

     The product model will have following fields:
name
description
price

Controller

     The product controller class will include following functions:
index (list Results)
create (show add form)
store (add new record in db)
show (view product by id)
edit (show edit form by populating fields)
update (save changed data of product)
delete (delete product from db)

Views

     The view will include following layouts:
welcome (main entry page layout)
product list (it will show product list layout with create, edit, and delete actions)
product add or edit (add and edit form gets the input for the product fields)
