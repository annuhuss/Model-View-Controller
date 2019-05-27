

<h1><i>
Model-View-Controller(MVC)
</i></h1>

<p>
<a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller"><em>MVC</em></a><i> is an architecture pattern commonly used for developing user interfaces that divides an application into three interconnected parts, Model-View-Controller. MVC pattern is one of the first approaches to describe and implement software constructs in  terms of their responsibilities, especially for developing graphical user interfaces.</i>
</p>

<p>
<i>A short description for a MVC pattern is given below:</i>
</p>
<hr>


<h4><i>Model:</i></h4>
<p>
Model is the central component of the pattern which is independent of        the user interface. It directly manages the data, for example, fetches 
the data by interacting with database in the back-end when needed.
It also plays with logic and rules of the application. The communication between model and controller is an essential part of the MVC. 
</p>

<h4><i>View:</i></h4>
<p>
It is view's responsibility to display the data when they are available from the controller or the model. View always corresponds to the responses for any user's requests.
</p>

<h4><i>Controller:</i></h4>
<p>
The controller handles requests from the users and checks whether the input data are valid, then forwards the data to the model or view. Overall, it connects to all parts of the MVC.  	    
</p>

<h4><i>Route:</i></h4>
<p>
Route makes possible to get any requests from the users to the controller and sends the responses back to the users.
</p>

<br>
<h4><i>Example:</i></h4>

<p>
The MVC example for this article, is programmed using HTML and PHP language, and is reflected with the above description.
</p>

<p>
The <span><strong>index.php</strong></span> file combines all the parts of the MVC example as well as the route/HTTP, it receives any requests from the users and displays the corresponding responses to the users. 
</p>

<p>
<ul><li><i><b>index.php</b> is the file one needs to execute.</i></ul></li>
</p>

<p>
I tried to make the example as simple as possible for describing the MVC and for that reason, I have located the database segment inside the model. Nevertheless, for a real-world application, you will always work with text-files or most commonly with databases and these data storage will be filled with users authenticated information. Additionally means, they are usually detached from the model.
</p>
<p>
For the sake of simplicity, I have just stored three pairs of username and password as an admin for determining authenticated users. In this case, each authenticated users obviously enters a pair of username and password out of the set below correctly, so that he or she will have an access in the auditorium. On the other hand, for every unauthorized users, the access will be denied.
</p>

<pre><i> 
 &#123;&#123;'username1', 'password1'&#125;, &#123;'username2', 'password2'&#125;, &#123;'username3','password3'&#125;&#125;
 </i>
 </pre>

<br>
<p><i>
Hopefully this article provides you a handy source for understanding of Model-View-Controller architecture pattern in a simple way by the aid of the user authentication example.
</i></p>

<p><i>
Any of yours valuable comments and suggestions for the article would be greatly appreciated. 
</i></p>


<p><i>
A details of the example and some of other related programming topics can be found in 
<a href="https://medium.com/@annuhuss/">the medium blog site</a>.
</i></p>

<br>
<h3><em>Cheers</em></h3>
