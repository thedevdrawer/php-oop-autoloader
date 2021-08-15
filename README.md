# PHP OOP Autoloader
If you are ever working with OOP in PHP you need to know about autoloading your classes. You can do this with or without Composer. In this tutorial, we will not be using Composer. Instead, I will show you a quick way to actively look at a folder for specific classes and autoload them so they can be used throughout your application without having to review or include new files every time you create them.

This solution is built into frameworks like Laravel, but if you ever need to build a simple OOP application, this is the best way to minimize code and time.

We will be using the "spl-autoload-register" PHP function.

View the Video: https://youtu.be/ox8aeQ31PE0