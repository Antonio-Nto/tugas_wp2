<section>
    <h1><?php echo $judul ?></h1>
    <form action="<?php echo base_url().'web/outuser'?>" method="post">
        <pre>Username : <input type="text" id="user" name="user"></pre>            
        <pre>Password : <input type="password" name="pass" id="pass"></pre>
        <pre>           <input type="submit" value="Submit"></pre>
    </form>
</section>