# Backend-Experiment8: File Upload

## Steps

### 1. Create Database Table
Create table `uploads` in `backend_experiments`:

CREATE TABLE uploads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255),
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

### 2. Place Files
Put all files in:
MAMP: /Applications/MAMP/htdocs/experiment8  

Files:
db_connect.php
upload_form.php
upload.php
uploads/  (directory for uploaded files)

### 3. Run
MAMP:  
http://localhost:8888/experiment8/upload_form.php  

### 4. Upload
Select a file (jpg, jpeg, png, gif, max 5MB) → Submit → File will be saved in the `uploads/` directory and the filename stored in the database.
