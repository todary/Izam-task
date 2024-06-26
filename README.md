Database (SQL) - (Abanoub Refaat)
Giving the following databases, you can download the SQL file from here:
http://careers.izam.co/online-test/store_test.sql

products

stock_transactions

 Write the following Queries:
Q1- a query that lists all products (name and the current stock quantity) for each, the current stock is calculated by summing the negative and positive “Quantity” field in the “stock_transactions” table.


Q2- a query that gets the total sold and total purchased quantities from each item.
 


Q3- The average sold price for each item.
-------------

Backend Coding:

Q4- Write a function that takes a two-dimensional array and returns a one-dimensional array containing the unique values of each array (Without using the array_merge  function on PHP). 

I.e. input will be:
[  0 => [0=>’a’ , 1=>’b’ ,  2=>’c’ ] ,
1 => [0=>’x’ , 1=>’b’ , 2=>’a’],
2=> [0=>’z’ , 1=>’z’ , 2=>’v’] ]

Output should be:
[a,b,c,x,z,v]
----

Q5- Write PHP code that searches in a sorted array, without calling any built-in functions.
Note: Please use an algorithm that achieves the shortest run-time
The function will get a sorted array and the needle element value.
The function will return the key of the item if it is found, or false if it is not.

---
Q6- Write PHP function that takes an HTML tag as string and returns its ID value if existed or false if it has no ID
example: When calling
getTagID('<div id="container">');
it will return the string:
"container"

------

Q7- Write a function that takes a two-dimensional array and rotates each ROW for 0,1,2 ..etc times, so it will shift the first row 0 times to the right, the second row will be shifted 1 time, the third will be shifted three times.. For example
If it got this array


A
D
F
K
N
P
R
S
V
X
Y
Z


It will return the following:

A
D
F
P
K
N
S
V
R
X
Y
Z


-----

Javascript:
Open the following HTML page, open the browser console and write a javascript code that does the following (copy and paste the code to answer):
http://careers.izam.co/online-test/jstest.html

Q8- Swaps the second and third columns in the table.


Q9- Validate the form as follows:
“Method” Input must be required before submitting the form.
If the user selected the “Email” for Method, the “Phone” input should disappear, and he must enter the email address before submitting the form.
If the user selected “Phone” for Method, the “Email Address” input should disappear, and he must enter the phone before he submits the form.
After submitting the form, the submitted values should automatically fill the form by code, and the above rules should be applied.

