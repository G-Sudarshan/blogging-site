# Installing Java on Ubuntu [ Easy Way ]

In this guide, we will describe how to install Java on Ubuntu 20.04.

# Installing OpenJDK 11

Open Terminal, As always first check for updates

```bash
sudo apt-get update
```

Then type following command in terminal

```bash
sudo apt install openjdk-11-jdk
```

when asked for [ Y/n ], Type Y

Once the installation is complete, you can verify it by checking the Java version:

```bash
java -version
```

The output should look something like this:

```bash
openjdk version "11.0.7" 2020-04-14
OpenJDK Runtime Environment (build 11.0.7+10-post-Ubuntu-3ubuntu1)
OpenJDK 64-Bit Server VM (build 11.0.7+10-post-Ubuntu-3ubuntu1, mixed mode, sharing)
```

## `JAVA_HOME` Environment Variable

The `JAVA_HOME` [environment variable](https://linuxize.com/post/how-to-set-and-list-environment-variables-in-linux/) is used by some Java applications to determine the Java installation location.

To set the `JAVA_HOME` variable, first find the Java installation path with `update-alternatives`:

```
sudo update-alternatives --config java
```

In this example, the installation paths are as follows:

- OpenJDK 11 is located at `/usr/lib/jvm/java-11-openjdk-amd64/bin/java`

Once you found the path of your preferred Java installation, open the `/etc/environment` file:

```
sudo nano /etc/environment
```

Assuming you want to set `JAVA_HOME` to point to OpenJDK 11, add the following line, at the end of the file:

/etc/environment

`JAVA_HOME="/usr/lib/jvm/java-11-openjdk-amd64"`
Copy

For changes to take effect on your current shell you can either log out and log in or run the following `[source](https://linuxize.com/post/bash-source-command/)` command:

```
source /etc/environment
```

Verify that the `JAVA_HOME` environment variable was correctly set:

```
echo $JAVA_HOME
```

You should see the path to the Java installation:

That’s it! At this point, you have successfully installed Java on your Ubuntu system!

Now for complete assurance 

Open any text editor type following following code

```java
class Simple{  
        public static void main(String args[]){  
         System.out.println("Hello Java");  
        }  
    }
```

> save this code as Simple.java

cd to the folder where the program is saved. 

then compile using following command in terminal. ( remember S is capital in Simple )

```java
javac Simple.java
```

and then run using following command

```java
java Simple
```

If you are able to see this output ..... then your java is successfully installed on Ubuntu!

```bash
Hello Java
```

## Uninstalling Java

You can uninstall Java like any other package installed with apt .

For example, to uninstall the default-jdk package enter:

```bash
sudo apt remove openjdk-11-jdk
```

## Conclusion

OpenJDK 11 and OpenJDK 8 are available in the default Ubuntu 20.04 repositories and can be installed using the apt package manager.