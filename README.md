

<h1><i>
Model-View-Controller(MVC)
</i></h1>

<p><em>MVC</em><i> is an architecture pattern commonly used for developing user interfaces that divides an application into three interconnected parts, <strong>Model-View-Controller</strong>. <i>MVC pattern is one of the first approaches to describe and implement software constructs in terms of their responsibilities, especially for developing graphical user interfaces, </i><a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller">Wiki</a></i>.
</p>

<p>
<i>A short description for a MVC pattern is given below:</i>
</p>
<hr>


<h4><i>Model:</i></h4>
<p>
Model is the central component of the pattern which is independent of the user interface. It directly manages the data, for example, fetches the data by interacting with database in the back-end when needed. It also plays with the central logic and rules of the application. The communication between model and controller is an essential part of the MVC.
</p>

<h4><i>View:</i></h4>
<p>
It is view’s responsibility to display the data when they are available from the controller or the model. View always corresponds to the responses for any user’s requests.
</p>

<h4><i>Controller:</i></h4>
<p>
The controller handles requests from the users and checks whether the input data are valid, then forwards the data to the model or the view depending on the user input. Overall, it connects to all parts of the MVC pattern. 	    
</p>

<h4><i>Routing:</i></h4>
<p>
Routing make it possible to get any requests from the users to the controller and sends the responses back to the users.
</p>

<br>
<h4><i>A MVC Example:</i></h4>

<p>
To depict the MVC pattern I have programmed the example using HTML and PHP language. Obviously this example is reflected with the above description.
</p>

<p>
The <span><strong>index.php</strong></span> file combines all the parts of the MVC example as well as the route/HTTP that receives any requests from the users and displays the corresponding responses to the users. 
</p>

<p>
One needs to execute <b>index.php</b> file. This file operates on the following three files:</i></ul></li>
</p>
<p>
<ul>
<li>controller.php</li>
<li>model.php</li>
<li>view.php</li>
</ul>
</p>
<p>
I tried to make the example as simple as possible for describing the MVC and for that reason, I have located the database segment inside the model. Never the less, for a real-world application, you will always work with text-files for a small amount of data or most commonly with databases, e.g. MySQL for dealing with a large amount of data. These data storage will be filled with users information which indicates, they are usually detached from the model but maintain a safe and robust communication between each other.
</p>
<p>
For the sake of simplicity, I have just stored three pairs of username and password as an admin for determining authenticated users. In this case, each authenticated users certainly enters a pair of username and password out of the set below correctly, so that he or she will have an access to, let’s say, in the auditorium to watch the belle dance. On the other hand, an unauthorized user’s access will be denied for getting the entrance.
</p>

<pre><i> 
 &#123;&#123;'username1', 'password1'&#125;, &#123;'username2', 'password2'&#125;, &#123;'username3','password3'&#125;&#125;
 </i>
 </pre>

<br>
<p><i>
Hopefully this article will be a handy source for understanding how a Model-View-Controller architecture pattern works in a simple but effective way.
</i></p>

<p><i>
A details of the example and some of other related programming topics can be found in 
<a href="https://medium.com/@annuhuss/">the medium blog site</a>.
</i></p>
