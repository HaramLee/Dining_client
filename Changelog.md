CHANGELOG
-Andrew
-Haram

LAB-LOG

10/20/2016 5:00 PM - Haram
- Updated base controller.
- Updated basic layout in template.
- Added a narvar view.
- Added Menu and Categories models that takes values from database.
- Rearrange homepage body to match the lab layout.

10/20/2016 5:29 PM - Andrew
- Added Hiring controller
- Added parsedown library and autoloaded it
- Added secondary template to use for hiring and other pages
- added jobs.md to hold the content for the hiring index page

11/3/2016 3:06 PM - Andrew
- Added Caboose package and all of its components
- Added Crud and Toggle Controllers
- Updated started.sql to include the ci_sessions table
- Updated autoload and config to load sessions and caboose packages
- Changed MY_Controller to load caboose styles and appropriately modified templates
- Changed navbar to show links for the new controllers

11/10/2016 4:25 PM - Haram / Andrew
- Updated Crud controller to show the existing menu items
- Added edit method in Crud controller
- Updated caboose to improve form appearance
- Added save and cancel button to edit view and cancel method in crud controller

11/12/2016 11:45 AM - Haram
- Added rules for form values to be used for validation for editing menu items, including images.
- Added session removal in index method to clear menu item session, so you won't get stuck seeing one menu.
- Added error message method to show the user that any values in the form wasn't passed as a message.
- Added add method and button to add new menu items to the database.
- Added delete method and button to delete a menu item from the database.
- Added save method to save the either new/edit menu item into the database.
- Implemented to upload image in edit method.

11/18/2016 10:20 AM - Andrew
- Added "Orders Processed so far" to the Shopping menu
- Added a totalling function when an order is being placed
- Added a checkout and clear functions to finalize an order or clear it using session data
- Orders are saved to an XML file in the data folder
- Function to retrieve previous orders and parse the stored XML files

11/26/2016 04:30 PM - Haram / Andrew
- Set up the database server of the lab by cleaning out the unrequired table.
- Removed all the unnecessary model class and control class.
- Setup a String that is displayed when someone tried to enter the server web app.
- Setup the backend package with restful and created restful api controller
- Added get, post, and put method in aspect of CRUD

11/26/2016 06:30 PM - Haram / Andrew
- Set up the database server of the lab by cleaning out the unrequired table.
- Added restful api as third party
- Updated Menu model class to call get, post, and put to the server side 