
## OneSet


## About OneSet

OneSet is a web application that allows musicians to easily find open availabilities to play, wherever someone has posted an opening.
With 2 user types, musicians and venues(people looking for musicians, both can register and then become searchable to one another. Musicians can find venues that have posted available openings, and Venues can also search for local musicians.


## Getting Started

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Built With

- **[Laravel6](https://laravel.com/)**
- **[React.js](https://reactjs.org/)**
- **[BootStrap](https://getbootstrap.com/docs/4.1/getting-started/introduction/)**
- **[reactstrap](https://reactstrap.github.io/)**
- **[MDBootStrap](https://mdbootstrap.com/)**


## First Iteration

I chose 11 stories to complete during my first sprint of this project, accomplishing 8 of them.  
Users are able to register and edit their own personal profile with a bio, and tag names for musicians.
Users can also view the opposite user type in a search view, that comes with updated data from their profiles.


## Known Bugs/Things to Fix
 -Fixing buttons on register to toggle press, using a radio instead. Just have to figure out how to capture the event.
 
 -A musician can select multiple of the same tags from the dropdown on their profile.
 
 -I learned late that the Dev Tools IphoneX view does not translate 100%, so I will need to update my footer buttons/icons to style         correctly
 
 -When you refresh the page it takes you back to the profile page(needs to stay on the same)
 
 -When you update your bio, if you refresh it will revert back to what was last in the database. However if you log back in it will be populated as you had just saved it. Needs to be a savy way of conditional rendering from local storage for the refresh.
 
 
## Next Iteration

Continue working through my backlog, focusing on:

-Finishing the profile picture and youtube upload

-Allowing more tag selections for musicians

-Adding a filter search for finding users and musician types

-Creating the calander for venues to populate available time slots
 


## Security Vulnerabilities

If you discover a security vulnerability within OneSet, please send an e-mail to Taylor Akin via [taylorakin.ky@gmail.com](mailto:taylorakin.ky@gmail.com). All security vulnerabilities will be promptly addressed.

## Acknowledgements

A big thanks to Justin Hall and Ian Rios teaching me over the past 16 weeks, and for helping me gain all the knowledge that I now have.

