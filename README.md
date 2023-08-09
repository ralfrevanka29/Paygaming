# Sistem Informasi Top Up Game
## Badges

<img src='https://img.shields.io/badge/HTML-239120?style=for-the-badge&logo=html5&logoColor=white'></img>
<img src='https://img.shields.io/badge/CSS-239120?&style=for-the-badge&logo=css3&logoColor=white'></img>
<img src='https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white'></img>
<img src='https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white'></img>
<img src='https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white'></img>

## Description

Sistem ini adalah sebuah contoh penyedia layanan top-up game dengan dashboard admin
yg memiliki :

>Fitur Reporting

>Fitur CRUD

>Fitur Pencarian dengan Datatables

>Fitur Log in Admin dengan keamanan MD5

>Fitur Responsive device

## Requirement
1. Xampp PHP > V.5.6
2. Database MySQL
3. Bahasa Pemrograman PHP
4. Browser Versi Terbaru
5. Text Editor Versi Terbaru

## Installation
Buat database dengan nama <kbd>paygaming</kbd>. Kemudian import database pada folder <kbd>sql</kbd>. Jangan lupa setting lagi file <kbd>connection_db.php</kbd> pada folder <kbd>proses</kbd>. 

## Struktur Folder
```php
📦Paygaming
 ┣ 📂admin
 ┃ ┣ 📂template_admin
 ┃ ┃ ┣ 📜footer_admin.php
 ┃ ┃ ┗ 📜header_admin.php
 ┃ ┣ 📜add_bank.php
 ┃ ┣ 📜add_game.php
 ┃ ┣ 📜add_item.php
 ┃ ┣ 📜bank.php
 ┃ ┣ 📜dashboard.php
 ┃ ┣ 📜edit_bank.php
 ┃ ┣ 📜edit_game.php
 ┃ ┣ 📜game.php
 ┃ ┣ 📜index.php
 ┃ ┗ 📜transaksi.php
 ┣ 📂proses
 ┃ ┣ 📜accept_transaksi.php
 ┃ ┣ 📜addtransaksi.php
 ┃ ┣ 📜add_bank.php
 ┃ ┣ 📜add_game.php
 ┃ ┣ 📜auth.php
 ┃ ┣ 📜connection_db.php
 ┃ ┣ 📜delete_bank.php
 ┃ ┣ 📜delete_game.php
 ┃ ┣ 📜logout.php
 ┃ ┣ 📜reject_transaksi.php
 ┃ ┣ 📜update_bank.php
 ┃ ┗ 📜update_game.php
 ┣ 📂sql
 ┃ ┗ 📜paygaming.sql
 ┣ 📂template
 ┃ ┣ 📜footer.php
 ┃ ┗ 📜header.php
 ┣ 📜ERD-PayGaming.drawio.png
 ┣ 📜homepage.php
 ┣ 📜index.php
 ┣ 📜kodePembayaran.php
 ┣ 📜ML.php
 ┣ 📜readme.md
 ┗ 📜wait.php
 ```

## Credits 
> Versi 1.0 unstable

> Create By Developer: Ralfrevanka99@gmail.com