insert into table mart_customer_feasibility_detail
select a.userid as customer_id, a.name as Name, a.mobile as Telephone, a.installationAddress as Address, c.packageName as Package, a.packageprice as Total
from mariadb_internet_package a
join mariadb_locations b on a.indihomenum = b.indihomenum
join mariadb_booking_confirmations c on a.transactionId = c.trackId;


CREATE TABLE mart_customer_feasibility_detail(
customer_id int,
Name string,
Telephone string,
Address string,
Package string,
Total int)
STORED AS ORC
LOCATION 'hdfs://horton/warehouse/tablespace/external/hive/sandbox_mihx_analytics.db/mart_customer_feasibility_detail';


Database yang digunakan 
mariadb_booking_confirmations
mariadb_internet_package
mariadb_kycs


select a.userid as customer_id, a.name as Name, a.mobile as Telephone, a.installationAddress as Address, c.packageName as Package, a.packageprice as Total
from mariadb_internet_package a
join mariadb_locations b on a.indihomenum = b.indihomenum
join mariadb_booking_confirmations c on a.transactionId = c.trackId limit 1;

INSERT INTO TABLE mart_kycs(
SELECT a.user_id as customer_id, b.name as name, b.mobile as telephone, b.installationAddress as address, a.packagename as package_name, b.packageprice as total, c.ValidationStatus as ValidationStatus, a.region as regional, a.witel as witel, c.updatedAt as created_at
FROM mariadb_booking_confirmations a
join mariadb_internet_package b ON a.trackid = b.transactionid
join mariadb_kycs c ON a.trackid = c.trackid);

CREATE TABLE mart_kycs_detail( 
customer_id int,
name string,
telephone string,
address string,
package_name string,
total int,
ValidationStatus string,
regional string,
witel string)
STORED AS ORC
LOCATION 'hdfs://horton/warehouse/tablespace/external/hive/sandbox_mihx_analytics.db/mart_kycs_detail';


INSERT INTO TABLE mart_kycs(
SELECT b.userid as customer_id, b.name as name, b.mobile as telephone, b.installationAddress as address, a.packagename as package_name, b.packageprice as total, c.ValidationStatus as ValidationStatus, a.region as regional, a.witel as witel, c.createdAt
 as created_at, c.updatedAt as updated_at
FROM mariadb_booking_confirmations a
join mariadb_internet_package b ON a.trackid = b.transactionid
join mariadb_kycs c ON a.trackid = c.trackid);

CREATE TABLE mart_kycs( 
customer_id string,
name string,
telephone string,
address string,
package_name string,
total int,
ValidationStatus string,
regional string,
witel string)
STORED AS ORC
LOCATION 'hdfs://horton/warehouse/tablespace/external/hive/sandbox_mihx_analytics.db/mart_kycs';


INSERT INTO TABLE mart_kycs(
SELECT b.userid as customer_id, b.name as name, b.mobile as telephone, b.installationAddress as address, a.packagename as package_name, b.packageprice as total, c.ValidationStatus as ValidationStatus, a.region as regional, a.witel as witel, c.createdAt
 as created_at, c.updatedAt as updated_at
FROM mariadb_booking_confirmations a
join mariadb_internet_package b ON a.trackid = b.transactionid
join mariadb_kycs c ON a.trackid = c.trackid);


INSERT INTO TABLE mart_kycs(
SELECT b.userid as customer_id, b.name as name, b.mobile as telephone, b.installationAddress as address, a.packagename as package_name, b.packageprice as total, c.ValidationStatus as ValidationStatus, a.region as regional, a.witel as witel, c.createdAt
 as created_at, c.updatedAt as updated_at
FROM mariadb_kycs c FULL OUTER JOIN mariadb_internet_package b ON c.trackid=b.transactionid
join mariadb_booking_confirmations a ON c.trackid = a.trackid;

CREATE TABLE mart_kycs( 
customer_id string,
name string,
telephone string,
address string,
package_name string,
total int,
ValidationStatus string,
regional string,
witel string,
city string,
created_at date,
updated_at date)
STORED AS ORC
LOCATION 'hdfs://horton/warehouse/tablespace/external/hive/sandbox_mihx_analytics.db/mart_kycs';

SELECT DISTINCT c.validationstatus
FROM mariadb_kycs c FULL OUTER JOIN mariadb_internet_package b ON c.trackid=b.transactionid
join mariadb_booking_confirmations a ON c.trackid = a.trackid;

INSERT INTO TABLE mart_kycs(
SELECT DISTINCT c.validationstatus
FROM mariadb_kycs c FULL outer JOIN mariadb_internet_package b ON c.trackid=b.transactionid
FULL outer join mariadb_booking_confirmations a ON c.trackid = a.trackid);

/* full outer with id same */
SELECT b.userid as customer_id, b.name as name, b.mobile as telephone, b.installationAddress as address, a.packagename as package_name, b.packageprice as total, c.ValidationStatus as ValidationStatus, a.region as regional, a.witel as witel, c.createdAt
 as created_at, c.updatedAt as updated_at FROM mariadb_kycs c FULL outer JOIN mariadb_internet_package b ON c.id=b.id
FULL outer join mariadb_booking_confirmations a ON c.id = a.id limit 5;

/* full Join with track id = transactionid */
SELECT b.userid as customer_id, b.name as name, b.mobile as telephone, b.installationAddress as address, a.packagename as package_name, b.packageprice as total, c.ValidationStatus as ValidationStatus, a.region as regional, a.witel as witel, c.createdAt
 as created_at, c.updatedAt as updated_at FROM mariadb_kycs c FULL JOIN mariadb_internet_package b ON c.trackid=b.transactionid
FULL outer join mariadb_booking_confirmations a ON c.trackid = a.trackid limit 5;

/* full outer with track id = transactionid */
SELECT DISTINCT c.validationstatus
FROM mariadb_kycs c FULL OUTER JOIN mariadb_internet_package b ON c.trackid=b.transactionid
FULL OUTer join mariadb_booking_confirmations a ON c.trackid = a.trackid

/* coba query baru -> null */
select * FROM mariadb_kycs a FULL outer join mariadb_internet_package b ON a.trackid=b.transactionid
FULL OUTer join mariadb_booking_confirmations c ON a.trackid = c.trackid limit 1;

/* data validationstatus full */
select distinct a.validationstatus FROM mariadb_kycs a join mariadb_internet_package b ON a.validationstatus=b.validationstatus
join mariadb_booking_confirmations c ON a.trackid = c.trackid;

select * FROM mariadb_kycs a FULL outer join mariadb_internet_package b ON a.validationstatus=b.validationstatus
FULL join mariadb_booking_confirmations c ON a.trackid = c.trackid limit 3;

SELECT b.userid as customer_id, b.name as name, b.mobile as telephone, b.installationAddress as address, c.packagename as package_name, b.packageprice as total, a.ValidationStatus as ValidationStatus, c.region as regional, c.witel as witel, a.createdAt as created_at, a.updatedAt as updated_at FROM mariadb_kycs a FULL outer join mariadb_internet_package b ON a.validationstatus=b.validationstatus FULL  join mariadb_booking_confirmations c ON a.trackid = c.trackid limit 3;

select * FROM mariadb_kycs a FULL outer join mariadb_internet_package b ON a.trackid=b.transactionid
FULL OUTer join mariadb_booking_confirmations c ON a.trackid = c.trackid limit 1; 

select * FROM mariadb_kycs a full outer join mariadb_internet_package b ON a.trackid=b.transactionid
full outer join mariadb_booking_confirmations c ON a.trackid = c.trackid WHERE validationstatus IS NOT NULL; 

/* benerbenr */
select b.userid, b.name, b.mobile, b.installationAddress, c.packageName, b.packageprice, a.createdAt, a.updatedAt, a.validationStatus, c.region, c.witel
 FROM mariadb_kycs a full outer join mariadb_internet_package b ON a.trackid=b.transactionid
full outer join mariadb_booking_confirmations c ON a.trackid = c.trackid WHERE a.validationstatus is not NULL;

select DISTINCT a.validationStatus FROM mariadb_kycs a full outer join mariadb_internet_package b ON a.trackid=b.transactionid
full outer join mariadb_booking_confirmations c ON a.trackid = c.trackid WHERE a.validationstatus is not NULL;

select b.userid, b.name, b.mobile, b.installationAddress, c.packageName, b.packageprice, a.createdAt, a.updatedAt, a.validationStatus, c.region, c.witel, d.city as Kota
 FROM mariadb_kycs a
Full outer join mariadb_internet_package b ON a.trackid=b.transactionid
full outer join mariadb_booking_confirmations c ON a.trackid = c.trackid 
FULL outer join mariadb_locations d on a.id = d.id;

select b.userid, b.name, b.mobile, b.installationAddress, c.packagename, b.packageprice, a.createdat, a.updateat, a.validationstatus, c.region, c.witel, d.city
FROM mariadb_kycs a 
full outer join mariadb_internet_package b ON a.trackid=b.transactionid
Full outer join mariadb_locations d ON b.indihomenum=d.indihomenum
full outer join mariadb_booking_confirmations c ON a.trackid = c.trackid limit 1;


INSERT INTO TABLE mart_kycs(
select b.userid as customer_id, b.name as name, b.mobile as telephone, b.installationAddress as address, c.packageName as package_name, b.packageprice as Total, a.createdAt as created_at, a.updatedAt as updated_at, a.validationStatus as ValidationStatus, c.region as regional , c.witel as witel, d.city as city
 FROM mariadb_kycs a 
left join mariadb_internet_package b ON a.trackid=b.transactionid
left join mariadb_locations d ON b.indihomenum=d.indihomenum
left join mariadb_booking_confirmations c ON a.trackid = c.trackid 
WHERE a.validationstatus is not NULL);
