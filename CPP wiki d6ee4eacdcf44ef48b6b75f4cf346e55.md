# CPP wiki

[Primitive Built in types](https://www.notion.so/10d389ddd32e4c2da2ebeee9d9510387)

---

Several of the basic types can be modified using one or more of these type modifiers −

- signed
- unsigned
- short
- long

---

The following table shows the variable type, how much memory it takes to store the value in memory, and what is maximum and minimum value which can be stored in such type of variables.

[Untitled](https://www.notion.so/270baf3abf4d4efbb7e7b0d3cbdc5a47)

- Default return type of all cpp functions is int
- Without return 0 statement in main a warning will be produced
- Data type representation is machine specific in cpp
- Void can be used to declare generic pointers
- If we use vinay modifier alone it defaults to int

---

[Untitled](https://www.notion.so/d9ce6addf7b046dd83c16592312d1371)

---

## Lvalues and Rvalues

There are two kinds of expressions in C++ −

- **lvalue** − Expressions that refer to a memory location is
called "lvalue" expression. An lvalue may appear as either the left-hand or right-hand side of an assignment.
- **rvalue** − The term rvalue refers to a data value that is
stored at some address in memory. An rvalue is an expression that cannot have a value assigned to it which means an rvalue may appear on the
right- but not left-hand side of an assignment.

Variables are lvalues and so may appear on the left-hand side of an 
assignment. Numeric literals are rvalues and so may not be assigned and 
can not appear on the left-hand side. Following is a valid statement −

---

## Initializing Local and Global Variables

When a local variable is defined, it is not initialized by the 
system, you must initialize it yourself. Global variables are 
initialized automatically by the system when you define them as follows −

[Untitled](https://www.notion.so/b6d1aa1ed97d449d825d8452787f2169)

It is a good programming practice to initialize variables properly, otherwise sometimes program would produce unexpected result.

A program can have same name for local and global variables but value of local variable inside a function will take preference.

A reference variable must be initialised at the time of declaration

:: varname ( scope resolution operator here used to print global variable varname )

---

- Explicit use of return 0 statement will indicate program was successfully executed
- An inline function is a function that is expanded inline when invoked
- Only trailing arguments can have default values
- An argument to a function can be declared as const

```cpp
int strlen( const char *p )
int length( const string &s )

```

---

---

Following are other examples of various types of Integer literals −

```
85         // decimal
0213       // octal
0x4b       // hexadecimal
30         // int
30u        // unsigned int
30l        // long
30ul       // unsigned long

```

## Boolean Literals

There are two Boolean literals and they are part of standard C++ keywords −

- A value of **true** representing true.
- A value of **false** representing false.

> You should not consider the value of true equal to 1 and value of false equal to 0.

---

## Character Literals

Character literals are enclosed in single quotes. If the literal 
begins with L (uppercase only), it is a wide character literal (e.g., 
L'x') and should be stored in **wchar_t** type of variable . Otherwise, it is a narrow character literal (e.g., 'x') and can be stored in a simple variable of **char** type.

A character literal can be a plain character (e.g., 'x'), an escape 
sequence (e.g., '\t'), or a universal character (e.g., '\u02C0').

There are certain characters in C++ when they are preceded by a 
backslash they will have special meaning and they are used to represent 
like newline (\n) or tab (\t). Here, you have a list of some of such 
escape sequence codes −

[Untitled](https://www.notion.so/469861746b014040afc54d2a0ec94a9e)

---

There are two simple ways in C++ to define constants −

- Using **#define** preprocessor.
- Using **const** keyword.

Note that it is a good programming practice to define constants in CAPITALS

The data type modifiers are listed here −

- signed
- unsigned
- long
- short

The modifiers **signed, unsigned, long,** and **short** can be applied to integer base types. In addition, **signed** and **unsigned** can be applied to char, and **long** can be applied to double.

---

## Type Qualifiers in C++

The type qualifiers provide additional information about the variables they precede.

**const**

Objects of type **const** cannot be changed by your program during execution

**volatile**

The modifier **volatile** tells the compiler that a variable's value may be changed in ways not explicitly specified by the program.

**restrict**

A pointer qualified by **restrict** is initially the only means by
 which the object it points to can be accessed. Only C99 adds a new type
 qualifier called restrict.

---

an object created inside a block using **new**, will remain in existence until explicitly destroyed using **delete** 

the first dimension of array may be variable whose value is supplied at runtime . All others must be constants

like any other operator new and delete can be overloaded

---

- Explicit use of return 0 statement will indicate program was successfully executed
- An inline function is a function that is expanded inline when it is invoked
- only trailing arguements can have default values
- an argument to a function can be declared as const

 

```cpp
int strlen( const char *p )
int length( const string &s )
```

---

- By default members of classes are private
- objects can be defined by placing their name immediately after closing brace

 

```cpp
class Test{
//code here
} t1, t2, t3;
```

- Unlike many other programming languages cpp put semicolon after class definition

```cpp
class Item{
//code here
};
```

- Outside class definition of member function
- syntax

```cpp
return-type class-name :: function-name (argument declaration )
{
	//function body
}
```

---

- A member function can call another member fnction directly without using dot operator
- when a function is defined inside a class, it is treated as an inline function. Therefore, all the restrictions and limitations that apply to an inline function are also applicable here.
- normally only small functions are defined inside class definition
- It is normal practice to place all data items in private section and all the functions in public
- separate memory is allocated for member variables bit no separate memory is allocated for member functions

---

static data members 

- It is initialized to zero when the first object of its class is created.
- only one copy of that member is created for entire class and is shared by all the objects of that class, no matter how many objects are created
- It is visible only within class but its lifetime is entire program
- static variables are normally used to maintain values common to entire class
- Static variables are also known as class variables

```cpp
int Item :: count // definition
```

- Note that type and scope of each static members variable must be defined outside the class definition

 

---

## Static member functions

- A static function can have access to only other static member ( functions or variables ) declared in the same class
- A static member function can be called using class name ( instead of its objects ) as follows

       class-name :: function-name

 

---

## Friend function

- To make an outside function friendly to a class, we have to simply declare this function as a friend of the class as shown below

```cpp
class ABC{
public:
friend void fun1();
};
```

- usually it has objects as arguements
- It can be declared in private or public part
- member functions of one class can be friend functions of another class. In such cases, they are defined using scope resolution operator as below

```cpp
class A{
friend int B :: fun1();
}
```

- We can also declare all the member functions of one class as the friend functions of another class. In such cases class is called as friend class.

```cpp
class A{
friend class B;
}
```

---

## const member functions

 

- If a member function does not alter any data in the class, then we may declare it as a const member function as follows

```cpp
void mul(int, int) const;
double get_balance() const;
```

- The qualifier const is appended to the function prototypes ( in both declaration and definition ) The compiler will generate an error message if such function tries to alter data.

---

## Pointer to member

 

```cpp
int A ::* ip = &A :: m;

cout << a.*ip; // display value of m
cout << a.m;  // display value of m
```

```cpp
ap = &a // pointer to object
cout << ap->*ip; // display value of m
cout << ap->m;  // display value of m
```

pointer to member functions

(object.*pointer-to-function) (10);

(pointer-to-object→*pointer-to-function) (10);

---

## Constructor

- constructor enables an object to initialize when it is created.
- destructor destroys the object when they are required
- constructor should be declared in public section, they do not have return type
- the derived class can call base class constructor
- construcor cannot be virtual
- An object with constructor cannot be used as member function
- constructor can accept ta refrenece to its own class as a parameter

```cpp
class A{
public: 
 A(A &a){}
};
```

- constructor overloading is allowed in c++

---

## Constant Objects

- We may create and use constant objects using const keyword before object declaration

```cpp
const matrix m(a, b); //object m is constant
```

- Any attempt to modify value of a and b will generate compile time error
- constant object can call only constant member functions

---

## Destructor

Synatx: ~class-name(){ }

- A destructor nevevr takes any argument nor does it return any value
- The primary use of destuctor is freeing up the memory in freeing up th memory reserved by the object before it gets destroyed.

---

## Operator overloading

### operators that cannot be overloaded

- class member access operators ( . and .*)
- scope resolution operator ( :: )
- size operator ( sizeof )
- conditional operator ( ? : )

syntax:

return-type class-name :: operator op ( argument )

{

  [// f](//f)unctionbody

}

  

- Operator functions must bee either friend functions or member functions
- Declare the operator function operator op() in the public part of class

---

- Only existing operators can be overloaded. New operators cannot be created
- Friend functions cannot used to overload certain operators. However member functions can be used to overload them.

     = () [] →

 

---

## Type Conversion

- The constructors used for the type conversion take a single argument whose type is to be converted.

### class to basic type

 

```jsx
vector :: operator double()
{
	double sum = 0;
	return sqrt(sum);
}

..
..

vector v1;
double length = v1;
```

Casting operator function should be 

- It must be a class member
- It must not specify a return type
- It must not have any argument

---

### One class to another class type

Such conversion between objects of different classes can be carried out by either a constructor    or a conversion function.

In case of conversion function , conversion takes takes place in source class and object is returned to destination class.

In case of constructor, conversion take place in destination class.

---

## Abastract class

- an abstract class s a class that is not used to create objects
- An abstract class is only used as base class
- A class can only be considered as abstract class if it has at least one pure virtual function

---

If any base class contains a constructor with one or more arguments, then it is mandatory for  derived class to have a constructor and pass the arguments to the base class constructors 

- A class can contain objects of other classes as its members. This kind ofrelationship is called containership or nesting

---

## Declaring Pointer

- Syntax: data-type *pointer-var
- We can locate asterisk ( * ) immediately before the pointer variable, or between the data-type and the pointer variable, or immediately after the data type. It dos not cause any effect in the execution process.

```cpp
int *ptr, a;
ptr = &a;
```

- Pointer to pointer

```cpp
int a, *p1, **p2;
p1 = &a;
p2 = &p1;
```

- We can also use void pointers, known as generic pointers, which refer to variables of any data type before using void pointers we must cast the variable to the specific data types that they point to.
- Pointers which are not initialized in a program, are called Null pointers. Pointers of any data typecan be assigned with one value i.e. '0' called null address
- Indirection operator *
- attempt to dereferenced an unnitialized pointer, will cause runtime error by referring to any other location in memory
- we cannot perform pointer arithmetic on variabes which are not stored in contigous memory location
- There is no error checking of array bounds in c++. Suppose we declare array of size 25. The compiler issues no warnings if we attempt to access 26th location. It is programmer's task to check the limits.

## Array of pointers

```cpp
int *inarray[10];
```

## Char array of pointers

```cpp
char *ptr[10] = { "books", "television", "computer", "sports" };

char str[25];
```

- A string ends with the null character '\0' in c++

## Pointers to functions

- Syntax: data-type (*fun1)();

## Pointers to objects

```cpp
item x;
item *p = &x;

x.show();
p->show();
(*ptr).show();
```

```cpp
item *ptr = new item;
```

- The pointer this acts as an implicit argument to all the member functions.

```cpp
return *this; //returns object it points to
```

- Pointers to objects of base class are type-compatible with pointers to objects of a derived class
- Runtime polymorphism is achieved only when a virtual function is accessed through a pointer to base class
- We cannot have virtual constructors but we can have a virtual destructor

 

## Pure virtual function

also know as Do nothing functions

```cpp
virtual void display() = 0; // Pure virtual function
```

- Class containing pure virtual functions cannot be used to declare any objects of its own. Such classes are called abstract base  classes.

---

## I/O Operations

- A stream is a sequence of bytes.
- The source stream that provides data to the program is called the input stream and the destination stream that receives output from the program is called the output stream.
- A program extracts the bytes from an input stream and inserts bytes into an output stream
- A stream acts as interface between the program and the I/O devices used
- cin and cout are predefined objects in iostream

 

```cpp
char c;
cin.get(c); // get char from keyboard
c = cin.get(); // same
```

```cpp
cout.put('x');
cout = put(ch); // ch is variable
cout.put(68); // displays 'D' ( ASCII Value conversion ) 
```

- The getline() function reads a whole line of text that ends with newline character

syntax: cin.getline(linr, size)

```cpp
char name[20];
cin.getline(name, 20);
```

- cin can read strings that do not contain white spaces

---

```cpp
cout.write(line, size);
```

- It is possible to concatenate two strings using write() function.

```cpp
cout.write(s1,m).write(s2, n);
```

---

## ios format functions aios format functionsios format functionsios format functionsnd manipulators

[ios format functions](https://www.notion.so/871e197272cf47ec95afa4e5856aca59)

- To access the manipulators, the file iomanip should be included in the program

[Manipulators](https://www.notion.so/69b75cd4eafa45228050ffbab82eac69)

### width()

```cpp
cout.width();
cout.width(5);
cout<<543;
cout.width(5);
cout<<12<<"\n";
```

- c++ never truncates the values

### precision

- By default the floating numbers are printed with six digits after the decimal point.

synatx: cout.precision(d);

```cpp
cout.precision(3);
cout << 3.14153<<"\n"; // results in 3.142 ( rounded to nearest cent )
cout << 2.50032; //results in 2.5 ( no trailing zeros )
```

- Precision setting stays in effect until it is reset
- Default precision is 6 digits

### fill()

- The unused positions of the field are filled with white spaces by default.
- We can use fill() to fill the unused position by any desired character

```cpp
cout.fill(ch);
```

```cpp
cout.fill('*');
cout.width(10);
cout << 5250 << "\n"; // results in ******5250 
```

- like precision fill() stays in effect till we change it

[manipulators](https://www.notion.so/f57a78152dcd48bdb3da83704c376581)

```cpp
cout << setw(10) << setiosflags(ios::left) << 12345;
```

```cpp
cout << setw(5) << setprecision(2) << 1.2345 
     << setw(10) << setprecision(4)
     << sqrt(2)
     << endl;
```

### own manipulator

```cpp
ostream & unit( ostream & output)
{
    output << "inches";
    return output;
}

cout << 36 << unit; // results in 36 inches
```

---

## File

```cpp
infile.seekg(10); 
/* 
moves the file pointer to the byte no. 10 
Remember the byte in a file are numbered begin from  zero 
therefore the pointer will be pointing to 
the 11th byte in file  
*/
```

- EOF flag is turned off using function clear()

---

## Command line arguments

main() function can take two argument

```cpp
main(int argc, char *argv[])
```

- argc represents the no. of arguments
- second argument argv (known as argument vector ) is an array of char type pointers that points to the command line arguments. The size of this array will be equal to the value of argc.

 

---

## Templates

- Templates allows us to create generic classes

```cpp
template < class T >
class item{
	T varName;
	//use anonymous type T wherever appropriate
} 
```

- We can use more than one generic datatype in class template

```cpp
template < class T1, class T2 >
```

```cpp
template < class T1=int> // default data type specified as int
```

- Like class template we can also define function template

---

## Exception Handling

```cpp
try{
	// try block
	throw exception;
}catch( type arg )
{
	// catch block
}
```

```cpp
catch(...)
{
	// catch all exceptions
}
```

- When an exception is rethrown it will be caught by anappropriate catch in the outer try/catch  sequence only
- Try/catch block can be used inside construcor and destructor

---

## STL

STL contains several components but at its core are three key components. They are

1. containers
2. Algorithms
3. Iterators

 

- Algorithms employ iterators to perform operations on  objects stored in containers

---

- A container is an object that actually stores data
- An algorithm is a procedure that is used to process the data contained in the containers. Algorithms are implemented by template functions.
- An iterator is an object ( like pointer ) that points to an element in a container.
- To have access to STL algorithms, we must include <algorithm> in our program.
- STL also contains few numeric algorithms under <numeric>
- containers are divided into three major categories sequential, associative and derived

 

---

## Vectors

- Vector is the most widely used container
- A vector can change its size dynamically and therefore allocates memory as needed at runtime
- We must include header file <vecor> to use vector class in our program

```cpp
typedef map<string, int> phonemap;
```

---

## Strings

All algorithms that are applicable for containers can be used with string objects

### Important Functions

- at()
- find()
- insert()
- lenght()
- replace()

```cpp
getline(cin, str); // Reads embeded blanks
```

Accessing characters in strings

- at()
- substr()
- find()
- find_first_of()
- find_last_of()

We can also use overloaded [] operator ( which makes a string object look like an array ) to access individual element in a string

```cpp
int x = s1.compare(s2);
if( x == 0 )
	cout << "s1 == s2";
else if( x > 0 )
	cout << "s1 > s2";
else
	cout << "s1 < s2";
```

compare () compares the strings s1 against s2 and assigned 0 if the strings are equal, a positive number if s1 is lexicographically greater than s2 or a negative otherwise

---

- Values of type bool are automaticallt elevated to integers when used in nonBoolean expressions
- The character type wchar_t has been defined in NSI c++ to hold 16-bit wide chracters
- Wide character literal begin with letter L

```cpp
L'xy' // Wide character literal
```

```cpp
double x = double (m); // cpp type casting
double y = (double) n; // c type casting
```

---

### The static_cast operator

syntax: static_cast <type> (object);

```cpp
int m = 10;
char ch = static_cast <char> (m);
```

---

- We can use the typeid operator  to obtain the types of unknown objects. Such as their classname at runtime.

```cpp
char *objectType = typeid(object).name();
```

- We must include <typeinfo> header file to use the operators dynamic_cast and typeid which provide runtime type information (RTTI)
- mutable keyword is used when we want to change/modify value of particular data item of const object
- ANSI c++ standard has added a new keyword namespace to define a scope that could hold global identifiers.
- We can define our own namespace in our program.

```cpp
namespace NS1
{
	// declaration of variable, functions and classes etc.
}
```

```cpp
namespace TestSpace
{
	int m;

	function display(int n)
	{
		cout << n;
	}
}

TestSpace::m = 100;
```

- namespace can be nested within another namespace
- To access nested namespace variable

```cpp
cout << NS1::NS2::m;
```

Alternatively

```cpp
using namespace NS!;
cout << NS2::m;
```

```cpp
t main()
{
	using namespace NS1; // brings members of NS1 to current scope
}
```

### Operator keywords

- C++ contain 64 keywords including main.
- The ANSI c++ standard has defined a new way to specify header files.They do not use .h extension to filename. eg. #include<iostream>
- However the traditional style <iostream.h>,<fstream.h> etc. is still fully supported

---