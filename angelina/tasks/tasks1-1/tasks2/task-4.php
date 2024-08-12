    <form action="#" method="GET">
    Text: <input type="text" name="text"><br>
    <input type="submit">
    </form>

    <?php
        if(isset($_GET['text'])){
            echo $_GET['text'];
        }
    ?>