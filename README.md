# e3_challenge-d8

ABOUT
-------------
Drupal 8 website built for Elevated Third's code review.  Custom content type of Event, along with a custom view to build /event page.  A custom bootstrap 3 subtheme with gulp and SASS.  FontAwesome has been added to the project as well.  The view has an attachment with a custom header, the featured article is driven by "Sticky at the top of the list".  The remaining events are all sorted by date.  I created a feature called E3 events challenge that holds the custom content type, fields and view display.

RUNNING THE PROJECT
-------------
1. Clone the repo into a folder called e3_challenge-d8, a database backup has been provided in the folder /db/ (e3_challenge_d8).
2. Restore the database backup locally
3. Alter the connection strings (If neccessary).  The current connection string configuration is root:root


ALTERING & COMPILING THE SASS
--------------
Simply CD into the kaytee_dog theme directory, you may start all gulp tasks by typing 'gulp' and hitting enter.  The gulptask are defined in gulpfile.js

THOUGHTS
---------------
I decided to implement <svg> wrappers to allow the clip-path support for Firefox.  I have not had the opportunity to test in Internet explorer.  All of the fields have been created and elements are all in place.




