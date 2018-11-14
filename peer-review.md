## P3 Peer Review

+ Reviewer's name: Joshua Persson
+ Reviwee's name: Frank P
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/fpizzuta/p3>*


## 1. Interface

My first impression in regards to the site interface was a bit of confusion. What am I logging into? What's the purpose of this site? The user is presented with a login screen without any prompts or directions.

Once logged in the user is presented with a menu bar on the left without much direction on how to proceed. Once you start clicking on the links you can then start to deduce that this is a site for logging users and game scores. 

I really like how the site looks overall - nice and clean and modern looking. The navigation bar on the left works well with the current link that is selected becoming slightly animated and larger in font. The New Game page is very simple to use and is rather self-explanatory.

I would suggest having a short intro to let the user know what the site is about and what it does mainly on the login screen. I think if the user knows this is a site for logging users and game scores it would help eliminate some confusion as to the purpose of the site.


## 2. Functional testing

Here's what I tried for functional testing:

Submitting the empty form:
   - The form responded as expected giving me errors in the appropriate places. 

Submitting the form with partial data:
   - The validation worked as expected, I received errors on the empty fields and the form retained my previous data. 
    
Submitting the form with various data types:
   - I submitted the form with some combinations of rather large numbers, negative numbers, player names with symbols and numbers and game names with symbols and numbers. It looks like the player name can accept alpha|numeric so that validated as expected. It looks like you can pass extremely large scores - I'm wondering if you want to place a limit of the amount of digits you can enter? Otherwise, this field validated correctly because I was unable to enter anything but digits. The game name field accepts just about anything - symbol, number and alpha. Not sure if that was intended?

I tried accessing the site via a faulty url: *<http://p3.pizzuta.com/games2>* and I received the appropriate generic 404 page that comes with Laravel with an option to return to the Login page.

Other things I tried:
  - Clicking on individual users - not available as a link. Maybe a future enhancement?
    

## 3. Code: Routes

Reviewed web.php and found 8 routes with appropriate comments. No other code found.

## 4. Code: Views

All your view files looked great. I really liked how you used modules for each component of your layout and that is something I would like to implement on my project to make the layout a little more robust. Layout inheritance was used successfully and I did not find any evidence of straight PHP in the view code. Used {{}} to sanitize where appropriate. Blade syntax looks good. 

## 5. Code: General

All in all I think your code is solid and looks good. Code generally follows data best practices.  Here are some suggestions:

- Besides the name of the Controller there is little to no commenting or explanation as to what the code is executing. Some simple comments would help other programmers understand what you are doing.

- There are a number of commented out dump statements in the Controllers that were probably used for testing that can be omitted from the production code.

- I ran your url through the [W3 Validator](https://validator.w3.org/nu/?doc=http%3A%2F%2Fp3.pizzuta.com%2F) and there were about a dozen or so errors and warnings in the html.


## 6. Misc

Frank - I think that your P3 code is solid and just a little clarification of the intent of the website will go a long way. If you're using for P4 it will be interesing to see the enhancements by adding a database - good luck going forward! 