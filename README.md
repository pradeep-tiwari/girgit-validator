# girgit-validator
Standalone, lightweight and easy-to-use PHP validation library.

### What?
Form validation is an integral part of a PHP project. If you are not using a full-fledged framework like Laravel or Codeigniter, you know what a pain it is. Girgit-Validator caters to most of your form validation pain-points.

### Why use it?
If any of the following reasons are valid in your case:
- You are not using a full-fledged framework
- You do not want to maintain your own validations
- Your project requires few basic to advanced validations
- You wish to start using a lightweight library within no time
- You are interested in learning some of the magic that few big frameworks or libraries perform behind the scenes

### Requirements
This library has been tested with PHP version 5.6 & 7. It relies on PSR-4 standards based composer autloader.

### License
MIT, free software, use at your own risks :)
No way the author of this library is liable for any damages caused to your system.

### How to use it?
4 easy steps:
- Require vendor/autload.php
- Create a validator instance with the datasource e.g. $_POST
- Define set of rules
- Run the validator

Its that simple. Please go through the sample example files in the /examples directory.

### Limitations
It does not support nested or deep multi-dimensional array based validations because generally in most cases, this is not what you require.

### To Do
- Cache reflected objects per application life cycle
- Signify protected members with _ for visual clarity
- Write unit-tests
- Document strategy classes
- Add more strategies
- Explore edge cases
- and much more yet..

### What motivation does Girgit PHP components serve?

Girgit doesn't aim to be the next best framework/library in the market. Nor it is a try to 
reinvent the wheel. However it does exists for a purpose: "I've always wanted to learn how 
those popular frameworks run behind the scenes".

Girgit is a small step towards that purpose. Also when working on personal projects, nothing 
makes me happier than having 100% code control.

Girgit aims to be very lightweight and small but sufficient enough to adhere to 80/20 principle 
which states that: "roughly 80% of the effects come from 20% of the causes". I've personally found
that most of the developers spend big time on projects of small to medium scale. This is where small
set of lightweight components or microframeworks truly shine. Girgit aims to serve in this range.

Also it doesn't claim to be most secure but I've experienced that "in wrong hands, even right tools
can go wrong". When working with really beautiful frameworks like Laravel, Symphony, Yii etc., it
becomes important that we do understand the framework's way of doing certain things else bad 
consequences gonna happen in real-world projects. 

Let me clear what "Re-inventing the wheel" means for me: "If you are developing a real world project
that has to be well designed and tested, rely on tools driven by community, no the one whose only GOD
is YOU". So, Girgit aims to learn few fundamental priciples of "wheel mechanics" in the world of web
deveopment.  

Writing a framework/library is no "one man journey" and by no means an easy task. A complete 
developer eco-system is required for its success. However, there always have been that one leader
who took that first step which was then driven by huge contributors and followers. Along with
many other gurus, I would specially like to thank Fabien Potenciar of Symphony fame. Fabien is a
code machine and he knows how to architect one.

I hope this article explains why Girgit exists. Happy Journey :)
