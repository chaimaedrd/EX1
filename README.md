# EX1

Using object-oriented programming, we have created a form class that will allow the creation of forms.
This class must have an attribute $data of type array which will be used to pass the array $_POST to an instance of the class. In addition to this attribute, this class must have as methods :
- A constructor : which will take $data as parameters
- The method Input : which will take in parameters $type( the type of input ) and $name the name of fields
- The Submit method : allowing to create an input of type Submit
- The method getValue($index) which returns the value corresponding to $index in $_POST if it exists.

