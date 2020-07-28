<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php 

        echo "<h3> Soal No 1 Greetings </h3>";
        /* 
            Soal No 1
            Greetings
            Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

            contoh: greetings("abduh");
            Output: "Halo Abduh, Selamat Datang di Sanbercode!"
        */

        // Code function di sini
        function greetings($name){
            echo "Halo $name, Selamat Datang di Sanbercode! <br>";
        }

        // Hapus komentar untuk menjalankan code!
         greetings("Bagas");
         greetings("Wahyu");
         greetings("Abdul");

        echo "<br>";
        
        echo "<h3>Soal No 2 Reverse String</h3>";
        /* 
            Soal No 2
            Reverse String
            Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
            Function reverseString menerima satu parameter berupa string.
            NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

            reverseString("abdul");
            Output: ludba
            
        */
// Code function di sini 
        function reverseString($name){
            $string_length = strlen($name);
            $reversed_string = '';
            for ($i = $string_length-1; $i>=0; $i--){
                $reversed_string .= $name[$i];
            }
            return $reversed_string;
        }
// Hapus komentar di bawah ini untuk jalankan Code
        echo reverseString("abduh");
        echo "<br>";
        echo reverseString("Sanbercode");
        echo "<br>";
        echo reverseString("We Are Sanbers Developers");

        echo "<h3>Soal No 3 Palindrome </h3>";
        /* 
            Soal No 3 
            Palindrome
            Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
            Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
            Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
            NB: 
            Contoh: 
            palindrome("katak") =>  output : true
            palindrome("jambu") => output : false
            NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
            
        */
        // Code function di sini
        /*
        function palindrome($name){
            if (strlen($name) == 0){
                echo "true";
                return true;
            }
            if ($name[0] == $name[strlen($name)-1]){
                //echo "true";
                return true and palindrome(substr($name,1,strlen($name)-2));
            }
            else {
                echo "false";
                return false;
            }
        }
        */
        function palindrome($name){
            
            $bool = true;
            for ($i = 0; $i <(strlen($name)-1 )/ 2; $i++){
                if ($name[$i] == $name[strlen($name)-1-$i]){
                    $bool = true;
                }else{
                    $bool = false; 
                }  
            }
            if($bool == false){
                echo $name. " False <br>";
            }
            else {
                echo $name. " True <br>";
            }
            return $bool;
        }

        // Hapus komentar di bawah ini untuk jalankan code
        echo palindrome("civic") ; // true
        echo "<br>";
        echo palindrome("nababan") ; // true
        echo "<br>";
        echo palindrome("jambaban"); // false
        echo "<br>";
        echo palindrome("racecar"); // true
    ?>
</body>
</html>
