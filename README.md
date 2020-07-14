Introduction: I am implementing the Application database which involves customer to place an order and view details of order, payment details. For this project I am using PHP as programing language. My database has tables that have information about customers, login details, product details, order details, Product department, shipping details and Payment details of orders placed by Customer. The Application will have login page where we use username and password for already existing customer and if it is new customer, they would have an option to register and these details of customer will be updated in customer table. After successful login customer will go to home page where he can retrieve data regarding his orders with help of order id, he can also investigate products available with the help of product ID.

Assumptions:

⦁	Email id provided in the customer details should be unique as it is considered as username for login.
⦁	All Billing transactions in payments are assumed to be successful.
⦁	All Products are assumed to be in one of the departments of product.
⦁	Every shipped order will have its shipping number which is unique to that order.
⦁	Each order has one customer and customers are not unique that means one customer can place n number of orders.
⦁	Payment types are assumed as Credit, Debit as I have assumed it as online shopping.

Functionality: 

I am designing an Application using PHP, which is used by customers to view their orders, payment history, product details, update their information, delete customer info if requested. This application basically has a login page where customer must sign in to view home page where they can view information that they require. If a new customer is willing to register we will have a page where they can enter details and signup with the application. I am Planning to do various transactions such as inserting values, retrieving data, updating data when requested.

Transactions:
⦁	When a new customer is trying to signup then these details are stored in database customer_info table and Email as username, password will be stored in Login table.
Input: Customer details are entered in application these details are fetched.
Output: Entered details are updated in respective tables.
 
⦁	When an existing customer wanted to update or change their details, they can edit their details after logging into application then these details are updated in customer_info table. Except Email they can update any other details. 
Input: Customer details are updated after login into application.
Output: Edited details are updated in respective tables.

⦁	Data regarding orders, products, Payment can be retrieved and viewed through application.
Input: Details regarding orders, products, payments can be retrieved by providing ordered, productid, payment number.
Output: All details with respect to orders, Products, payments can be viewed by retrieving from orders, products, payments table.



Relationship Database Schema:

1.Customer_info:

Customer ID	FirstName	LastName	Email	Age	City	State	Country	Zipcode	Gender

2. Login_details:

Username	Password

3.Products:

ProductID	ProductName	Department	UnitsinStock	Discontinued

4.Department:

DepartmentName	DepartmentID

5.Orders:

Orderid	CustomerID	Orderstatus	ProductId	OrderDate	Shippingaddress
Shippingcity	Shippingzipcode	Shippingdate	Shippingnumber	Paymentnumber


6.Shippingdetails:

ShippingID	ShippingCompany	ShippingStatus	ShippingCountry

7.Payment:

Paymentnumber	PaymentType	PaymentStatus 


System details:

Programming language: PHP

DBMS: MS Access

Editor: Sublime Text

Operating System: Windows 10, 64 bits

Control Panel: Xampp Control panel (Apache, MySQL)

