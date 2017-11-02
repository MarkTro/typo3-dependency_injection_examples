# Examples of dependency injections on Typo3

The little extensions shows the three possible methods of dependency injections on Typo3. 
If you like you can install it. If you add the plugin on a page, you will see the loading order. 

The really interesting stuff is in the code. The ExampleController gets the TestService 
while this Service injects the ExampleService in three different ways. There're also some 
hints which method has benefits or should be used or rather not. 

 Sources of inspiration were:
 * https://wiki.typo3.org/Dependency_Injection
 * https://daniel-siepmann.de/Posts/2017/2017-08-17-typo3-injection.html
