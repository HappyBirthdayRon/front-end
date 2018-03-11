# Changelog

## Rules

* Team membership:  NC (Captain), QL (Mate)
* Team conventions: Allman notation, markdown for changelog  
* Changelog Format: Read from newest to oldest

## Version 0.1

### New components
--------Mar 11, 2018-------
* Added travis.yml for build compatibility - QL
* Added Fruit and Fruitbowl, Fruit, Task models for testing - QL
* Added Bootstrap.php for phpunit testing compatibility - QL
* Added FruitbowlTest, FruitTest, TaskListTest, TaskTest for testing - QL
* Added a Task model for testing App parameters - QL
* Added composer.json for autoloading phpunit test - QL
* Added phpunit.xml for unit test configuration - QL

### Updated components
--------Mar 11, 2018-------
* Updated Tasks to have a method for getting status - QL

### Updated components
--------Mar 4, 2018-------
* Updated mtce to include size, group, status - QL
* Updated itemadd to include size, group, status - QL
* Updated Tasks.php to include validation for status - QL

### New components
--------Feb 28, 2018--------
* Added itemadd.php - NC
* Added itemedit.php - NC
* Added itemnav.php - QL
* Added Roles.php - QL
* Added itemadd.php - QL

### Updated components
--------Feb 28,2018-------
* Updated the models to fix the bug that one of value will be null - NC
* Updated mtce controller with functions that allow for add, edit, delete - NC
* Updated mtce for showing specific maintenance pages - QL
* Updated the by_priority view with checkbox for the owner to remove - NC
* Updated the View controller so it allows for the deleting of tasks only if they are an owner - NC
* Updated mtce to work with pagination - QL
* Updated menubar.hp to include new user roles - QL

### New components
--------Feb 14, 2018--------
* Added Helpme.php controller that post a job ad - NC
* Added data/job.md that is the advert - NC
* Added Parsedown.php library - NC
* Created second template - QL
* Created a controller for Work tab - QL
* Created Tasks.php - QL
* Updated autoload.php to load Tasks - QL

### Updated components
--------Feb 14,2018-------
* Changed the config.php to route correctly - NC
* Fixed base render method to accept templates - QL
* Added priority and category components to Works page - QL
* Update the pagetitle to reflect our team name - NC
* Changed MY_Controller to render different views - NC
* Update the view homepage.php to show the number of uncomplete task and latest 5 tasks - NC
