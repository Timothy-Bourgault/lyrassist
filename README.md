# Lyrassist

#### A Way To Create Lyrics, May, 2017

#### By **Clayton Collins and Timothy Bourgault**

## Description

This app allows users to create lyrics based on their spotify history. It requires users to sign in and provide access to their listening history, which we use to generate a database of lyrics. Watson then analyzes the lyrics for various key features, such as the subjects, objects, and actions of sentences. We take these features and shuffle them up, creating non-sensical poems.

## Setup/Installation Requirements

* Clone this repository
* Begin MAMP or similar service in the root directory
* Make sure you have a database called `lyrassist` in mySQL
* Navigate to localhost:8888 in your web browser
* Use the admin name and password `lyra` to initialize the site
* Click 'lyricist' to log in to spotify and generate your profile (you MUST do this first!)
* Click 'composer' to create custom poems over and over again
* Open Poem Archive tab to view the last most recent generated poems


## Known Bugs

* Refreshing on the 'lyricist' page will break the site. This has to do with how spotify handles API access, and could probably be fixed with better redirecting.
* Not all the API calls catch errors, so it is likely that there are some unnecessary functions running and occasionally will throw errors.
* Website can't run without spotify logging in.

## Support and contact details

Let us know if you run into any issues or have questions, ideas or concerns.  Contact us or make a contribution to the code via pull request.

## Technologies Used

Drupal, PHP, IBM's Watson API, jWilsson's Spotify API, musiXmatch API, Spotfy API


### MIT License

Copyright (c) 2017 **Clayton Collins and Timothy Bourgault**
