<<<<<<< HEAD
<?
// Соединямся с БД

}
echo "</div>
</div>
<div class='task_pag'>
    <ul class='pagination'>
        <li><a href='?pageno=1'>First</a></li>";
        echo "<li class='";
        if($pageno <= 1)
        { 
          echo "disabled"; 
        } 
        echo "'>";
        echo "<a href='";
        if($pageno <= 1)
        { 
          echo "#"; 
        }
        else 
        { 
          echo "?pageno=";
          echo ($pageno - 1); 
        }
        echo "'>Prev</a>";
        echo "</li>";
        echo "<li class='";
        if($pageno >= $total_pages)
        { echo "disabled"; } 
        echo "'>";
        echo "<a href='";
        if($pageno >= $total_pages)
        { echo "#'"; }
        else 
        { 
        echo "?pageno=";
        echo ($pageno + 1); 
        } 
        echo "'>Next</a>";
        echo "</li>";
        echo "<li><a href='?pageno=";
        echo $total_pages;
        echo "'>Last</a></li>";


echo "</ul></div>";        
// Закрываем соединение с БД
mysqli_close($db);


=======
<?
// Соединямся с БД

}
echo "</div>
</div>
<div class='task_pag'>
    <ul class='pagination'>
        <li><a href='?pageno=1'>First</a></li>";
        echo "<li class='";
        if($pageno <= 1)
        { 
          echo "disabled"; 
        } 
        echo "'>";
        echo "<a href='";
        if($pageno <= 1)
        { 
          echo "#"; 
        }
        else 
        { 
          echo "?pageno=";
          echo ($pageno - 1); 
        }
        echo "'>Prev</a>";
        echo "</li>";
        echo "<li class='";
        if($pageno >= $total_pages)
        { echo "disabled"; } 
        echo "'>";
        echo "<a href='";
        if($pageno >= $total_pages)
        { echo "#'"; }
        else 
        { 
        echo "?pageno=";
        echo ($pageno + 1); 
        } 
        echo "'>Next</a>";
        echo "</li>";
        echo "<li><a href='?pageno=";
        echo $total_pages;
        echo "'>Last</a></li>";


echo "</ul></div>";        
// Закрываем соединение с БД
mysqli_close($db);


>>>>>>> b409f354444ccc324ecee49635a0ba04f319a4e9
?>