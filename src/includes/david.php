<?php
    $bold = "";
    $rand = rand(0,1);
    if ($rand == 0)
    {
        $bold = "bold";
    }
    else
    {
        $bold = "normal";
    }
?>
<p style="background-color:#a05050">This section is STILL under construction by
    <span style='font-weight:<?= $bold ?>'>David Lafferty</span>
</p>