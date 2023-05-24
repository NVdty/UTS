<html> 
<head>
    <title>Nova Aditya</title> 
</head>
<body> 
    <form action="" method="post"> 
      
        <h1>KALKULATOR</h1> 
        <h2>Mari Menghitung</h2> 
        <table border="3"> 
            <table width="25%" border="2" cellspacing="0" cellpadding="0"> 
                <tr> 
                    <td align="center"><b>Angka 1</b></td> 
                    
                    <td align="center"><b>Operator</b></td> 
                   
                    <td align="center"><b>Angka 2</b></td> 
                    
                    <td align="center"><b></b></td> 
                </tr> 
                <tr>
                    <td><input type="text" name="angka1" size="20" /></td> 
                   
                    <td>
                        <select name="operasi"> 
                            
                            <option value="*">x</option> 
                            <option value="/">:</option> 
                            <option value="+">+</option> 
                            <option value="-">-</option> 
                            <option value="%">%</option> 
                        </select>
                    </td> 
                    <td><input type="text" name="angka2" size="20" /></td> 
                    
                    <td><input type="submit" value="Hitung" /></td>
                    
                </tr> 
            </table> 
        </table> 
        
        <?php 
        if (isset($_POST["angka1"]) && isset($_POST["angka2"])) { 
           
            
            $angka1 = $_POST["angka1"]; // Mengambil nilai angka1
            $angka2 = $_POST["angka2"]; // Mengambil nilai angka2
            if ($_POST["operasi"] == '*') { 
                
                echo "<br> hasil = ";
                echo $angka1 * $angka2; 
               
            } elseif ($_POST["operasi"] == '/') { 
               
                echo "<br> hasil = ";
                echo $angka1 / $angka2; 
                
            } elseif ($_POST["operasi"] == '+') { 
               
                echo "<br> hasil = ";
                echo $angka1 + $angka2; 
                
            } elseif ($_POST["operasi"] == '-') { 
                
                echo "<br> hasil = ";
                echo $angka1 - $angka2; 
                
            } elseif ($_POST["operasi"] == '%') { 
                
                echo "<br> hasil = ";
                echo $angka1 % $angka2; 
              
            } 
        } 
        ?> 
    </form> 
</body> 
</html> 
