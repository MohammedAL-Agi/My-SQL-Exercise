-=-=-=-=-=-=-=-=-=-Q1-=-=-=-=-=-=-=-=-=-=-=';<br><br>
CREATE TABLE countries(  
    country_id INT(8) UNSIGNED,  
    country_name VARCHAR(30),  
    region_id INT(8) UNSIGNED  
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q2-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE IF NOT EXISTS countries(  
    country_id INT(8) UNSIGNED,  
    country_name VARCHAR(30),  
    region_id INT(8) UNSIGNED  
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q3-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE IF NOT EXIST dup_contries LIKE countries

<br><br>
-=-=-=-=-=-=-=-=-=-Q4-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE IF NOT EXIST dup_counties AS SELECT * FROM countries

<br><br>
-=-=-=-=-=-=-=-=-=-Q5-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE countries(  
    country_id INT(8) UNSIGNED NOT NULL,  
    country_name VARCHAR(30) NOT NULL ,  
    region_id INT(8) UNSIGNED NOT NULL
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q6-=-=-=-=-=-=-=-=-=-=-=';
<br><br>

CREATE TABLE jobs(
	job_id INT(8),
	job_title VARCHAR(30), 
	min_salary INT(20), 
	max_salary INT(20)
	CHECK(max_salary >= 25000)
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q7-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE countries(  
    country_id INT(8) UNSIGNED,  
    country_name VARCHAR(30),  
    region_id INT(8) UNSIGNED 
		CONSTRAINT country_name CHECK (country_name IN ('Italy', 'China', 'India'))
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q8-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE job_history (
	employee_id varchar(12),
	start_date date ,
	end_date date ,
	CHEK (end_date LIKE 'mm/DD/YYYY'),
	job_id varchar(12),
	department_id varchar(12)
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q9-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE IF NOT EXISTS countries (
	country_id varchar(12) ,
    country_name varchar(30) ,
    region_id varchar(12),
    UNIQUE(county_id)
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q10-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE IF NOT EXISTS jobs (
	job_id varchar(12) ,
    job_title varchar(30) DEFAULT '',
    min_salary varchar(12) DEFAULT 8000 ,
    max_salary varchar(12) DEFAULT NULL
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q11-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE IF NOT EXISTS countries (
	country_id varchar(12) PRIMARY KEY  ,
    country_name varchar(30) ,
    region_id varchar(12),
    UNIQUE (country_id)
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q12-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE IF NOT EXISTS countries (
	country_id varchar(12) AUTO_INCREMENT  ,
    country_name varchar(30) ,
    region_id varchar(12),
    UNIQUE (country_id)
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q13-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE IF NOT EXISTS countries (
COUNTRY_ID varchar(12) ,
COUNTRY_NAME varchar(40)  ,
REGION_ID varchar(10) ,
PRIMARY KEY (COUNTRY_ID,REGION_ID)
)


<br><br>
-=-=-=-=-=-=-=-=-=-Q14-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE job_history (
	employee_id varchar(12) PRIMARY KEY ,
	start_date date ,
	end_date date ,
	job_id varchar(12) ,
	department_id varchar(12),
    FOREIGN KEY(job_id) REFERENCES jobs(job_id)
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q15-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE employees (
	employee_id varchar(10),
    first_name varchar(20),
    last_name varchar (20),
    email varchar(20),
    phone_number varchar(15),
    hire_date date ,
    salary varchar(10),
    commission varchar (20),
    manager_id varchar(10),
    department_id varchar(10),
    UNIQUE (employees_id),
    FOREIGN KEY(department_id, manager_id)
    REFERENCES department(department_id, manager_id)
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q16-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE employees (
	employee_id varchar(10),
    first_name varchar(20),
    last_name varchar (20),
    email varchar(20),
    phone_number varchar(15),
    hire_date date ,
    salary varchar(10),
    commission varchar (20),
    manager_id varchar(10),
    department_id varchar(10),
    UNIQUE (employees_id),
    FOREIGN KEY(department_id)
    REFERENCES department(department_id),
    FOREIGN KEY(job_id)
    REFERENCES jobs(job_id)   
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q17-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE employees (
	employee_id varchar(10),
    first_name varchar(20),
    last_name varchar (20),
    salary varchar(10),
    UNIQUE (employees_id),
    FOREIGN KEY(job_id)
    REFERENCES jobs(job_id)
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q18-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE employees (
	employee_id varchar(10),
    first_name varchar(20),
    last_name varchar (20),
    salary varchar(10),
    UNIQUE (employees_id),
    FOREIGN KEY(job_id)
    REFERENCES jobs(job_id)
		ON DELETE CASCADE ON UPDATE RESTRICT
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q19-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE employees (
	employee_id varchar(10),
    first_name varchar(20),
    last_name varchar (20),
    salary varchar(10),
    UNIQUE (employees_id),
    FOREIGN KEY(job_id)
    REFERENCES jobs(job_id)
		ON DELETE SET NULL 
		ON UPDATE SET NULL
)

<br><br>
-=-=-=-=-=-=-=-=-=-Q20-=-=-=-=-=-=-=-=-=-=-=';
<br><br>
CREATE TABLE employees (
	employee_id varchar(10),
    first_name varchar(20),
    last_name varchar (20),
    salary varchar(10),
    UNIQUE (employees_id),
    FOREIGN KEY(job_id)
    REFERENCES jobs(job_id)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
)

