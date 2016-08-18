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

