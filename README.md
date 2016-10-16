
#**Functional Point Analysis (FPA)**

###Introduction
The aim of this project is to "Evaluate the Function Points of a Software”. The literary meaning of the word “Functional Point” is a unit measure for software. Every enterprise needs Functional Point Analysis for sizing of the project. Function Points are the standard unit of measure that represent the functional size of a software application. Function Points are easily understood by the non technical user.
Since Function Points measures systems from a functional perspective they are independent of technology. Regardless of language, development method, or hardware platform used, the number of function points for a system will remain constant. The only variable is the amount of effort needed to deliver a given set of function points. Therefore, **Function Point Analysis** (FPA) can be used to determine whether a tool, an environment, a language is more productive compared with others within an organization or among organizations. This is a critical point and one of the greatest values of Function Point Analysis.
Function Point Counts at the end of requirements, analysis, design, code, testing and implementation can be compared. The function point count at the end of requirements and/or designs can be compared to function points actually delivered. If the project has grown, there has been scope creep. The amount of growth is an indication of how well requirements were gathered by and/or communicated to the project team. If the amount of growth of projects declines over time it is a natural assumption that communication with the user has improved.

### Implementation of Function Point Analysis
Implementation is the stage of the project where the theoretical design is turned into a working system. It can be considered to be the most crucial stage in achieving a successful new system gaining the users confidence that the new system will work and will be effective and accurate. 

In this project, we have created multiple database to store the parameters submitted by the user. There are also the tables of constant parameters like General Characteristics Systems, assumption page which includes the (data element types and record element type and files updated or referenced). After retrieving data from the above mentioned table and from the user, our website computes the functional points of the system. These functional points are thus can be used for cost estimation and other metrics. 

###Folder Structure 

The main folder FPA contains files of multiple types. It contains a folder of sample which consists of all the website front-end and back-end code. Also, it contains the **fpa.sql** which consists of the database in which multiple tables (like assumption page, General system Characteristics, projectGSC, projectAssumtion page) are stored. In the sample folder, there are files which are the php, HTML files for the front end of the website.

###Software Dependencies 

 * Operating system: Window 2000 or later OS
 * Database: My SQL SERVER 5.0.83 
 *	Web Server : Apache Framework 2.2.11
 *	Language Used: PHP Version-5.2.10
 *	Text Editor: Editplus Version 3.11
 * 	Platform used: phpMyAdmin Version- 3.2.0.1
###How to run

 * Go to the **phpmyadmin** and import the sql file provided in the **FPA_init** folder. 
 * Then copy the folder in **htdocs** present in the server files and folders.
 * Then run the apache server.
 * After running the server, open the **localhost** file and then give the location as *sample/project.php*.
 
###References 

	1> www.softwaremetrics.com/fpafund.htm
	2> Software Estimation: Demystifying the Black Art (Developer Best Practices), Publisher: Microsoft Press; 1 edition (March 1, 2006), ISBN-10: 0735605351
		ISBN-13: 978-0735605350
	3> Software Engineering by K.K. Aggarwal, Yogesh Singh, Publisher: New Age International Pvt Ltd Publishers; 2nd edition edition (December 1, 2006), 
		ISBN-10: 8122416381 ISBN-13: 978-8122416381 
