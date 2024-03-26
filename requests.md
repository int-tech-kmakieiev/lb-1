# SQL-запити
## **Перелік палат, у яких чергує обрана медсестра**

```sql
SELECT w.name AS ward_name  
FROM ward w  
INNER JOIN nurse_ward nw ON w.id_ward = nw.fid_ward  
INNER JOIN nurse n ON n.id_nurse = nw.fid_nurse  
WHERE n.name = "makieieva";  
```

## **Медсестри обраного відділення**

```sql
SELECT n.name AS nurse_name  
FROM nurse n  
WHERE n.department = 1;  
```

## **Медсестри обраного відділення**

```sql
SELECT n.name AS nurse_name, n.date AS shift_date, w.name AS ward_name
FROM nurse n
INNER JOIN nurse_ward nw ON n.id_nurse = nw.fid_nurse
INNER JOIN ward w ON w.id_ward = nw.fid_ward
WHERE n.shift = "First";
```